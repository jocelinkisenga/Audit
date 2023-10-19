<?php

namespace Modules\Declaration\Http\Controllers;

use App\Models\EmployeExterieur;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Declaration\Entities\Declaration;
use Modules\Declaration\Entities\DeclarationTaxe;
use Modules\Declaration\Http\Requests\DeclarationRequest;
use Modules\Declaration\Repositories\DeclarationRepository;
use Modules\Tax\Entities\Tax;

class DeclarationController extends Controller
{
    public int $declaration;

    public function __construct(public DeclarationRepository $declarationRepository)
    {
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(int $id)
    {
        $declarations = Declaration::latest()->where("entreprise_id", $id)->get();
        $taxes = Tax::all();

        return view('declaration::index', compact("declarations", "taxes"));
    }



    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(int $id)
    {
        $employes = EmployeExterieur::where("entreprise_id", "=", $id)->get();
        $entrepriseId = $id;
        $taxes = Tax::all();
        return view('declaration::create', compact("employes", "entrepriseId", "taxes"));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {


        $user = EmployeExterieur::find($request->employe_id);

        if ($user != null && !empty($request->tax_id)) {
            $declarationId =  $this->declarationRepository->declaration_with_existing_employe_create($request);

            $this->declarationRepository->store_declaration_with_taxes($request->tax_id, $declarationId);
        } else {
            $declarationId = $this->declarationRepository->declaration_new_employe_create($request);

            $this->declarationRepository->store_declaration_with_taxes($request->tax_id, $declarationId);
        }


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
