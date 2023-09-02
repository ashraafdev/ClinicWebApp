<?php

namespace App\Http\Livewire\Consultation;

use App\Models\MesureImages;
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

        $this->mesure->delete();
        Storage::disk('local')->delete('consultations/mesures/' . $filename);
        
        return redirect('/consultations');
    }
}
