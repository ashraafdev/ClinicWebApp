<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <div class="basis-9/12">
                <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                    {{ __('Consultations') }}
                </h2>
            </div>
            <div class="basis-3/12">
                @unlessrole('Infirmier|Medecin')
                    <button type="button" onclick="Livewire.emit('openModal', 'consultation.new-consultation')" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Add Consultation</button>
                @endunlessrole
                <button type="button" onclick="Livewire.emit('openModal', 'consultation.search-component')" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Search</button>
            </div>
        </div>
    </x-slot>
    <div class="py-10">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:consultation.consultations-list /> 
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            
            function showImage(data) {
                var image = new Image();
                image.src = "data:image/jpg;base64," + data;
                
                var w = window.open("");
                w.document.write(image.outerHTML);
            }
        </script>
    @endpush
</x-app-layout>