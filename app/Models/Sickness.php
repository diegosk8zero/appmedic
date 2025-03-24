<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;



class Sickness extends Model
{
    use hasFactory;

    protected $fillable = ['name',	'status', 'description'];

    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::Class);
    }


}
