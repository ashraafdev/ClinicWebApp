<?php

namespace App\Http\Livewire\DepSer;

use App\Models\DepSer;
use Exception;
use LivewireUI\Modal\ModalComponent;

class NewDepSer extends ModalComponent
{
    public $name;

    protected $rules = [
        'name' => 'required|min:3|unique:dep_sers,name',
    ];

    public function render()
    {
        return view('livewire.dep-ser.new-dep-ser');
    }

    public function store()
    {
        $validatedData = $this->validate();
        
        try {
            DepSer::create($validatedData);
            return redirect('/depsers');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
