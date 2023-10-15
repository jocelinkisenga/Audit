<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Payroll\Entities\Employe;

class Fonction extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    protected static function newFactory()
    {
        return \Modules\Settings\Database\factories\FonctionFactory::new();
    }

    public function employe() : HasMany {
        return $this->hasMany(Employe::class);
    }
}
