<?php

namespace App\Http\Livewire;

use App\Exports\PatientsExport;
use App\Models\Patient;
use App\Models\PatientRecord;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class PatientRecords extends Component
{
    public $pressure, $translation, $patient_id, $patientDetails;


    protected $listeners = ['exportData' => 'DownloadExport'];

    public function render()
    {
        return view('livewire.patient-records');
    }

    public function mount(Patient $patient)
    {
        $this->patientDetails =$patient;
    }

    public function saveRecord()
    {
        $validated = $this->validate([
            'pressure' => 'required|numeric',
            'translation' => 'max:256',
        ], 
        [
            'pressure.required' => 'Fill in Blood Pressure',
            'pressure.numeric' => 'Blood Pressure should be a number'
        ]);
        $validated['patient_id'] = $this->patientDetails->id;
        PatientRecord::create(
           $validated
        );

        $this->reset(array_keys($validated));
        session()->flash('message', 'Patient Record Stored');
    }

    public function DownloadExport()
    {
        return Excel::download(new PatientsExport, Carbon::now().'patientsRecords.xlsx');
    }
}
