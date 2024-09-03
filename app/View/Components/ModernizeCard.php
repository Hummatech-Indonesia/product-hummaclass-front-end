<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModernizeCard1 extends Component
{
    public $author;
    public $title;
    public $subtitle;
    public $content;
    public $img;
    public $price;
    public $review;
    public $modules;
    public $sold;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $author,
        $title,
        $subtitle,
        $content,
        $img = null,
        $price,
        $review,
        $modules,
        $sold,
    ) {
        $this->author = $author;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->img = $img?? null;
        $this->price = $price;
        $this->review = $review;
        $this->modules = $modules;
        $this->sold = $sold;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modernize-card-1');
    }
}
