<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event; // Ensure this class exists in the specified namespace or create it if it doesn't exist


class Local extends Model
{

    // Define the table associated with the model
    protected $table = 'locais';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'nome',
        'endereco',
        'cidade',
        'estado',
        'cep',
    ];

    // Define any relationships if necessary
    // For example, if a Local has many Events
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}