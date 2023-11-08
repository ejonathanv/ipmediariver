<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OtherPosts extends Component
{

    public $currentPost;
    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct($currentPost)
    {
        $this->currentPost = $currentPost;
        $this->posts = \App\Models\Post::where('id', '!=', $currentPost->id)->latest()->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.other-posts');
    }
}
