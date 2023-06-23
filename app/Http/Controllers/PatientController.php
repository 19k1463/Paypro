<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log as FacadesLog;

class PatientController extends Controller
{
    public function show_the_patient_reports(Request $request)
    {
        print_r($request->all());
        // var_dump($sent->all());
        // return View('Patient',$sent);  // here would be view function//with some parameters 
    }
}
