<!-- #Left Sidebar ==================== -->
<div class="sidebar">
    <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{ route('home') }}">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="assets/static/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Laeken consulting</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ### $Sidebar Menu ### -->
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
                <a class="sidebar-link" href="{{ route('home') }}">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-home"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-teal-500 icon-bar-chart-o
                        "></i>
                    </span>
                    <span class="title">Déclarations</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="{{route("entreprises")}}">
                            <i class="c-teal-500 icon-list"></i>
                            <span>liste des Entreprises</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route("create.entreprise")}}">
                            <i class="c-teal-500 icon-plus"></i>
                            <span>créer une entreprise</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Menu Item</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);">Menu Item</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Menu Item</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-teal-500 ti-view-list-alt"></i>
                    </span>
                    <span class="title">Declarations</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="{{route("declarations")}}">
                            <span>liste des declarations</span>
                        </a>
                    </li>

                </ul>
            </li> --}}

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-teal-500 icon-payment"></i>
                    </span>
                    <span class="title">Payroll</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="{{ route("users.company") }}">
                            <i class="c-teal-500 icon-users"></i>
                            <span>liste d'employés</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <i class="c-teal-500 icon-plus"></i>
                            <span>ajouter un employé</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">

                        <span class="c-teal-500 icon-gear"></span>
                    </span>
                    <span class="title">Paramètres</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item ">
                        <a href="{{ route("fonction.index") }}">
                            <span><i class="c-teal-500 icon-settings"></i> les fonctions / roles</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route("devise.index") }}">
                            <i class="c-teal-500 icon-attach_money"></i>
                            <span>Dévise</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-teal-500 icon-money"></i>
                            </span>
                            <span class="title">Tax</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a href="{{route("taxes")}}">
                                    <i class="c-teal-500 icon-list"></i>
                                    <span>liste des tax</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{route("create.tax")}}">
                                    <i class="c-teal-500 icon-plus"></i>
                                    <span>ajouter un tax</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            {{-- <li class="nav-item">
                <a class="sidebar-link" href="compose.html">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-share"></i>
                    </span>
                    <span class="title">Compose</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="calendar.html">
                    <span class="icon-holder">
                        <i class="c-deep-orange-500 ti-calendar"></i>
                    </span>
                    <span class="title">Calendar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="chat.html">
                    <span class="icon-holder">
                        <i class="c-deep-purple-500 ti-comment-alt"></i>
                    </span>
                    <span class="title">Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="charts.html">
                    <span class="icon-holder">
                        <i class="c-indigo-500 ti-bar-chart"></i>
                    </span>
                    <span class="title">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="forms.html">
                    <span class="icon-holder">
                        <i class="c-light-blue-500 ti-pencil"></i>
                    </span>
                    <span class="title">Forms</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="sidebar-link" href="ui.html">
                    <span class="icon-holder">
                        <i class="c-pink-500 ti-palette"></i>
                    </span>
                    <span class="title">UI Elements</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-orange-500 ti-layout-list-thumb"></i>
                    </span>
                    <span class="title">Tables</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="sidebar-link" href="basic-table.html">Basic Table</a>
                    </li>
                    <li>
                        <a class="sidebar-link" href="datatable.html">Data Table</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-purple-500 ti-map"></i>
                    </span>
                    <span class="title">Maps</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="google-maps.html">Google Map</a>
                    </li>
                    <li>
                        <a href="vector-maps.html">Vector Map</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-red-500 ti-files"></i>
                    </span>
                    <span class="title">Pages</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="sidebar-link" href="blank.html">Blank</a>
                    </li>
                    <li>
                        <a class="sidebar-link" href="404.html">404</a>
                    </li>
                    <li>
                        <a class="sidebar-link" href="500.html">500</a>
                    </li>
                    <li>
                        <a class="sidebar-link" href="signin.html">Sign In</a>
                    </li>
                    <li>
                        <a class="sidebar-link" href="signup.html">Sign Up</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-teal-500 ti-view-list-alt"></i>
                    </span>
                    <span class="title">Multiple Levels</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Menu Item</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Menu Item</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);">Menu Item</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Menu Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
