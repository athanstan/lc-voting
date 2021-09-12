<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Idea;

# Exceptions
use App\Exceptions\VoteNotFoundException;
use App\Exceptions\DuplicateVoteException;


class IdeaShow extends Component
{

    public $idea; //Includes votes_count
    public $hasVoted;
    public $votesCount;

    protected $listeners = ['statusWasUpdated'];

    public function mount()
    {
        $this->hasVoted = $this->idea->isVotedByuser(auth()->user());
        $this->votesCount = $this->idea->votes_count;

    }

    public function statusWasUpdated()
    {
        $this->idea->refresh;
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
            // dd('Voted');
            try {
                $this->idea->removeVote(Auth::user());
            } catch (VoteNotFoundException $ex) {
                // Do nothing.
            }

            $this->votesCount--;
            $this->hasVoted = false;

        }else{
            #No, Add Vote
            try {
                $this->idea->vote(Auth::user());
            } catch (DuplicateVoteException $ex) {
                // Do nothing.
            }

            $this->votesCount++;
            $this->hasVoted = true;
        }
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
