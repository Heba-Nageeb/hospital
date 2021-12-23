<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment\Doc;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ["name","user_id","doctor_id","comment"];

    function doctors(){
        return $this->belongsTo(Doctor::class,"doctor_id","id");
    }

    function users(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    function clinics(){
        return $this->belongsTo(Clinic::class,"clinic_id","id");
    }
}
