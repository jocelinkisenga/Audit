@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">liste des déclarations</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
              <h4 class="c-grey-900 mB-20">Recentes déclarations</h4>
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>téléphone</th>
                        <th>salaire</th>
                        <th>entreprise</th>
                        <th>date</th>
                        <th>INPP</th>
                        <th>INSS</th>
                        <th>DRHKAT</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>téléphone</th>
                        <th>salaire</th>
                        <th>entreprise</th>
                        <th>date</th>
                        <th>INPP</th>
                        <th>INSS</th>
                        <th>DRHKAT</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($declarations as $key => $declaration)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$declaration->employe_externe->name}}</td>
                        <td>{{$declaration->employe_externe->phone}} </td>
                        <td>{{$declaration->salaire}} $</td>
                        <td>{{$declaration->entreprise->name}}</td>
                        <td>{{$declaration->date_declaration}}</td>
                        <td>
                            @foreach ($taxes as $tax)
                                @if ($tax->name === "INPP")
                                    {{$declaration->salaire - ((16/100) * $declaration->salaire)}}
                                @endif
                            @endforeach
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                          <a href="" title="modifier" class="btn btn-sm btn-success"> <span class="icon-holder"><i class="fa fa-edit btn-primary"></i></span></a>
                          <a href="" title="déclarer" class="btn btn-sm btn-warning">  <span class="icon-holder"><i class="fa fa-eye btn-success"></i></span> </a>
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

