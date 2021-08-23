<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;

    protected $casts = [
        
        'message' => 'string',
    ];

    protected $fillable = [
       
       'nom',
       'contact',
       'email',
       'objet',
       'message',
       
   ];

}
