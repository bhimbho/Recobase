<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 w-3/4 m-auto flex space-x-5">
        <div class="flex-1 mx-auto sm:px-6 p-4 bg-blue-500 h-36 text-white">
            <div class="flex justify-between items-center h-full">
                <h5 class="text-lg">Total Patients</h5>
                <h2 class="text-5xl font-bold">{{ $patients }}</h2>
            </div>
        </div>
        <div class="flex-1 mx-auto sm:px-6 p-4 bg-blue-500 h-36 text-white">
            <div class="flex justify-between items-center h-full">
                <h5 class="text-lg">Patient Records</h5>
                <h2 class="text-5xl font-bold">{{ $patientRecords }}</h2>
            </div>
        </div>
        <div class="flex-1 mx-auto sm:px-6 p-4 bg-blue-500 h-36 text-white">
            <div class="flex justify-between items-center h-full">
                <h5 class="text-lg">Total Admin</h5>
                <h2 class="text-5xl font-bold">{{ $admins }}</h2>
            </div>
        </div>
    </div>
</x-app-layout>
