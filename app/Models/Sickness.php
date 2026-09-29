<?php

namespace App\Models;

use App\Models\Sickness;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;



class Sickness extends Model
{
    use hasFactory;

    protected $fillable = ['name',	'status', 'description'];

    public function treatments(): hasMany
    {
        return $this->hasMany(Treatment::Class);
    }

    public function medics(): BelongsToMany
    {
        return $this->belongsToMany();
    }


}
