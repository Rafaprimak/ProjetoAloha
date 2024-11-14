<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Local;

class Pais extends Model
{
    protected $table = 'paises';

    protected $fillable = [
        'nome',
        'codigo'
    ];

    public $timestamps = false;

    /**
     * Define the relationship with Locais.
     */
    public function locais()
    {
        return $this->hasMany(Local::class, 'pais_id');
    }
}