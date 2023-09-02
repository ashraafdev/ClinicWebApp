<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-5 space-y-5">
        <livewire:dashboard.dashboard-data />
    </div>

    
</x-app-layout>
