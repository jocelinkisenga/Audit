@extends('layouts.main')
@section('content')
@php
    use \Modules\Payroll\Enums\EtatCivilEnum;
    use \Modules\Payroll\Enums\EducationEnum;
@endphp
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="row gap-20 masonry pos-r">
                <div class="masonry-sizer col-md-6"></div>

                <div class="masonry-item col-md-12">
                    <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Ajout d'un employé de l'entreprise</h6>
                        <div class="mT-30">
                            <form method="POST" action="{{ route('store.entreprise') }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputEmail4">Nom </label>
                                        <input type="text" name="nom" class="form-control" id="inputEmail4"
                                            placeholder="Lushidev">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputPassword4">Post-nom</label>
                                        <input type="text" name="postNom" class="form-control" id="inputPassword4"
                                            placeholder="0991161449">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputPassword4">Prénom</label>
                                        <input type="text" name="prenom" class="form-control" id="inputPassword4"
                                            placeholder="0991161449">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEmail4">Matricule</label>
                                        <input type="text" name="matricule" class="form-control" id="inputEmail4"
                                            placeholder="Email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPassword4">Téléphone</label>
                                        <input type="text" name="contact_phone" class="form-control" id="inputPassword4"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputAddress">Addresse</label>
                                    <input type="text" name="addresse" class="form-control" id="inputAddress"
                                        placeholder="av. kansenya, N°12">
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputCity">date naissance</label>
                                        <input type="date" name="date_naissance" class="form-control" id="inputCity">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <div class="form-group">
                                        <label class="form-label" for="inputState">Etat civile</label>
                                            <select id="my-select" class="form-control" name="etat_civil">
                                                <option selected>selectionnez un état civil</option>
                                                    <option value="{{ EtatCivilEnum::CELIBATAIRE }}">{{ EtatCivilEnum::CELIBATAIRE }}</option>
                                                    <option value="{{ EtatCivilEnum::CELIBATAIRE }}">{{ EtatCivilEnum::MARIE }}</option>
                                                    <option value="{{ EtatCivilEnum::CELIBATAIRE }}">{{ EtatCivilEnum::VEUF }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <div class="form-group">
                                        <label class="form-label" for="inputState">Niveau d'éducation</label>
                                            <select id="my-select" class="form-control" name="etat_civil">
                                                <option selected>selectionnez un niveau d'éducation</option>
                                                    <option value="{{ EducationEnum::LICENCE }}">{{ EducationEnum::LICENCE }}</option>
                                                    <option value="{{ EducationEnum::GRADUAT }}">{{ EducationEnum::GRADUAT }}</option>
                                                    <option value="{{ EducationEnum::DIPLOME }}">{{ EducationEnum::DIPLOME }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputCity">nombre enfant</label>
                                        <input type="text" name="town" class="form-control" id="inputCity">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputState">nom complet femme (optionnel)</label>
                                        <input type="text" name="province" class="form-control" id="inputCity">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputZip">fonction dans l'entreprise</label>
                                        <input type="text" name="zip" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputCity">nom complet personne de référence (*)</label>
                                        <input type="text" name="town" class="form-control" id="inputCity">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputState">contact téléphone</label>
                                        <input type="text" name="province" class="form-control" id="inputCity">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-color">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
