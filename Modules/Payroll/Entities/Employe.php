<?php

namespace Modules\Payroll\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;

   public $table = "employes_company";

    /**
     * Summary of guarded
     * @var array
     */
    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Payroll\Database\factories\EmployeFactory::new();
    }
}
