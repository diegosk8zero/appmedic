<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Medic extends Model
{
    use hasFactory;
    
    protected $fillable = ['name', 'email', 'phone', 'phone_2', 'certification', 'birth', 'description', 'clinic_id', 'status'];

    public function clinic(): BelongsTo
    {
        return $this->belongsTo(Clinic::Class);
    }

    public function expertises(): HasMany
    {
        return $this->hasMany(Expertise::Class);
    }

    public function sicknesses(): BelongsToMany
    {
        return $this->belongsToMany(Sickness::Class);
    }

    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::Class, 'medic_treatment', 'medic_id', 'treatment_id');
    }

    public function insurances(): BelongsToMany
    {
        return $this->belongsToMany(Insurance::class, 'insurance_medic');
    }

     public function photos(): HasMany
    {
        return $this->hasMany(Photos::Class);
    }

    
}
