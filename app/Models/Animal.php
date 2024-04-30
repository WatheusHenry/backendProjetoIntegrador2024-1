<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais'; // Defina o nome da tabela aqui


    protected $fillable = [
        'animal_name',
        'age',
        'gender',
        'description',
        'size',
        'weight',
        'temperament',
        'owner_id',
        'image_url',
        'status_id',
        'species_id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
