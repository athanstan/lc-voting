<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexIdea extends Component
{
    public $idea;

    public function render()
    {
        return view('livewire.index-idea');
    }
}
