@extends('layouts.main')
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <h4 class="c-grey-900 mT-10 mB-30">liste des entreprises</h4>
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
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($entreprises as $key => $entreprise)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $entreprise->name }}</td>
                                            <td>{{ $entreprise->phone }}</td>
                                            <td>{{ $entreprise->matricule }}</td>
                                            <td>{{ $entreprise->town }}</td>
                                            <td>{{ $entreprise->province }}</td>
                                            <td>
                                                <a href="{{ route("create.declaration",["id" => $entreprise->id]) }}" title="modifier" class="btn btn-sm  btn-primary"> <span
                                                        class="icon-holder">EMPLOYE</span></a>
                                                <a href=" {{ route('dgi.create', ['id' => $entreprise->id]) }} "
                                                    title="déclarer" class="btn btn-sm btn-success "> <span
                                                        class="icon-holder">DGI</span>
                                                </a>
                                                <a href="  " title="déclarer"
                                                    class="btn btn-sm btn-warning text-black"> <span
                                                        class="icon-holder">DRHKAT</span>
                                                </a>
                                                <a href="  " title="déclarer"
                                                    class="btn btn-sm btn-success "> <span
                                                        class="icon-holder">voir plus</span>
                                                </a>
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
