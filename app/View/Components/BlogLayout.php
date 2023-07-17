<?php

namespace App\View\Components;

use App\Models\Department;
use App\Models\SiteSetting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogLayout extends Component
{
    public $showbreadcrumb;
    public $title;
    public $departments;
    public $site;
    /**
     * Create a new component instance.
     */
    public function __construct($title ,$showbreadcrumb = true)
    {
        $this->title = $title;
        $this->showbreadcrumb = $showbreadcrumb;
        $this->departments = Department::limit(6)->inRandomOrder()->get();
        $this->site = SiteSetting::latest()->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.blog-layout');
    }
}
