@extends('layouts.main')

@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <h4 class="c-grey-900 mT-10 mB-30">liste de tous les employés</h4>
                <div class="row mb-4">

                    <div class="col-6"><a href="{{ route("payment.list") }}" class="btn btn-primary">liste des paiements</a></div>


                    <div class="col-6"><a href="{{ route("payroll.employ.add") }}" class="btn btn-primary">Ajoute un employé</a></div>

                </div>
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
                                    @foreach ($employes as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->nom }}</td>
                                            <td>{{ $item->postnom }}</td>
                                            <td>{{ $item->matricule }}</td>
                                            <td>{{ $item->addresse }}</td>
                                            <td>{{ $item->contact_phone }}</td>
                                            <td>
                                                {{ $item->fonction->name }}
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary"
                                                    title="voir la fiche de l'employé"><i
                                                        class="ti-eye font-bold"></i>détails</a>
                                                <a href="{{ route('paiement.create', ['id' => $item->id]) }}"
                                                    class="btn btn-success" title="proceder au paiement"><i
                                                        class="ti-money font-bold"></i>paiement</a>
                                                <a href="" title="proceder à la déclaration"></a>
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
