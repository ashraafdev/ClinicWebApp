<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use App\Models\MesureImages;
use Exception;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class MesureUpload extends ModalComponent
{
    use WithFileUploads;

    public $mesurefile;
    public Consultation $consultation;

    protected $rules = [
        'mesurefile' => 'required|image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.consultation.mesure-upload');
    }

    public function store()
    {
        $this->validate();
        
        try {
            $imageName = strtotime(date('Y-m-d h:i:s')) . '.' . $this->mesurefile->getClientOriginalExtension();
            $this->mesurefile->storeAs('consultations/mesures', $imageName, 'local');

            MesureImages::create([
                'imageName' => $imageName,
                'consultationsID' => $this->consultation->id,
            ]);

            return redirect('/consultations');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
