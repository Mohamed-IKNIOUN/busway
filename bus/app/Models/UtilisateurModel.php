<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'motDePasse',
        'carteReduction_id'
    ];

    protected $useTimestamps = false;
}