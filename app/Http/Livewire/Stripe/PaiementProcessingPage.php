<?php

namespace App\Http\Livewire\Stripe;

use App\Models\Patient;
use LivewireUI\Modal\ModalComponent;

class PaiementProcessingPage extends ModalComponent
{
    public Patient $patient;

    protected $listeners = ['processPayementSucess' => 'payementProcessing'];
    
    public function render()
    {
        $this->emitTo('patient.main-component', 'paiement-processing-started');
        return view('livewire.stripe.paiement-processing-page');
    }

    public function payementProcessing($data) 
    {
        $this->patient->charge(200, $data['id']);
    }
}
