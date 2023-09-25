<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepreneurs extends Model
{
    use HasFactory;

    protected $table = 'entrepreneurs';

    protected  $fillable = ['image_profile','title_fr','title_ar','niveau_scolaire_fr','niveau_scolaire_ar','formation_professionnelle_fr','formation_professionnelle_ar','age','project_name_fr','project_name_ar','logo','short_description_fr','short_description_ar','statut_juridique_fr','statut_juridique_ar','category_fr','category_ar','secteur_activite_fr','secteur_activite_ar','domiciliation_fr','domiciliation_ar','canaux_communication_fr','canaux_communication_ar','capitale_initiale','apport_INDH','apport_entrepreneur','opportunite_financement','contenu_fr','contenu_ar','photo_1','photo_1','photo_2','photo_3','photo_4','photo_5','photo_6','service_name'];



}
