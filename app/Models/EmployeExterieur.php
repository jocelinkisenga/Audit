<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Entreprise\Entities\Entreprise;

class EmployeExterieur extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function entreprise(){
        $this->belongsTo(Entreprise::class);
    }

    public function declarations(){
        return $this->hasMany(Declaration::class);
    }
}
