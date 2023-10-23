@extends('layouts.main')
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="row">
                <div class="col-6">
                    <h4 class="c-grey-900 mT-10 mB-30 ml-20">liste de toutes les déclarations</h4>
                </div>
                <div class="col-6">
                    <button class="btn btn-success mT-10 mB-30 text-white" data-bs-toggle="modal"
                        data-bs-target="#create">Ajouter une déclaration <i class="icon-plus ml-2"></i></button>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h4 class="c-grey-900 mB-20">Récentes déclarations</h4>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal box --}}
        <div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter la déclaration</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <form action="{{ route("fonction.store") }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class=" mb-3 col-4">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">nom complet du déclarant</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                    </div>
                                    <div class=" mb-3 col-3">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">numéro de contact</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                    </div>
                                    <div class=" mb-3 col-4">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">adresse</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" mb-3 col-4">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">Les revenus bruts cumulés :</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                    </div>
                                    <div class=" mb-3 col-3">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">profits bruts de la sous-location</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                    </div>
                                    <div class=" mb-3 col-4">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">base minimum forfaitaire </label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6  mt-4">
                                    <button class="btn btn-submit bg-success text-white" type="submit"><span
                                            class="spinner-border spinner-border-sm mr-2" role="status"
                                            aria-hidden="true"></span>Ajouter</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
