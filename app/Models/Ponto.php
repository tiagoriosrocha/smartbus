<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Rota;

class Ponto extends Model
{
    use HasFactory;
    protected $table = "pontos";

    public function rotas(): BelongsToMany
    {
        return $this->belongsToMany(Rota::class, 'ponto_rota', 'ponto_id', 'rota_id');
    }
}
