<?php

declare(strict_types=1);

namespace Modules\Payroll\Actions;

use Modules\Settings\Entities\Fonction;

  class  PickedRoleAction {
    /**
     * this function return object of roles not picked
     * @return mixed
     */
    public function picked_roles(){
        return Fonction::wherePicked(false)->get();
    }

    public function update_picked_role($id){
        $fonction = Fonction::find($id);
        $fonction->update([
            "picked" => 1
        ]);
        
    }

    }