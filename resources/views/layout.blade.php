<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patient Data') }}
        </h2>
    </x-slot>

    <div class="bg-gray-50 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (Request::is('patient'))
                    <livewire:patient>
                @else
                    <livewire:patient-records>
                @endif
               
            </div>
        </div>
    </div>
</x-app-layout>