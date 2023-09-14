<?php

namespace Modules\Declaration\Entities;

use App\Models\EmployeExterieur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Modules\Entreprise\Entities\Entreprise;
use Modules\Tax\Entities\Tax;

class Declaration extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Declaration\Database\factories\DeclarationFactory::new();
    }

    public function entreprise( ) : BelongsTo {
        return $this->belongsTo(Entreprise::class, "entreprise_id");
    }

    public function employe_externe() : BelongsTo {
        return $this->belongsTo(EmployeExterieur::class, "employe_id");
    }

    public function declaration_taxes() : HasMany {
        return $this->hasMany(DeclarationTaxe::class);
    }


    public function taxes() : HasManyThrough {
        return $this->hasManyThrough(Tax::class,DeclarationTaxe::class, );
    }
}
