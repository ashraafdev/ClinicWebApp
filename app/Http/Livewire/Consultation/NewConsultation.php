<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use App\Models\OperationConsultation;
use App\Models\OperationPartiePrenants;
use App\Models\Patient;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class NewConsultation extends ModalComponent
{
    public $showOperationAdditionalData = false;
    public $selectedStaff;

    public $consultation = [
        'patientID' => null,
        'typeConsultation' => 1,
        'objet' => null,
        'observation' => null,
        'date' => null,
    ];

    public $operation = [
        'blocOperatoire' => null,
        'observation' => null,
        'dateDebut' => null,
        'dateFin' => null,
    ];

    protected $rules = [
        'consultation.patientID' => 'required|numeric',
        'consultation.typeConsultation' => 'required|numeric',
        'consultation.objet' => 'required|min:3',
        'consultation.observation' => 'required|min:3',
        'consultation.date' => 'required|date',
        'operation.blocOperatoire' => 'nullable|min:3',
        'operation.observation' => 'nullable|min:3',
        'operation.dateDebut' => 'nullable|date',
        'operation.dateFin' => 'nullable|date',
    ];

    public function render()
    {
        return view('livewire.consultation.new-consultation', [
            'patients' => Patient::all(),
            'staff' => User::hasRoles(['Medecin', 'Infirmier', 'Doctor']),
            'showAdditionalData' => $this->showOperationAdditionalData,
        ]);
    }

    public function toggleAdditionalData($selectedOption)
    {
        if ($selectedOption == 2)
            return $this->showOperationAdditionalData = true;
        return $this->showOperationAdditionalData = false;
    }

    public function store()
    {
        $validatedData = $this->validate();
      
        DB::beginTransaction();

        try {
            $consultationID = (Consultation::create($validatedData['consultation']))->id;
            
            if (intval($validatedData['consultation']['typeConsultation']) == 2) {
    
                $operationID = (OperationConsultation::create([
                    ...$validatedData['operation'], 'consultationID' => $consultationID,
                ]))->id;
    
                foreach ($this->selectedStaff as $staff) {
                    OperationPartiePrenants::create([
                        'operationID' => $operationID,
                        'partiePrenantID' => $staff,
                    ]);
                }

            }

            DB::commit();
            
            return redirect('/consultations');
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit('openModal', 'misc.error-modal');
        }

    }
}
