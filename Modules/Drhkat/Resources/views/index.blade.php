@extends('layouts.main')
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="row gap-20 masonry pos-r">
                <div class="masonry-sizer col-md-6"></div>
                <div class="masonry-item w-100">
                    <div class="row gap-20">
                        <!-- #Toatl Visits ==================== -->
                        <div class="col-md-3">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Impot fonciers</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash"></span>
                                        </div>
                                        <div class="peer">
                                            <span
                                               >
                                                <button class="btn-success rounded">+ déclarer</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- #Total Page Views ==================== -->
                        <div class="col-md-3">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Impot sur les revenus locatifs</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash2"></span>
                                        </div>
                                        <span
                                        >
                                         <button class="btn-danger rounded">+ déclarer</button>
                                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- #Unique Visitors ==================== -->
                        <div class="col-md-3">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Impot sur les concessions</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash3"></span>
                                        </div>
                                        <span
                                        >
                                         <button class="btn-primary rounded">+ déclarer</button>
                                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- #Bounce Rate ==================== -->
                        <div class="col-md-3">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Impots sur les véhicules</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash4"></span>
                                        </div>
                                        <span
                                        >
                                         <button class="btn-warning rounded">+ déclarer</button>
                                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="masonry-item col-12">

                </div>
            </div>
    </main>
@endsection
