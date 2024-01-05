<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(Post $patient)
    {
    return view('patients/index')->with(['patients' => $patient->get()]);
    }
}
