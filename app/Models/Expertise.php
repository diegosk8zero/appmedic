<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expertise extends Model
{
    use hasFactory;

    public function medic(): BelongsTo
    {
        return $this->belongsTo(Medic::Class);
    }
}
