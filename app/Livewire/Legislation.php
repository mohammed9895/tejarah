<?php

namespace App\Livewire;

use App\Models\LegislationCategory;
use Carbon\Carbon;
use Livewire\Component;

class Legislation extends Component
{

    public $legislations;

    public $year = 2024;
    public $legislationCategoriesList = [];
    public function mount()
    {
        $this->legislations = \App\Models\Legislation::all();
    }

    public function updatedYear($year)
    {
        if ($this->year != '')
        {
            $this->legislations = \App\Models\Legislation::orderBy('created_at', 'DESC')->whereYear('year', '=', $this->year)->orderBy('created_at', 'desc')->get();
        }
        else {
            $this->legislations = \App\Models\Legislation::all();
        }
    }
    public function render()
    {
        if (sizeof($this->legislationCategoriesList) > 0)
        {
            $this->legislations = \App\Models\Legislation::orderBy('created_at', 'DESC')->whereYear('year', '=', $this->year)->whereIn('id', $this->legislationCategoriesList)->orderBy('created_at', 'desc')->get();
        }
        else {
            $this->legislations = \App\Models\Legislation::all();
        }

        return view('livewire.legislation', ['legislationCategories' => LegislationCategory::all()]);
    }

}
