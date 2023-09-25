<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $fillable = ['title','coure_id'];

    public function videos(){
        return $this->hasMany(Video::class,'module_id');
    }
    public function mats(){
        return $this->hasMany(Material::class,'module_id');
    }
}
