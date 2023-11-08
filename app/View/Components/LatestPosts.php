<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestPosts extends Component
{

    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = \App\Models\Post::latest()->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.latest-posts');
    }
}
