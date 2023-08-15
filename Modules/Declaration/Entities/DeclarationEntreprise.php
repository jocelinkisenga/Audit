<?php

namespace Modules\Declaration\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeclarationEntreprise extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Declaration\Database\factories\DeclarationEntrepriseFactory::new();
    }
}
