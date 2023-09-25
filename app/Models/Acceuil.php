<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceuil extends Model
{
    use HasFactory;

    protected $table = 'acceuils';

    protected $fillable = ['category','image_profile','user_id','first_name','last_name','nationality','genre','date_naissance','lieu_naissance','territoire','autre_province','address','cin','tel1','email1','tel2','connu_notre_service','connu_notre_service_autre','membres_de_famille','personnes_ayant_une_activite_salariale','ressources','situation_familiale','logement','handicap_quelconque','type_de_handicap','cause_du_handicap','mobilite','maladie_chronique','maladie_chronique_oui','rendement_travail','rendement_travail_oui','niveau_scolaire','niveau_scolaire_avec_diplome','oriente_vers','oriente_vers_autre','objectif_professionnel','souhait_formation','souhait_formation_oui','disponible','status','status_chat'];


    public function setServiceAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    public function getServiceAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }

    public function user(){
        return $this->hasMany(User::class,'id','user_id');
    }


}
