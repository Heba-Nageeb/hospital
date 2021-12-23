<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'comment'
    ];
    function doctors(){
        return $this->hasMany(Doctor::class,"clinic_id","id");
    }

    function reservations(){
        return $this->hasMany(Reservation::class,"clinic_id","id");
    }
}
