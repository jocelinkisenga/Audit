<?php

namespace Modules\Entreprise\Http\Controllers;

use App\Models\EmployeExterieur;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Declaration\Entities\Declaration;
use Modules\Tax\Entities\Tax;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(int $id)
    {
        $employes = EmployeExterieur::latest()->where("entreprise_id", $id)->get();

        return view('entreprise::employe', compact("employes"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('entreprise::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    public function employe_declarations(int $id) {
         $declarations = Declaration::latest()->where("employe_id",$id)->with("employe_externe")->get();

        $taxes = Tax::join('declaration_taxes', 'taxes.id', '=', 'declaration_taxes.taxe_id')
                    ->join("declarations","declarations.employe_id","=", "declaration_taxes.declaration_id")
                    ->where("declarations.employe_id",$id)->get(["taxes.*"]);

        $employe = EmployeExterieur::findOrFail($id);

        return view('declaration::employeDeclaration',compact('declarations',"taxes","employe"));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('entreprise::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('entreprise::edit');
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
