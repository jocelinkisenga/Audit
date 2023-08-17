<?php

namespace Modules\Declaration\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Declaration\Database\factories\DeclarationTaxeFactory;

class DeclarationTaxe extends Model
{
    use HasFactory;

    protected $fillable = ["declaration_id","taxe_id"];
    
    protected static function newFactory()
    {
        return DeclarationTaxeFactory::new();
    }
}
