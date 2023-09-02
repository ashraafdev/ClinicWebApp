<form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="store">
    <div class="grid grid-cols-2 gap-1">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Block Opératoire</label>
            <input
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" placeholder="Bloc 1" wire:model='operation.blocOperatoire' 
                required
            />
            @error('operation.blocOperatoire')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Observation d'Opération</label>
            <input
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" placeholder="observation..." wire:model='operation.observation'
                required
            />
            @error('operation.observation')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-2 gap-1">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Date Debut</label>
            <input
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="date" wire:model='operation.dateDebut'
                required
            />
            @error('operation.dateDebut')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Date Fin</label>
            <input
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="date" wire:model='operation.dateFin'
                required
            />
            @error('operation.dateFin')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Partie Prenants</label>
        <select wire:model='selectedStaff' multiple required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            @foreach($staff as $staffmember)
                <option value="{{ $staffmember->id }}">{{ $staffmember->name }} - {{ $staffmember->getRoleNames()[0] }}</option>
            @endforeach
        </select>
        @error('selectedStaff')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
        @enderror
    </div>
    <button
            class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
            type="submit">Edit Operation
    </button>
</form>
