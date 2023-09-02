<?php

namespace App\Http\Livewire\DepSer;

use Livewire\Component;

class MainComponent extends Component
{
    public function render()
    {
        if (!auth()->user()->hasRole('Administrator')) abort(401);
        return view('livewire.dep-ser.main-component');
    }
}
