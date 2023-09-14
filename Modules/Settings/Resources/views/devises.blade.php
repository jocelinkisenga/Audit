@extends("layouts.main")
@section("content")
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">liste de tous les employés</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Nos employés</h4>
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nom</th>
                                    <th>post-nom</th>
                                    <th>Matricule</th>
                                    <th>adresse</th>
                                    <th>telephone</th>
                                    <th>role/fonction</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>

                                        </a>
                                        </td>
                                        <td>
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
