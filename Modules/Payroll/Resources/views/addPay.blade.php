@extends('layouts.main')
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="row gap-20 masonry pos-r">
                <div class="masonry-sizer col-md-6"></div>

                <div class="masonry-item col-md-12">
                    <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Payer l'employé <strong>{{ $employe->nom  }}</strong></h6>
                        <div class="mT-30">
                            <form method="POST" action="{{ route("payment.store") }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEmail4">montant </label>
                                        <input type="text" name="amount" class="form-control" id="inputEmail4"
                                            placeholder="10000">
                                    </div>
                                    <input type="hidden" name="employe_company_id" value="{{ $employe->id }}">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPassword4">mois de paiement</label>
                                        <input type="date" name="date_paiement" class="form-control" id="inputPassword4">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-color">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
