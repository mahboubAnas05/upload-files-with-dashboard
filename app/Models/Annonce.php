<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    //
    protected $table = "annonces";
    protected $primaryKey = 'id';
    public $fillable = [
        'titre', 'description', 'type', 'ville', 'superficie', 'neuf', 'prix' 
    ];
}
