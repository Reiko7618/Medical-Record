<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{
    public function index(Post $medicalrecord)
    {
    return $medicalrecord->get();
    }
}
