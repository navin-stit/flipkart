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
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

        <!-- Styles 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <!-- Bootstrap core CSS -->
        <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('css/compiled-4.7.6.min.css') }}" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="{{ asset ('css/style.min.css') }}" rel="stylesheet">

        <!-- Scripts
        <script src="{{ asset('js/app.js') }}" defer></script> -->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset ('js/jquery.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset ('js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset ('js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset ('js/mdb.min.js') }}"></script>  

        <script type="text/javascript" src="{{ asset ('js/modules/forms-free.js') }}"></script>  
        <!--Custom Javascript-->
        <script type="text/javascript" src="{{ asset ('js/script.js') }}"></script> 
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script> 
        

        <script>
var titleArray = ['Laravel', 'Enjoy the Framework..!!!'];
var titleLenght = titleArray.length;
var i = 0;
setInterval(titleChange, 4000);
function titleChange() {

    if (i == 2)
    {
        i = 0;
    }
    document.
            title = titleArray[i];
    i++;
}

        </script>
        <style>
            a{letter-spacing: 1px}

        </style>
    </head>
    <body>
        <div id="app">
            @include('layouts.elements.navbar')

            <main class="py-4">
                @yield('content')
            </main>
            @include('layouts.elements.modal')
            @include('layouts.elements.footer')
        </div>

        <script type="text/javascript">
            var webUrl = {!! json_encode(url('/')) !!}
            ;
        </script>
    </body>
</html>
