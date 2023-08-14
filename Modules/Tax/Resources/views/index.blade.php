@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">liste des Tax</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
              <h4 class="c-grey-900 mB-20">Taxes</h4>
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>pourcentage</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>pourcentage</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($taxes as $key => $tax)
                    <tr>
                        <td>{{$key +1}}</td>
                        <td>{{$tax->name}}</td>
                        <td>{{$tax->percent}}</td>
                        <td>
                          <a href="" title="modifier" class="btn btn-sm btn-success"> <span class="icon-holder"><i class="fa fa-edit btn-primary"></i></span></a>
                          <a href="" title="modifier" class="btn btn-sm btn-danger"> <span class="icon-holder ml-2 "><i class="fa fa-times"></i></span></a>
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

