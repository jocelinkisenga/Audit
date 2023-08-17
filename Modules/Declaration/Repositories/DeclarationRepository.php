<?php

namespace Modules\Declaration\Repositories;
use App\Models\EmployeExterieur;
use Modules\Declaration\Entities\Declaration;

class DeclarationRepository {
    /**
     * Summary of declaration_with_existing_employe_create
     * @param mixed $request
     * @return void
     */
    public function declaration_with_existing_employe_create($request){
        Declaration::create([
            "entreprise_id" => $request->entreprise_id,
            "employe_id" => $request->employe_id,
            "salaire" => $request->salaire,
            "date_declaration" => $request->date_declaration
        ]);
    }

    public function declaration_new_employe_create($request){
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
    }
}
