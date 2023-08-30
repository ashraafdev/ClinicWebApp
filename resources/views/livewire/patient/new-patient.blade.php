
<form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="store" >
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >First Name</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text"  placeholder="John"
            wire:model='prenom'
            />
            @error('prenom')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Last Name</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text"  placeholder="Doe"
            wire:model='nom'
            />
            @error('nom')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >CIN</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text"  placeholder="xx123456"
            wire:model='cin'
            />
            @error('cin')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Phone</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text"  placeholder="0601020304"
            wire:model='tel'
            />
            @error('tel')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >E-Mail</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="email"  placeholder="email@email.com"
            wire:model='email'
            />
            @error('email')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Address</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text"  placeholder="Bvd Med 5, Casablanca"
            wire:model='adresse'
        />
        @error('adresse')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm  font-bold mb-2">Medecin</label>
        <select wire:model='medecin' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            @foreach ($medecins as $medecin)
                <option selected>----</option>
                <option value="{{ $medecin->id }}">{{ $medecin->name }}</option>
            @endforeach
        </select>
        @error('medecin')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
        @enderror
    </div>
    
    <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Add Patient
    </button>
 
  </form> 