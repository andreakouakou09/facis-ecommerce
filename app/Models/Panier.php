<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    // protected $table = 'panier';

    protected $fillable = [
        'user_id',
        'article_id',
        'quantite',
        'prix',
    ];

    // public function articles()
    // {
    //     return $this->belongsTo(Article::class);
    // }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function article()
    {
        return $this->hasOne('App\Models\Article', 'id', 'article_id');
    }
}
