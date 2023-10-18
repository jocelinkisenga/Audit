<?php

declare(strict_types= 1);

namespace Modules\Payroll\Actions\Payment;

use Modules\Payroll\Entities\Paiement;

final class ListPaymentsAction {
    public  function execute() {
        return Paiement::latest()->with("employe")->get();
    }
}
