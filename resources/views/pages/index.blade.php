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
                  <h6 class="lh-1">Nombre d'entreprise</h6>
                </div>
                <div class="layer w-100">
                  <div class="peers ai-sb fxw-nw">
                    <div class="peer peer-greed">
                      <span id="sparklinedash"></span>
                    </div>
                    <div class="peer">
                      <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">44</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- #Total Page Views ==================== -->
            <div class="col-md-3">
              <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                  <h6 class="lh-1">Total Déclarations</h6>
                </div>
                <div class="layer w-100">
                  <div class="peers ai-sb fxw-nw">
                    <div class="peer peer-greed">
                      <span id="sparklinedash2"></span>
                    </div>
                    <div class="peer">
                      <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">788</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- #Unique Visitors ==================== -->
            <div class="col-md-3">
              <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                  <h6 class="lh-1">Nombre d'employés</h6>
                </div>
                <div class="layer w-100">
                  <div class="peers ai-sb fxw-nw">
                    <div class="peer peer-greed">
                      <span id="sparklinedash3"></span>
                    </div>
                    <div class="peer">
                      <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">48</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- #Bounce Rate ==================== -->
            <div class="col-md-3">
              <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                  <h6 class="lh-1">Gain total</h6>
                </div>
                <div class="layer w-100">
                  <div class="peers ai-sb fxw-nw">
                    <div class="peer peer-greed">
                      <span id="sparklinedash4"></span>
                    </div>
                    <div class="peer">
                      <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="masonry-item col-12">

        </div>
        <div class="masonry-item col-md-12">
          <!-- #Sales Report ==================== -->
          <div class="bd bgc-white">
            <div class="layers">
              <div class="layer w-100 p-20">
                <h6 class="lh-1">Nouvelles déclarations</h6>
              </div>
              <div class="layer w-100">
                <div class="bgc-light-blue-500 c-white p-20">
                  <div class="peers ai-c jc-sb gap-40">
                    <div class="peer peer-greed">
                      <h5>Nouvelles déclarations</h5>
                      <p class="mB-0"></p>
                    </div>
                    <div class="peer">
                      <h3 class="text-end">$6,000</h3>
                    </div>
                  </div>
                </div>
                <div class="table-responsive p-20">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="bdwT-0">Name</th>
                        <th class="bdwT-0">Status</th>
                        <th class="bdwT-0">Date</th>
                        <th class="bdwT-0">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-600">Item #1 Name</td>
                        <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c rounded-pill">Unavailable</span> </td>
                        <td>Nov 18</td>
                        <td><span class="text-success">$12</span></td>
                      </tr>
                      <tr>
                        <td class="fw-600">Item #2 Name</td>
                        <td><span class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c rounded-pill">New</span></td>
                        <td>Nov 19</td>
                        <td><span class="text-info">$34</span></td>
                      </tr>
                      <tr>
                        <td class="fw-600">Item #3 Name</td>
                        <td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c rounded-pill">New</span></td>
                        <td>Nov 20</td>
                        <td><span class="text-danger">-$45</span></td>
                      </tr>
                      <tr>
                        <td class="fw-600">Item #4 Name</td>
                        <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c rounded-pill">Unavailable</span></td>
                        <td>Nov 21</td>
                        <td><span class="text-success">$65</span></td>
                      </tr>
                      <tr>
                        <td class="fw-600">Item #5 Name</td>
                        <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c rounded-pill">Used</span></td>
                        <td>Nov 22</td>
                        <td><span class="text-success">$78</span></td>
                      </tr>
                      <tr>
                        <td class="fw-600">Item #6 Name</td>
                        <td><span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c rounded-pill">Used</span> </td>
                        <td>Nov 23</td>
                        <td><span class="text-danger">-$88</span></td>
                      </tr>
                      <tr>
                        <td class="fw-600">Item #7 Name</td>
                        <td><span class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c rounded-pill">Old</span></td>
                        <td>Nov 22</td>
                        <td><span class="text-success">$56</span></td>
                      </tr>
                    </tbody>
                  </table>
                 </div>
              </div>
            </div>
            <div class="ta-c bdT w-100 p-20">
              <a href="#">Check all the sales</a>
            </div>
          </div>
        </div>

        <div class="masonry-item col-md-12">
            <!-- #Sales Report ==================== -->
            <div class="bd bgc-white">
              <div class="layers">
                <div class="layer w-100 p-20">
                  <h6 class="lh-1">Nouvelles Entreprises</h6>
                </div>
                <div class="layer w-100">
                  <div class="bgc-light-blue-500 c-white p-20">
                    <div class="peers ai-c jc-sb gap-40">
                      <div class="peer peer-greed">
                        <h5>Nouvelles entreprises</h5>
                        <p class="mB-0"></p>
                      </div>
                      <div class="peer">
                        <h3 class="text-end"></h3>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive p-20">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="bdwT-0">Nom</th>
                          <th class="bdwT-0">contact</th>
                          <th class="bdwT-0">adresse</th>
                          <th class="bdwT-0">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="fw-600">Item #1 Name</td>
                          <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c rounded-pill">Unavailable</span> </td>
                          <td>Nov 18</td>
                          <td><span class="text-success">$12</span></td>
                        </tr>
                      </tbody>
                    </table>
                   </div>
                </div>
              </div>
              <div class="ta-c bdT w-100 p-20">
                <a href="#">Check all the sales</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </main>
@endsection
