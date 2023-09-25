<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $table = 'actualites';

    protected  $fillable =  ['title_fr','title_ar','photo','contenu_fr','contenu_ar','tags_fr','tags_ar','category_fr','category_ar','lieu_fr','lieu_ar','date_creatnion'];
}
