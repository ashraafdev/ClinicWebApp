<?php

namespace App\Http\Livewire\Operations;

use App\Models\MesureImages;
use Exception;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class DeleteMesure extends ModalComponent
{
    public MesureImages $mesure;

    public function render()
    {
        return view('livewire.operations.delete-mesure');
    }

    public function deleteIt()
    {
        try {
            $filename = $this->mesure->name;
            
            $this->mesure->delete();
            Storage::disk('local')->delete('operations/mesures/' . $filename);

            return redirect('/operations');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
        

    }
}
