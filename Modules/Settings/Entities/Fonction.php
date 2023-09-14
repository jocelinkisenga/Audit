<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fonction extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    protected static function newFactory()
    {
        return \Modules\Settings\Database\factories\FonctionFactory::new();
    }
}
