<?php

declare(strict_types=1);

namespace Modules\Payroll\Actions;

use Modules\Payroll\Entities\Employe;

class GetAllCompanyEmployeAction
 {
    public function get_all_employes(){
        return Employe::latest()->get();
    }
 }
