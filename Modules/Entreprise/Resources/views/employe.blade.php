@extends("layouts.main")
@section('content')

<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">liste des employes</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
              <h4 class="c-grey-900 mB-20">liste</h4>
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>téléphone</th>
                        <th>adresse</th>
                        <th>ville</th>
                        <th>province</th>
                        <th>Actions</th>
                  </thead>

                  <tbody>
                    @foreach ($employes as $key => $employe)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$employe->name}}</td>
                        <td>{{$employe->phone}} </td>
                        <td>{{$employe->addresse}} $</td>
                        <td>{{$employe->town}}</td>
                        <td>{{$employe->province}}</td>
                        <td>
                          <a href="" title="modifier" class="btn btn-sm btn-success"> <span class="icon-holder"><i class="fa fa-edit btn-primary"></i></span></a>
                          <a href="{{ route("employe.declarations",["id" => $employe->id]) }}" title="liste de déclaration" class="btn btn-sm btn-primary">  <span class="icon-holder">liste de déclarations</span> </a>
                        </td>
                      </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

