<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Rota;
use App\Models\Passagem;
use App\Models\Profile;
use App\Models\User;

class Viagem extends Model
{
    use HasFactory;
    protected $table = "viagens";

    public function motorista() : BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    
    public function rota() : BelongsTo
    {
        return $this->belongsTo(Rota::class);
    }

    public function passagens(): HasMany
    {
        return $this->hasMany(Passagem::class);
    }
}
