<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable=[
        "name","comment","phone","clinic_id","shift","title","ex_fees"
    ];


    function clinics() {
        return $this->belongsTo(Clinic::class,"clinic_id","id") ;
    }
}
