
<form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="store" >
    
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Dep/Ser Name</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text"  placeholder="....."
            wire:model='dep_ser.name'
            />
            @error('dep_ser.name')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
    </div>

    <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Edit Dep/Ser
    </button>
 
  </form> 