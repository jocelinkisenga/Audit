<?php

namespace Modules\Payroll\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Settings\Entities\Fonction;

class Employe extends Model
{
    use HasFactory;

   public $table = "employes_company";

    /**
     * Summary of guarded
     * @var array
     */
    protected $fillable = [
        "user_id",
        "nom" ,
        "postnom" ,
        "prenom" ,
        "matricule" ,
        "date_naissance" ,
        "addresse" ,
        "contact_phone" ,
        "etat_civile" ,
        'fonction_id' ,
        "niveau_etude" ,
        "nombre_enfant" ,
        "nom_complet_femme" ,
        "contact_personne_fullname" ,
        "contact_person_number" ,
    ];

    protected static function newFactory()
    {
        return \Modules\Payroll\Database\factories\EmployeFactory::new();
    }

    public function fonction() : BelongsTo {
        return $this->belongsTo(Fonction::class,"fonction_id");
    }

    public function paiment() : HasMany {
        return $this->hasMany(Paiement::class);
    }
}
