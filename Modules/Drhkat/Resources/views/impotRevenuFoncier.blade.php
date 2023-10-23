@extends('layouts.main')
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="row">
                <div class="col-6">
                    <h4 class="c-grey-900 mT-10 mB-30 ml-20">liste de déclarations de type foncier</h4>
                </div>
                <div class="col-6">
                    <button class="btn btn-success mT-10 mB-30 text-white" data-bs-toggle="modal"
                        data-bs-target="#create">Ajouter une une déclaration <i class="icon-plus ml-2"></i></button>
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
                        <h5 class="modal-title">passer une déclaration</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <form action="{{ route('fonction.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class=" mb-3 col-4">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">nom complet du déclarant</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4"
                                                placeholder="secrétaire  ...">
                                        </div>
                                    </div>
                                    <div class=" mb-3 col-4">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">numéro de contact</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4"
                                                placeholder="secrétaire  ...">
                                        </div>
                                    </div>
                                    <div class=" mb-3 col-4">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail4">addresse</label>
                                            <input type="text" name="name" class="form-control" id="inputEmail4"
                                                placeholder="secrétaire  ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" mb-3 col-3">
                                        <div class="form-group">
                                            <label for="my-select">Rang</label>
                                            <select id="my-select" class="form-control" name="">
                                                <option>Ran</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class=" mb-3 col-3">
                                        <div class="form-group">
                                            <label for="my-select">Propriété</label>
                                            <select id="my-select" class="form-control" name="">
                                                <option>propriété</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class=" mb-3 col-3">
                                        <div class="form-group">
                                            <label for="my-select">Nature</label>
                                            <select id="my-select" class="form-control" name="">
                                                <option>nature</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class=" mb-3 col-3">
                                        <div class="form-group">
                                            <label for="my-select">Base</label>
                                            <select id="my-select" class="form-control" name="">
                                                <option>base</option>
                                            </select>
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
