<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = ['post_id','photo','first_name','last_name','description','tele','email','cart_national','cv','certificat','Demande','status'];

    public function consours(){
        return $this->hasMany(Concours::class,'id','post_id');
    }
}
