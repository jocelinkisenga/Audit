@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
          <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Ajouter un tax</h6>
            <div class="mT-30">
              <form method="POST" action="{{route("store.tax")}}">
                @csrf
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputEmail4">nom du tax</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="INPP">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputPassword4">pourcentage du tax</label>
                    <input type="text" name="percent" class="form-control" id="inputPassword4" placeholder="5">
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
