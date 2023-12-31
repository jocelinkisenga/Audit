<?php

namespace Modules\Tax\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Modules\Declaration\Entities\Declaration;
use Modules\Declaration\Entities\DeclarationTaxe;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = ["name","percent"];

    protected static function newFactory()
    {
        return \Modules\Tax\Database\factories\TaxFactory::new();
    }

    public function taxes_declaration() : HasMany {
        return $this->hasMany(DeclarationTaxe::class);
    }

    public function declaration () : BelongsTo {
        return $this->belongsTo(Declaration::class);
    }



}
