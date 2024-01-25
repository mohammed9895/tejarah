<?php

namespace App\Livewire;

use Livewire\Component;

class Directorates extends Component
{
    public $directorates;
    public $number = '01';
    public function mount($directorates)
    {
        $this->directorates = $directorates;
    }
    public function render()
    {
        return view('livewire.directorates');
    }

    public function setNumber($active_number)
    {
        $this->number = $active_number;
    }
}
