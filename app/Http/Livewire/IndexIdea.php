<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

# Exceptions
use App\Exceptions\VoteNotFoundException;
use App\Exceptions\DuplicateVoteException;

class IndexIdea extends Component
{
    public $idea;
    public $hasVoted;
    public $votesCount;

    public function mount()
    {
        // dd($this->idea);
        $this->hasVoted = $this->idea->voted_by_user;
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
        return view('livewire.index-idea');
    }
}
