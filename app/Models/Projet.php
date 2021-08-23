<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array',
        'logo' => 'array',
     ];

     protected $fillable = [
        'categorie_id',
        'description',
        'pourquoi_momodev',
        'quelles_solution',
        'mot_fin',
        'lien_site',
        'images',
        'logo',
        'titre',
        'sous_titre',
        
    ];

}
