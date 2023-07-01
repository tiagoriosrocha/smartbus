<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Ponto;
use App\Models\User;
use App\Models\Viagem;

class Rota extends Model
{
    use HasFactory;

    protected $table = "rotas";

    public function pontos(): BelongsToMany
    {
        return $this->belongsToMany(Ponto::class, 'ponto_rota', 'rota_id', 'ponto_id');
    }

    public function seguidores(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_seguindo_rota', 'rota_id', 'user_id');
    }

    public function viagens(): HasMany
    {
        return $this->hasMany(Viagem::class);
    }
}
