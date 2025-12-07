<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'phone',
        'email',
        'motdepasse',
        'motdepasse_change'
    ];
}
