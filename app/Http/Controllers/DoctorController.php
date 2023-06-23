<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Exception;

class DoctorController extends Controller
{
    public function show()
    {
        $input = 1;
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


        //now we could use if conditions for the data-validation//
        $dia = $request->input('dia');
        $reason = $request->input('reason');
        $food_to_eat = $request->input('food_to_eat');
        $level_of_danger = $request->input('level_of_danger');    
        //here to check whether the data is being stored on the migration or not//
        //now to verfiy the data is being sent from one controller to another controller//
        // dd($sent);
         try{
            $doctor = Doctor::create([
                'diagonosis' => $dia,
                'reason' => $reason,
                'food_to_eat' => $food_to_eat,
                'level_of_danger' => $level_of_danger
            ]);
         }
         catch(Exception $e)
         {
            var_dump($e->getMessage());
         } 
         
         exit();
         
         
         return redirect()->route('patient');
    }
}
