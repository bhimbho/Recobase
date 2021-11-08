<?php

namespace App\Exports;

use App\Models\PatientRecord;
use Carbon\Carbon;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PatientsExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public $count=0;
    public function __construct()
    {
        $this->count++;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return PatientRecord::query();
    }

    /**
    * @var PatientRecord $patientrecords
    */
    public function map($patientrecords): array
    {
        return [
            $this->count,
            $patientrecords->patient->full_name,
            $patientrecords->patient->result,
            $patientrecords->patient->translation,
            $patientrecords->patient->email,
            $patientrecords->patient->mobile,
            $patientrecords->patient->description,
            $patientrecords->created_at,
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Full Name',
            'Blood Pressure Reading',
            'Translation',
            'Email',
            'Mobile',
            'Description',
            'Date Created',
        ];
    }
}
