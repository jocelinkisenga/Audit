@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Déclaration DGI pour l'entreprise {{$entreprise->name}}</h4>


                @livewire("declaration-dgi")



      </div>
    </div>
  </main>

@endsection
