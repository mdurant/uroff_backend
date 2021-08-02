<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dialog_insert_evidence extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $open = true;


    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dialog_insert_evidence');
    }
}
