<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Idea;


class IdeaShow extends Component
{

    public $idea; //Includes votes_count
    public $hasVoted;

    public function mount()
    {
        $this->hasVoted = $this->idea->isVotedByuser(auth()->user());
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
