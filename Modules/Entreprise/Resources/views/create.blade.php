@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
          <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Complex Form Layout</h6>
            <div class="mT-30">
              <form method="POST" action="{{route("store.entreprise")}}">
                @csrf
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputEmail4">Nom de l'entreprise</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Lushidev">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4">N° de téléphone</label>
                    <input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="0991161449">
                  </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="inputEmail4">Email</label>
                      <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="inputPassword4">Matricule</label>
                      <input type="text" name="matricule" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                  </div>
                <div class="mb-3">
                  <label class="form-label" for="inputAddress">Addresse</label>
                <input type="text" name="addresse" class="form-control" id="inputAddress" placeholder="av. kansenya, N°12">
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
                  <div class="mb-3 col-md-2">
                    <label class="form-label" for="inputZip">boite postal</label>
                    <input type="text" name="zip" class="form-control" id="inputZip">
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
