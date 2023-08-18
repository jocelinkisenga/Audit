<?php

namespace Modules\Declaration\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Declaration\Database\factories\DeclarationTaxeFactory;
use Modules\Tax\Entities\Tax;

class DeclarationTaxe extends Model
{
    use HasFactory;

    protected $fillable = ["declaration_id","taxe_id"];

    protected static function newFactory()
    {
        return DeclarationTaxeFactory::new();
    }

    public function declaration() : BelongsTo {
        return $this->belongsTo(Declaration::class,"declaration_id");
    }

    public function taxe() : BelongsTo {
        $this-> belongsTo(Tax::class,"taxe_id");
    }
}
