<?php

namespace Modules\Payroll\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Payroll\Actions\Payment\ListPaymentsAction;
use Modules\Payroll\Actions\Payment\StorePaymentAction;
use Modules\Payroll\Entities\Employe;
use Modules\Payroll\Http\Requests\PaiementRequest;

class PaiementController extends Controller
{
    /**
     * Summary of __construct
     * @param \Modules\Payroll\Actions\Payment\StorePaymentAction $storePaymentAction
     * @param \Modules\Payroll\Actions\Payment\ListPaymentsAction $listPaymentsAction
     */
    public  function __construct(
        public StorePaymentAction $storePaymentAction,
        public ListPaymentsAction $listPaymentsAction,
    ) {
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('payroll::index');
    }



    public function list()
    {
        $listPayments = $this->listPaymentsAction->execute();
      
        return view('payroll::listPayments',compact("listPayments"));
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(int $employe)
    {
        $employe = Employe::findOrFail($employe);

        return view('payroll::addPay', compact("employe"));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $this->storePaymentAction->store($request);

        return redirect()->route("payroll.employ.index")->with("message", "paiment effectué avec succès");
    }

    /**
     * Show the specifi ed resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('payroll::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('payroll::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
