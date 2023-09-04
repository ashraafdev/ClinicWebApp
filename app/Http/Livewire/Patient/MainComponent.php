<?php

namespace App\Http\Livewire\Patient;

use App\Models\PaiementOrder;
use App\Models\Patient;
use Illuminate\Http\Request;
use Livewire\Component;
use Stripe\Checkout\Session;

class MainComponent extends Component
{

    public function mount(Request $request) {

        if ($request->has('session_id')) {

            $patient = Patient::find($request->get('pI'));
            $paymentData = $patient->stripe()->checkout->sessions->allLineItems($request->get('session_id'));

            $productName = $paymentData->data[0]->description;
            $productPrice = $paymentData->data[0]->amount_total;

            PaiementOrder::where([
                ['description', '=', $productName],
                ['amount', '=', $productPrice],
                ['patientID', '=', $patient->id],
            ])->first()->update(['status' => 1]);
            
        }
    }

    public function render()
    {
        if (!(auth()->user()->hasRole('Assistant') || auth()->user()->hasRole('Medecin') || auth()->user()->hasRole('Infirmier'))) abort(401);
        return view('livewire.patient.main-component');
    }
}
