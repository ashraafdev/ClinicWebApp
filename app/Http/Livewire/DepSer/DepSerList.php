<?php

namespace App\Http\Livewire\DepSer;

use App\Models\DepSer;
use Livewire\Component;
use Livewire\WithPagination;

class DepSerList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.dep-ser.dep-ser-list', [
            'dep_sers' => DepSer::paginate(6),
        ]);
    }
}
