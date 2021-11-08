
<div id="main" class="flex space-x-5 mb-20">
    <div class="w-full md:w-2/3 p-4">
        <div class="bg-green-500 text-white">
            @if (Session::has('message'))
               {{ Session::get('message') }}
            @endif
        </div>
        <form action="" wire:submit.prevent='saveRecord'>
            <div class="flex flex-col mb-5">
                <label for="">User Details</label>
                <input type="text" class="rounded text-gray-500" value="{{ $patientDetails->full_name }}" disabled readonly>
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Blood Pressure (mmHg)</label>
                <input type="text" class="rounded text-gray-500" wire:model='pressure'>
                @error('pressure')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        
                <div class="flex flex-col mb-5">
                    <label for="">Translation</label>
                    <textarea name="" id="" cols="3" rows="2" wire:model='translation'></textarea>
                    @error('translation')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
               
            <button type="submit" class="bg-green-500 my-2 p-2 text-white">Save Record</button>
        </form>
    </div>
    <div class="w-full md:1/3 p-4">
        <p class="text-red-500">** Click row to add patient blood data **</p>
        <livewire:patient-records-table>
    </div>
</div>
