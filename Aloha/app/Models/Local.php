<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pais;

class Local extends Model
{
    use HasFactory;

    protected $table = 'locais';

    protected $fillable = [
        'nome',
        'descricao', // Adicione outros campos conforme necessário
        'pais_id',
    ];

    /**
     * Define the inverse relationship with Pais.
     */
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }
}