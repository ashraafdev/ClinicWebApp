
<form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="search" >
    
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Patient</label>
        <select wire:model='patient' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option selected>----</option>
            @foreach ($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->prenom }} {{ $patient->nom }}</option>
            @endforeach
        </select>
        @error('patient')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Medecin</label>
        <select wire:model='medecin' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option selected>----</option>
            @foreach ($medecins as $medecin)
                <option value="{{ $medecin->id }}">{{ $medecin->name }}</option>
            @endforeach
        </select>
        @error('medecin')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Medecin</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="date" wire:model='date' />
        @error('date')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
        @enderror
    </div>

    <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Search
    </button>
 
  </form> 