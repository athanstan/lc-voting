<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Idea;


class SetStatus extends Component
{

    public $idea;
    public $status;

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

        $this->emit('statusWasUpdated');

    }

    public function render()
    {
        return view('livewire.set-status');
    }
}
