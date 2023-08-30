<div>
    <form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="store">
        <div class="grid grid-cols-2 gap-1">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Patient</label>
                <select
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected disabled value="{{ $consultation->patient->id }}">{{ $consultation->patient->prenom }} {{ $consultation->patient->nom }}</option>
                </select>
            </div>

            <div class="mb-4" >
                <label class="block text-gray-700 text-sm font-bold mb-2">Type Consultation</label>
                <select wire:model='consultation.typeConsultation' wire:change="toggleAdditionalData($event.target.value)"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="{{ $consultation->typeConsultation }}">{{ ($consultation->typeConsultation == 1) ? 'Consultation Général' : 'Opération' }}</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-1">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Objet</label>
                <input
                    wire:model="consultation.objet"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" placeholder="Objet..."  />
                @error('consultation.objet')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Observation</label>
                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" placeholder="Observation..." wire:model='consultation.observation' />
                @error('consultation.observation')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Date</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="date" wire:model='consultation.date' />
            @error('consultation.date')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
        <button
            class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
            type="submit">Edit Consultation
        </button>
    </form>
</div>
