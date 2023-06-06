<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalHarga extends Component
{
    public $totalHarga;
    /**
     * Create a new component instance.
     */
    public function __construct($totalHarga)
    {
        $this->totalHarga = $totalHarga;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.total-harga');
    }
}
