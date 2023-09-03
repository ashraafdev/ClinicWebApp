<?php

namespace App\Http\Livewire\Operations;

use App\Models\MesureImages;
use App\Models\OperationConsultation;
use Exception;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class MesureUpload extends ModalComponent
{

    use WithFileUploads;

    public $mesurefile;
    public OperationConsultation $operation;

    protected $rules = [
        'mesurefile' => 'required|image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.operations.mesure-upload');
    }

    public function store()
    {
        $this->validate();

        try {
            $imageName = strtotime(date('Y-m-d h:i:s')) . '.' . $this->mesurefile->getClientOriginalExtension();
            $this->mesurefile->storeAs('operations/mesures', $imageName, 'local');

            MesureImages::create([
                'imageName' => $imageName,
                'operationsID' => $this->operation->id,
            ]);
    
            return redirect('/operations');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
