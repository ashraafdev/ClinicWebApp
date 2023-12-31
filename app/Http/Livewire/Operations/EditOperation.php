<?php

namespace App\Http\Livewire\Operations;

use App\Models\OperationConsultation;
use App\Models\OperationPartiePrenants;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class EditOperation extends ModalComponent
{
    public OperationConsultation $operation;

    public $selectedStaff = [];

    protected $rules = [
        'operation.blocOperatoire' => 'required|min:3',
        'operation.observation' => 'required|min:3',
        'operation.dateDebut' => 'required|date',
        'operation.dateFin' => 'required|date',
    ];

    public function mount()
    {
        $this->selectedStaff = array_map(function ($item) {
            return $item['partiePrenantID'];
        }, OperationPartiePrenants::where('operationID', $this->operation->id)->get('partiePrenantID')->toArray());
    }

    public function render()
    {
        return view('livewire.operations.edit-operation', [
            'staff' => User::whereIn('typeEmploi', ['Medecin', 'Infirmier', 'Doctor'])->get(),
        ]);
    }

    public function store()
    {
        $validatedData = $this->validate();

        DB::beginTransaction();

        try {
            
            $this->operation->update($validatedData);
            
            OperationPartiePrenants::where('operationID', $this->operation->id)->delete();

            foreach ($this->selectedStaff as $staff) {
                OperationPartiePrenants::create([
                    'operationID' => $this->operation->id,
                    'partiePrenantID' => $staff,
                ]);
            }

            DB::commit();
            redirect('/operations');
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
