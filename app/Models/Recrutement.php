<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;

    protected $table = "recrutements";

    protected $fillable = ['title_fr','title_ar','content_fr','content_ar','photo','date_creation','email','tele','short_description_fr','short_description_ar','lieu_fr','lieu_ar','attachement','status'];

}

