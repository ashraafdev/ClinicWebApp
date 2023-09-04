<?php

namespace App\Http\Livewire\Patient;

use App\Models\PaiementOrder;
use App\Models\Patient;
use Exception;
use LivewireUI\Modal\ModalComponent;

class PayementsWaitinglist extends ModalComponent
{
    public Patient $patient;

    public function render()
    {
        $payements = PaiementOrder::where('patientID', $this->patient->id)->paginate(6);

        return view('livewire.patient.payements-waitinglist', [
            'payements' => $payements,
        ]);
    }

    public function deletePayementOrder(int $payementOrderId)
    {
        try {
            PaiementOrder::find($payementOrderId)->delete();
            return redirect('/patients');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }

    public function continueToCheckout(int $payementOrderId)
    {
        $payementOrder = PaiementOrder::find($payementOrderId);

        return $this->patient->checkoutCharge($payementOrder->amount / 100, $payementOrder->description, 1, [
            'success_url' => route('patients') .'?session_id={CHECKOUT_SESSION_ID}&pI=' . $this->patient->id,
            'cancel_url' => route('patients') . '?err=1',
        ]);
    }
}
