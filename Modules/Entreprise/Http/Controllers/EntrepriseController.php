<?php

namespace Modules\Entreprise\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Entreprise\Entities\Entreprise;
use Modules\Entreprise\Http\Requests\EntrepriseRequest;

class EntrepriseController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $entreprises = Entreprise::latest()->get();

        return view('entreprise::index',compact("entreprises"));
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
    public function store(EntrepriseRequest $request)
    {
        Entreprise::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "matricule " => $request->matricule,
            "addresse" => $request->addresse,
            "town" => $request->town,
            "province" =>  $request->province,
            "zip" => $request->zip
        ]);

        return redirect()->route('entreprises');
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
