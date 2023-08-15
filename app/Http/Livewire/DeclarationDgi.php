<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Modules\Declaration\Entities\DeclarationEntrepriseDgi;

class DeclarationDgi extends Component
{

    public  $nbr_nat_non_impos, $nbr_nat_impos, $nbr_expa_non_impos, $nbr_expa_impos, $nbr_assoc_actif, $nbr_exploit_indiv,
                 $nbr_person_occas, $nbr_total;

                 public  $brute_nat_non_impos, $brute_nat_impos, $brute_expa_non_impos, $brute_expa_impos, $brute_assoc_actif, $brute_exploit_indiv,
                 $brute_person_occas, $brute_total;

                 public  $renum_impo_nat_non_impos, $renum_impo_nat_impos, $renum_impo_expa_non_impos, $renum_impo_expa_impos, $renum_impo_assoc_actif, $renum_impo_exploit_indiv,
                 $renum_impo_person_occas, $renum_impo_total;


    public function render()
    {

        $this->brute_total = $this->brute_nat_non_impos + $this->brute_nat_impos + $this->brute_expa_non_impos + $this->brute_expa_impos + $this->brute_assoc_actif + $this->brute_exploit_indiv +
                $this->brute_person_occas;

        $this->nbr_total = $this->nbr_nat_non_impos + $this->nbr_nat_impos + $this->nbr_expa_non_impos + $this->nbr_expa_impos + $this->nbr_assoc_actif + $this->nbr_exploit_indiv + $this->nbr_person_occas;

        $this->renum_impo_total =  $this->renum_impo_nat_non_impos + $this->renum_impo_nat_impos + $this->renum_impo_expa_non_impos + $this->renum_impo_expa_impos + $this->renum_impo_assoc_actif + $this->renum_impo_exploit_indiv +
                 $this->renum_impo_person_occas;

        return view('livewire.declaration-dgi');
    }

    public function mount(){

    }

    public function store() {

        DeclarationEntrepriseDgi::create(
            [

            ]
        );

    }
}
