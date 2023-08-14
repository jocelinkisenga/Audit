<?php

namespace Modules\Declaration\Http\Controllers;

use App\Models\EmployeExterieur;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Declaration\Entities\Declaration;
use Modules\Declaration\Http\Requests\DeclarationRequest;

class DeclarationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $declarations = Declaration::latest()->get();
        return view('declaration::index', compact("declarations"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(int $id)
    {
        $employes = EmployeExterieur::where("entreprise_id", "=", $id)->get();
        $entrepriseId = $id;
        return view('declaration::create', compact("employes","entrepriseId"));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
       $employe =  EmployeExterieur::create([
            "entreprise_id" => $request->entreprise_id,
            "name" => $request->name,
            "addresse" => $request->addresse,
            "phone" => $request->phone,
            "town" => $request->town,
            "province" => $request->province
       ]);

       Declaration::create([
            "entreprise_id" => $request->entreprise_id,
            "employe_id" => $employe->id,
            "salaire" => $request->salaire,
            "date_declaration" => $request->date_declaration
       ]);

       return redirect()->route("declarations");

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('declaration::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('declaration::edit');
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
