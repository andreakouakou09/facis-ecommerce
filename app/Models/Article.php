<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nom', 'prix', 'categorie_id', 'image', 'description', 'delete_at', 'delete_by'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($article) {
            if (Auth::check()) {
                $article->deleted_by = Auth::id();
                $article->save();
            }
        });
    }

    // Relation pour récupérer l'utilisateur qui a supprimé la catégorie
    public function deletedByUser()
    {
        return $this->belongsTo(Admin::class, 'deleted_by');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

}
