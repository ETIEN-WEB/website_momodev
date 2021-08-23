<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public $fillable=[
        'titre',
        'descrpition',
        'prix',
    ];

    public function likes(){
        return $this->belongsToMany('App\Models\User');
    }

    /*
     isLiked : Vérifie si  un utilisateur aime déja cet job
     if (auth()->check()) : vérifie si 
     l'utilisateur est connecté
     contains('id', $this->id) : l'id du job 
    */ 

    public function isLiked(){
        if (auth()->check()) {
            return auth()->user()->likes->contains('id', $this->id); 
        }
    }
}
