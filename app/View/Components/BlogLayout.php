<?php

namespace App\View\Components;

use App\Models\Articale;
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
    public $last_articales;
    /**
     * Create a new component instance.
     */
    public function __construct($title ,$showbreadcrumb = true)
    {
        $this->title = $title;
        $this->showbreadcrumb = $showbreadcrumb;
        $this->departments = Department::limit(6)->inRandomOrder()->get();
        $this->site = SiteSetting::latest()->first();
        $this->last_articales = Articale::latest('created_at')->take(2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.blog-layout');
    }
}
