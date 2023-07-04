<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Rota;
use App\Models\Passagem;
use App\Models\Profile;
use App\Models\User;
use App\Models\Ponto;

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

    public function pontos(): BelongsToMany
    {
        return $this->belongsToMany(Ponto::class, 'viagem_ponto', 'viagem_id', 'ponto_id')->withPivot('status', 'tempo','distancia');
    }
}
