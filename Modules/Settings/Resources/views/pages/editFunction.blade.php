@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
          <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Editer le role</h6>
            <div class="mT-30">
              <form method="POST"  action="{{route("fonction.update")}}">
                @method("put")
                @csrf
                <input type="hidden" value="{{ $function->id }}" name="function_id">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="inputEmail4">nom de la fonction</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $function->name }}">
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
