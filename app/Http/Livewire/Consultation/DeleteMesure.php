<?php

namespace App\Http\Livewire\Consultation;

use App\Models\MesureImages;
use Exception;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class DeleteMesure extends ModalComponent
{
    public MesureImages $mesure;

    public function render()
    {
        return view('livewire.consultation.delete-mesure');
    }

    public function deleteIt()
    {
        $filename = $this->mesure->name;
        try {
            $this->mesure->delete();
            Storage::disk('local')->delete('consultations/mesures/' . $filename);
            return redirect('/consultations');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');    
        }
    }
}
