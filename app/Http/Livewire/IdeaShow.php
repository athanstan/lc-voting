<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Idea;


class IdeaShow extends Component
{

    public $idea; //Includes votes_count
    public $hasVoted;
    public $votesCount;

    public function mount()
    {
        $this->hasVoted = $this->idea->isVotedByuser(auth()->user());
        $this->votesCount = $this->idea->votes_count;

    }

    public function vote()
    {
        # Redirect user if not logged in.
        if (!Auth::check()) {
            return redirect(route('login'));
        }

        #Let's Vote.

        if($this->hasVoted){
            #Yes, Remove Vote
            $this->idea->removeVote(Auth::user());
            $this->votesCount--;
            $this->hasVoted = false;
        }else{
            #No, Add Vote
            $this->idea->vote(Auth::user());
            $this->votesCount++;
            $this->hasVoted = false;
        }
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
