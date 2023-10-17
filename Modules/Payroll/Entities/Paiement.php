<?php

namespace Modules\Payroll\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        "employe_company_id",
        "amount",
        "date_paiement"
    ];

    protected static function newFactory()
    {
        return \Modules\Payroll\Database\factories\PaiementFactory::new();
    }
}
