<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <div class="basis-5/6">
                <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                    {{ __('Roles') }}
                </h2>
            </div>
            <div class="basis-1/6">
                <button type="button" onclick="Livewire.emit('openModal', 'role.new-role')" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Add Role</button>
            </div>
        </div>
    </x-slot>
    <div class="py-10">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:role.roles-list /> 
            </div>
        </div>
    </div>
</x-app-layout>