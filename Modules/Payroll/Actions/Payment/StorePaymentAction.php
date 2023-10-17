<?php

declare(strict_types=1);

namespace Modules\Payroll\Actions\Payment;

use Modules\Payroll\Entities\Paiement;

final class StorePaymentAction
{
    public function store($request)
    {
        Paiement::create([
            "employe_company_id" => $request->employe_company_id,
            "amount" => $request->amount,
            "date_paiement" => $request->date_paiement
        ]);
    }
}
