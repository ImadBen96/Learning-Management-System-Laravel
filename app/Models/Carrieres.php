<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrieres extends Model
{
    use HasFactory;

    protected $table = 'carrieres';

    protected $fillable = ['post','photo','societe','date_de_debut','date_creation','type_de_contrat','lieu_de_travail','caractéristiques_du_poste','Formation','Expérience_professionnelle','status'];
}
