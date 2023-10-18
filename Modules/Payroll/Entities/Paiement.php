<?php

namespace Modules\Payroll\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Payroll\Database\factories\PaiementFactory;
class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        "employe_company_id",
        "amount",
        "date_paiement"
    ];

    public function employe(){
        return $this->belongsTo(\Modules\Payroll\Entities\Employe::class,"employe_company_id");
    }
    protected static function newFactory()
    {
        return PaiementFactory::new();
    }
}
