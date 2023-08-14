@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
          <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Créer une déclaration</h6>
            <div class="mT-30">
              <form action="{{route("store.declaration")}}" method="POST" >
                @csrf

                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="inputState">sélectionner un nouvel employé s'il existe (optionnel)</label>
                        <select id="inputState" class="form-control" name="employe_id">
                          <option selected="selected">choix de l'employé ...</option>
                          <option value=""></option>
                          @foreach ($employes as $employe)
                            <option value="{{$employe->id}}">{{$employe->name}}</option>
                          @endforeach
                        </select>
                      </div>
                </div>
                <div class="row">
                    <input type="hidden" name="entreprise_id" value="{{$entrepriseId}}">
                  <div class="mb-3 col-md-6 mt-3">
                    <label class="form-label" for="inputEmail4">Nom de l'employé</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Gabriel kasenda">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4">N° de téléphone</label>
                    <input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="0991161449">
                  </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="inputEmail4">salaire</label>
                      <input type="text" name="salaire" class="form-control" id="inputEmail4" placeholder="">
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="inputPassword4">adresse</label>
                      <input type="text" name="addresse" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                  </div>
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputCity">ville</label>
                    <input type="text" name="town" class="form-control" id="inputCity">
                  </div>
                  <div class="mb-3 col-md-4">
                    <label class="form-label" for="inputState">province</label>
                    <input type="text" name="province" class="form-control" id="inputCity">
                  </div>
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

                <button type="submit" class="btn btn-success btn-color">Enregistrer</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
@endsection
