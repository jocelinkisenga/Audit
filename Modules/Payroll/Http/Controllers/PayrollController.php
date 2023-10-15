<?php

namespace Modules\Payroll\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Payroll\Actions\GetAllCompanyEmployeAction;
use Modules\Payroll\Actions\PickedRoleAction;
use Modules\Payroll\Actions\StoreEmployePayrollAction;
use Modules\Payroll\Http\Requests\EmployeRequest;

class PayrollController extends Controller
{

    /**
     * Summary of __construct
     * @param \Modules\Payroll\Actions\PickedRoleAction $pickedRoleAction
     */
    public function __construct(
        public PickedRoleAction $pickedRoleAction,
        public StoreEmployePayrollAction $storeEmployePayrollAction,
        public GetAllCompanyEmployeAction $getAllCompanyEmployeAction,
    ) {
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $employes = $this->getAllCompanyEmployeAction->get_all_employes();
        return view('payroll::index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $fonctions = $this->pickedRoleAction->picked_roles();
        return view('payroll::create', compact("fonctions"));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(EmployeRequest $request)
    {
        $this->pickedRoleAction->update_picked_role($request->role_id);
        $this->storeEmployePayrollAction->store_employe($request);

        return redirect()->route("payroll.employ.index");
    }

    /**
     * Show the specified resource.
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
