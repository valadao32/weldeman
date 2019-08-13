<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/meucss.css') }}" rel="stylesheet"> -->
    
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <script src="{{ asset('js/meujs.js') }}" defer></script> -->

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <link href="{{ asset('css/css_bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/css_datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css_styles.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->



</head>
<body>
    @guest
    <script language="JavaScript"> 
        window.location="login"; 
    </script> 
    @else
        @component('sidebar-component', [
            "current" => $current
        ])
        @endcomponent
    <main class="py-4">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main container-fluid">
            
            @yield('content')
        </div>
    </main>
    
    @hasSection('js')
        @yield('js')
    @endif
    <script src="{{ asset('js/js_jquery-1.11.1.min.js') }}" defer></script>
    <script src="{{ asset('js/js_bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/js_chart.min.js') }}" defer></script>
    <script src="{{ asset('js/js_chart-data.js') }}" defer></script>
    <script src="{{ asset('js/js_easypiechart.js') }}" defer></script>
    <script src="{{ asset('js/js_easypiechart-data.js') }}" defer></script>
    <script src="{{ asset('js/js_bootstrap-datepicker.js') }}" defer></script>
    <script src="{{ asset('js/js_custom.js') }}" defer></script>
    
    @endguest
</body>
</html>

        