<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Treatment extends Model
{
    use hasFactory;

    public function sicknesses(): BelongsToMany
    {
        return $this->belongsToMany(Sickness::Class);
    }

}
