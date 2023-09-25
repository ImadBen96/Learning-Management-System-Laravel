<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = "coures";

    protected $fillable = ['cours_name','description','photo','status','category_id' , 'animateur' , 'animateur_descriptor' ,'animateur_pic'];

    public function category(){
        return $this->hasMany(Section::class,'coure_id');
    }
}
