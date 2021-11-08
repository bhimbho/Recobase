<?php

namespace App\Http\Livewire;

use App\Models\Gender;
use App\Models\Patient as ModelsPatient;
use Livewire\Component;

class Patient extends Component
{
    public $genders;
    public $firstname;
    public $lastname;
    public $othername;
    public $mobile;
    public $description;
    public $address;
    public $gender;
    public $email;
    
    public function render()
    {
        $this->genders = Gender::all();
        return view('livewire.patient');
    }

    public function store()
    {
        $validated = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'othername' => 'max:50',
            'mobile' => 'string|required|max:12',
            'description' => 'max:256',
            'address' => 'required',
            'gender' => 'required|numeric',
            'email' => 'required|email'
        ]);
        $validated['gender_id'] = $validated['gender'];
        unset($validated['gender']);

        ModelsPatient::create(
           $validated
        );

        unset($validated['gender_id']);
        $this->reset(array_keys($validated));
        session()->flash('message', 'Patient Data Stored');
    }
}
