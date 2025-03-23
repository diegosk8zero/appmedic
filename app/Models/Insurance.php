<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    /** @use HasFactory<\Database\Factories\InsuranceFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function medics()
    {
        return $this->belongsToMany(Medic::class, 'insurance_medic');
    }

    public function clinics()
    {
        return $this->belongsToMany(Clinic::class, 'clinic_insurance');
    }
    
}
