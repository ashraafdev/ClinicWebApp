
<form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="store" >
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Mesure File</label>
        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 @if ($mesurefile) @error('mesurefile') border-red-500 @else border-green-500 @enderror @else border-gray-300 @endif border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG or JPG</p>
                </div>
                <input id="dropzone-file" wire:model="mesurefile" type="file" class="hidden" />
            </label>
        </div> 
    </div>

    <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Add Mesure
    </button>
 
  </form> 