<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = ['actualite_id','name_fr','name_ar','subject_fr','subject_ar','comment_fr','comment_ar','type'];

}
