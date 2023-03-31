<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];     //un champ proteger pour eviter les erreurs de mass assignment

    public function user(){

        return $this->belongsTo(User::class);     // un post appartient a un utilisateur

    }

    public function category(){

        return $this->belongsTo(Category::class);    //un post appartient a une categorie

    }

    public function getTitleAttribute($attribute){

        return Str::title($attribute);

    }

}
