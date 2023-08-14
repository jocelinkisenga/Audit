<?php

namespace Modules\Entreprise\Entities;

use App\Models\EmployeExterieur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Declaration\Entities\Declaration;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = ["name","phone","email","matricule","addresse","town","province","zip"];

    protected static function newFactory()
    {
        return \Modules\Entreprise\Database\factories\EntrepriseFactory::new();
    }

    public function declarations(){
        return $this->hasMany(Declaration::class);
    }

    public function employes (){
        return $this->hasMany(EmployeExterieur::class);
    }
}
