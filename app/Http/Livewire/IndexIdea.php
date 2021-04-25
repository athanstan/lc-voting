<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexIdea extends Component
{
    public $idea;
    public $hasVoted;

    public function mount()
    {
        // dd($this->idea);
        $this->hasVoted = $this->idea->voted_by_user;
    }

    public function render()
    {
        return view('livewire.index-idea');
    }
}
