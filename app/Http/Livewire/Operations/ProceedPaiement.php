<?php

namespace App\Http\Livewire\Operations;

use App\Models\PaiementOrder;
use App\Models\Patient;
use Exception;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ProceedPaiement extends ModalComponent
{
    public Patient $patient;
    public int $operationId; 
    public $name, $amount, $description;

    protected $rules = [
        'amount' => 'required|numeric',
        'description' => 'required|min:3',
    ];

    public function mount()
    {
        $this->name = $this->patient->prenom . ' ' . $this->patient->nom;
    }

    public function render()
    {
        return view('livewire.operations.proceed-paiement');
    }

    public function store()
    {
        $validatedData = $this->validate();

        try {
            $validatedData['operationID'] = $this->operationId;
            $validatedData['patientID'] = $this->patient->id;

            PaiementOrder::create($validatedData);
            
            return redirect('/operations');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
