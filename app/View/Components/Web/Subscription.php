<?php

namespace App\View\Components\Web;

use App\Models\Package\Package;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Subscription extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $packages = Package::all();
        return view('components.web.subscription', compact("packages"));
    }
}
