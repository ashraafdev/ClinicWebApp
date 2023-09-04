
<form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="store" >
    
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Patient Name</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text" disabled wire:model='name'
        />
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Total Amount</label>
        <input  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="number" wire:model='amount' placeholder="200 DH" step="0.01"
        />
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >Description</label>
        <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            type="text" wire:model='description' placeholder="...."
        />
    </div>

    <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Add Payement Order
    </button>
 
  </form> 