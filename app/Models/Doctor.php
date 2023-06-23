<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table ='Doctor';    
    use HasFactory;
    protected $fillable = ['diagonosis','reason','food_to_eat','level_of_danger'];
}
