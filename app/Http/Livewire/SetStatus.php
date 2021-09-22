<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Idea;
use App\Mail\IdeaStatusUpdatedMailable;
use Illuminate\Support\Facades\Mail;


class SetStatus extends Component
{

    public $idea;
    public $status;
    public $notifyAllVoters;

    public function mount(Idea $idea)
    {
        $this->idea = $idea;
        $this->status = $this->idea->status->id;

    }

    /* This function will eventually change the status.
        But there will be no visible change because the idea status that is displayed
        on the idea card lives inside a parent livewire component.
        When this scenario occurs, we are looking for an event system, to notify the parent component
        about the change.
    */
    public function setStatus()
    {
        //Needs Permissions this is just a PoC.
        $this->idea->status_id = $this->status;
        $this->idea->save();

        if($this->notifyAllVoters){
            $this->notifyAllVoters();
        }

        $this->emit('statusWasUpdated');
    }

    public function notifyAllVoters()
    {
        $this->idea->votes()
            ->select('name', 'email')
            ->chunk(100, function($voters){
                foreach ($voters as $user) {
                    //Every User here has only 2 attributes. name and email
                    //send email
                    Mail::to($user)
                        ->queue(new IdeaStatusUpdatedMailable($this->idea));
                }
            });


    }

    public function render()
    {
        return view('livewire.set-status');
    }
}
