<?php

declare(strict_types=1);

namespace Modules\Payroll\Actions;

use Auth;
use Modules\Payroll\Entities\Employe;

  class  StoreEmployePayrollAction {

        public function store_employe($request) {
            Employe::create([
                "user_id" => Auth::user()->id,
                "nom" => $request->nom,
                "postnom" => $request->postnom,
                "prenom" => $request->prenom,
                "matricule" => $request->matricule,
                "date_naissance" => $request->date_naissance,
                "addresse" => $request->addresse,
                "contact_phone" => $request->contact_phone,
                "etat_civile" => $request->etat_civile,
                'role_id' => $request->role_id,
                "niveau_etude" => $request->niveau_etude,
                "nombre_enfant" => $request->nombre_enfant,
                "nom_complet_femme" => $request->nom_complet_femme,
                "contact_personne_fullname" => $request->contact_personne_fullname,
                "contact_person_number" => $request->contact_person_number,
            ]);
        }
    }
