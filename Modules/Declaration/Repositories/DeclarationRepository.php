<?php

namespace Modules\Declaration\Repositories;
use App\Models\EmployeExterieur;
use Modules\Declaration\Entities\Declaration;
use Modules\Declaration\Entities\DeclarationTaxe;

class DeclarationRepository {
public object $declaration;

    /**
     * Summary of declaration_with_existing_employe_create
     * @param mixed $request
     * @return void
     */
    public function declaration_with_existing_employe_create ($request)  {

      $declaration =  Declaration::create([
            "entreprise_id" => $request->entreprise_id,
            "employe_id" => $request->employe_id,
            "salaire" => $request->salaire,
            "date_declaration" => $request->date_declaration
        ]);

        return $declaration->id;

    }

    public function declaration_new_employe_create($request){

        $employeId = $this->store_employe_out($request);

      $declaration =  Declaration::create([
            "entreprise_id" => $request->entreprise_id,
            "employe_id" => $employeId,
            "salaire" => $request->salaire,
            "date_declaration" => $request->date_declaration
        ]);

        return $declaration->id;
    }

    public function store_declaration_with_taxes(array $taxes, int $declarationId){

        for ($i=0; $i < count($taxes); $i++) {
            DeclarationTaxe::create([
                "declaration_id" => $declarationId,
                "taxe_id" => $taxes[$i]
            ]);
        }
    }

    private function store_employe_out($request) : int{
        $employe =  EmployeExterieur::create([
            "entreprise_id" => $request->entreprise_id,
            "name" => $request->name,
            "addresse" => $request->addresse,
            "phone" => $request->phone,
            "town" => $request->town,
            "province" => $request->province
        ]);

        return $employe->id;
    }
}
