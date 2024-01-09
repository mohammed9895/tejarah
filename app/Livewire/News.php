<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class News extends Component
{

    public $blogs;
    public function mount()
    {
        $this->blogs = Blog::all();
    }
    public function render()
    {
        return view('livewire.news');
    }
}
