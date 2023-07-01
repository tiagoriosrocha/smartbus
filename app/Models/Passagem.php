<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Viagem;

class Passagem extends Model
{
    use HasFactory;
    protected $table = "passagens";

    public function viagem() : BelongsTo
    {
        return $this->belongsTo(Viagem::class);
    }
}
