<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    
    <!-- PLUGINS CSS STYLE -->
    <link href="plugins/toaster/toastr.min.css" rel="stylesheet" />
    <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
    <link href="plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="plugins/ladda/ladda.min.css" rel="stylesheet" />
    <link href="plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="css/sleek.css" />

    

    <!-- FAVICON -->
    <link href="img/favicon.png" rel="shortcut icon" />

    <!--
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="plugins/nprogress/nprogress.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/chart.js') }}" defer></script>
    <script src="{{ asset('js/date-range.js') }}" defer></script>
    <script src="{{ asset('js/map.js') }}" defer></script>
    <script src="{{ asset('js/sleek.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sleek.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/sleek.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sleek.min.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
    
    

</head>
<body>
    <div id="app">
                
        @guest
            
        @else
            @component('sidebar-component')
            @endcomponent
        @endguest

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
