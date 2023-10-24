<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = ['name','color','price','description','images','id_categorie'];
    protected $table = 'voitures';

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'id_categorie', 'id');
    }

    public $casts = [
        "images"=> "array",
    ];
}
