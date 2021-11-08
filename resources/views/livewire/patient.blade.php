
<div id="main" class="flex space-x-5 mb-20">
    <div class="w-full md:w-2/3 p-4">
        <div class="bg-green-500 text-white">
            @if (Session::has('message'))
               {{ Session::get('message') }}
            @endif
        </div>
        <form action="" wire:submit.prevent='store'>
            <div class="flex flex-col mb-5">
                <label for="">Lastname</label>
                <input type="text" class="rounded text-gray-500" wire:model='lastname'>
                @error('lastname')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Firstname</label>
                <input type="text" wire:model='firstname'>
                @error('firstname')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Othername</label>
                <input type="text" wire:model='othername'>
                @error('othername')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Gender</label>
               <select name="" id="" wire:model='gender'>
                   <option value="">-- Select Gender --</option>
                   @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->title }}</option>
                   @endforeach
               </select>
               @error('gender')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Mobile</label>
                <input type="text" wire:model='mobile'>
                @error('mobile')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Email</label>
                <input type="email" wire:model='email'>
                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Address</label>
             <textarea name="" id="" cols="30" rows="3" wire:model=address></textarea>
             @error('address')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
            </div>
            <div class="flex flex-col mb-5">
                <label for="">Description</label>
                <textarea name="" id="" cols="3" rows="2" wire:model='description'></textarea>
                @error('description')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-green-500 my-2 p-2 text-white">Create Patient Record</button>
        </form>
    </div>
    <div class="w-full md:1/3 p-4">
        <p class="text-red-500">** Click row to add patient blood data **</p>
        <livewire:patient-table>
    </div>
</div>
