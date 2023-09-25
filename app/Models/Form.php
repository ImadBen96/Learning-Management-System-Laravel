<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table='forms';

    protected  $fillable = ['stape'];

    public function fields(){
        return $this->hasMany(Field::class , 'form_id');
    }
}
