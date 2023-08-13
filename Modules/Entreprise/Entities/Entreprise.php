<?php

namespace Modules\Entreprise\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = ["name","phone","email","matricule","addresse","town","province","zip"];

    protected static function newFactory()
    {
        return \Modules\Entreprise\Database\factories\EntrepriseFactory::new();
    }
}
