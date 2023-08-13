@extends("layouts.main")
@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">liste des déclarations</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
              <h4 class="c-grey-900 mB-20">Nos entreprises</h4>
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Nom</th>
                      <th>téléphone</th>
                      <th>Matricule</th>
                      <th>ville</th>
                      <th>province</th>
                      <th>Déclarer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>téléphone</th>
                        <th>Matricule</th>
                        <th>ville</th>
                        <th>province</th>
                        <th>Déclarer</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a href="" title="modifier"> <span class="icon-holder"><i class="fa fa-edit btn-primary"></i></span></a>
                          <a href="" title="déclarer">  <span class="icon-holder"><i class="fa fa-eye btn-success"></i></span> </a>
                        </td>
                      </tr>

                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

