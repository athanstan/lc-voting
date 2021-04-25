<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IdeaShow extends Component
{

    public $idea; //Includes votes_count

    public function render()
    {
        return view('livewire.idea-show');
    }
}
