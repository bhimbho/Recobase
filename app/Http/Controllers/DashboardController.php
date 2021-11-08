<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\PatientRecord;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $patients = Patient::count();
        $patientRecords = PatientRecord::count();
        $admins = User::count();
        return view('dashboard')->with(compact('patients', 'patientRecords', 'admins'));
    }
}
