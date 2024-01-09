<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class SingleBlog extends Component
{
    public Blog $blog;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function render()
    {
        return view('livewire.single-blog');
    }
}
