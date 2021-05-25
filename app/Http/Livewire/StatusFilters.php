<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Idea;

use Illuminate\Support\Facades\Route;

class StatusFilters extends Component
{
    public $status = 'All';
    public $statusCount;

    protected $queryString = [
        'status' => ['except' => ''],
    ];

    public function mount()
    {

        // $this->statusCount = Idea::selectRaw();

        if(Route::currentRouteName() === 'idea.show'){
            $this->status = null;
            $this->queryString = [];
        }
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;


        // if ($this->getPreviousRouteName() === 'idea.show') {
            return redirect()->route('idea.index', [
                'status' => $this->status,
            ]);
        // }

    }

    public function render()
    {
        return view('livewire.status-filters');
    }

    private function getPreviousRouteName()
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
