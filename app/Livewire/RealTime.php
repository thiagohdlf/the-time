<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class RealTime extends Component
{
    public $time;

    public function mount()
    {
        $this->time = now()->format('H:i:s');
        //$this->time = Carbon::now();
        $this->interval = 1000;
        $this->dispatch('updateTime');
    }

    public function updateTime()
    {
        $this->time = now()->format('H:i:s');
    }

    public function render()
    {
        $time = $this->mount();
        return view('livewire.real-time', compact('time'));
    }
}
