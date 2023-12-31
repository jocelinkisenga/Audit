<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Dashboard</title>

    <style>
        #loader {
            transition: all 0.3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000;
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
            animation: sk-scaleout 1.0s infinite ease-in-out;
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
                opacity: 0;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset("icomoon/fonts/icomoon.eot") }}">
    <link rel="stylesheet" href="{{ asset("icomoon/demo-files/demo.css") }}">
    <link rel="stylesheet" href="{{  asset("icomoon/fonts/icomoon.svg") }}">
    <link rel="stylesheet" href="{{ asset("icomoon/fonts/icomoon.ttf") }}">
    <link rel="stylesheet" href="{{ asset("icomoon/fonts/icomoon.woff") }}">
    <link rel="stylesheet" href="{{ asset("icomoon/style.css") }}">
    <script defer="defer" src="{{asset("main.js")}}"></script>
    @livewireStyles
</head>

<body class="app">






    <div id="loader">
        <div class="spinner"></div>
    </div>

    <script>
        window.addEventListener('load', function load() {
            const loader = document.getElementById('loader');
            setTimeout(function() {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>



    <div>


        @include('components.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('components.navbar')

            <!-- ### $App Screen Content ### -->
          @yield('content')

            @include('components.footer')
        </div>
    </div>
    @livewireScripts
<script >
    $(document).ready(function() {
    $('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );
</script>
</body>

</html>
