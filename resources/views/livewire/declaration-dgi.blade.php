<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20"></h4>
        <p><code class="highlighter-rouge"></code> Veuillez remplir ce tableau</p>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">catégorie salariale</th>
            <th scope="col">Nombre</th>
            <th scope="col">renumerations brutes</th>
            <th scope="col">renumérations imposables</th>
            <th scope="col">Montant I.P.R</th>
            <th scope="col">montant I.E.R</th>
            <th scope="col">impot total</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>Nationaux non imposables</td>
            <td><input type="text" wire:model="nbr_nat_non_impos" class="form-control sm"></td>
            <td><input type="text" wire:model="brute_nat_non_impos" class="form-control sm"></td>
            <td><input type="text" wire:model="renum_impo_nat_non_impos"  class="form-control sm"></td>
            <td class="bg-yellow"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>

            <td>Nationaux  imposables</td>
            <td><input type="text" wire:model='nbr_nat_impos' class="form-control sm"></td>
            <td><input type="text" wire:model="brute_nat_impos" class="form-control sm"></td>
            <td><input type="text" wire:model="renum_impo_nat_impos" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
            <td></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
          </tr>
          <tr>

            <td>Expatriés non imposables</td>
            <td><input type="text"  wire:model='nbr_expa_non_impos' class="form-control sm"></td>
            <td><input type="text" wire:model="brute_expa_non_impos" class="form-control sm"></td>
            <td><input type="text" wire:model="renum_impo_expa_non_impos" class="form-control sm"></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>

            <td>Expatriés imposables</td>
            <td><input type="text" wire:model='nbr_expa_impos' class="form-control sm"></td>
            <td><input type="text" wire:model="brute_expa_impos" class="form-control sm"></td>
            <td><input type="text" wire:model="renum_impo_expa_impos" class="form-control sm"></td>
            <td><input type="text" wire:model="{{ $Expa_impo_IPR }}" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
          </tr>
          <tr>

            <td>Associés actifs</td>
            <td><input type="text" wire:model="nbr_assoc_actif" wire:model='nbr_assoc_actif' class="form-control sm"></td>
            <td><input type="text" wire:model="brute_assoc_actif" class="form-control sm"></td>
            <td><input type="text" wire:model="renum_impo_assoc_actif" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
            <td></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
          </tr>
          <tr>

            <td>Exploitant individuel</td>
            <td><input type="text" wire:model='nbr_exploit_indiv' class="form-control sm"></td>
            <td><input type="text" wire:model="brute_exploit_indiv" class="form-control sm"></td>
            <td><input type="text" wire:model="renum_impo_exploit_indiv" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
            <td></td>
            <td><input type="text" class="form-control sm"></td>
          </tr>
          <tr>

            <td>personnel occasionnel</td>
            <td><input type="text" wire:model='nbr_person_occas' class="form-control sm"></td>
            <td><input type="text" wire:model="brute_person_occas" class="form-control sm"></td>
            <td><input type="text" wire:model="renum_impo_person_occas" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
            <td><input type="text" wire:model="" class="form-control sm"></td>
          </tr>
          <tr>

            <td>Total par colonne</td>
            <td>{{$nbr_total}}</td>
            <td>{{$brute_total}}</td>
            <td>{{$renum_impo_total}}</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="mb-3 col-md-6">
        <label class="form-label fw-500">Période de déclaration</label>
        <div class="timepicker-input input-icon mb-3">
          <div class="input-group">
            <div class="input-group-text bgc-white bd bdwR-0">
              <i class="ti-calendar"></i>
            </div>
            <input type="text" name="date_declaration" class="form-control bdc-grey-200 start-date" placeholder="" data-provide="datepicker">
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 justify-content-center">
        <button type="submit" class="btn btn-success text-white">enregistrer</button>
    </div>
  </div>
</div>
