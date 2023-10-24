<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voiture;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'categories';

    public function voiture(){
        return $this->hasMany(Voiture::class);
    }
}
