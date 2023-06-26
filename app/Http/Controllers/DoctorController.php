<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Exception;

class DoctorController extends Controller
{   
    // this function would be having multiple requests from the different patients and then doctor would be able to accept or reject//
    //then it goes for the assistant to fill in the dates which does not collide//
    public function Approve_Or_Not(Request $request)  
    {   
        
    }

    public function show()
    {
        return view('Certificate');
    }
    public function create(Request $request)
{
    $validator = $request->validate([
        'dia' => 'required|max:25',
        'reason' => 'required|max:25',
        'food_to_eat' => 'required|max:25',
        'level_of_danger' => 'required|max:25'
    ]);

    $dia = $request->input('dia');
    $reason = $request->input('reason');
    $food_to_eat = $request->input('food_to_eat');
    $level_of_danger = $request->input('level_of_danger');

    try {
        $createdDoctor = Doctor::create([
            'diagonosis' => $dia,
            'reason' => $reason,
            'food_to_eat' => $food_to_eat,
            'level_of_danger' => $level_of_danger
        ]);
        $doctor= [$createdDoctor];
        return view('Report', compact('doctor')); // Pass the doctor object directly
    } 
    catch (Exception $e) {
        var_dump($e->getMessage());
    }
  }
}
   
    //search //
    //can see the appointment// can who is in request//
    //can change the status//
    //breeze//
    //gates//