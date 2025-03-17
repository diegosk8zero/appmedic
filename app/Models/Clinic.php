<?php

namespace App\Models;

use App\Models\Medic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clinic extends Model
{
    use hasFactory;

    protected $fillable = ['name', 'email', 'phone', 'phone_2', 'adress',	'description'];

    public function medics()
    {
        return this->hasMany(Medic::class);
    }
}
