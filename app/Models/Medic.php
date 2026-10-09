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
    use Searchable;

    
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

    public function toSearchArray()
    {

        $array['id'] = $this->id;
        $array['name'] = $this->name;
        $array['email'] = $this->email;
        $array['phone'] = $this->phone;
        $array['phone_2'] = $this->phone_2;
        $array['certification'] = $this->certification;
        $array['birth'] = $this->birth;
        $array['status'] = $this->status;
        /** 
         * clinic relation to index 
         */
        $array['clinic'] = $this->clinic->map(

        )->toArray();
        


    }

    
}
