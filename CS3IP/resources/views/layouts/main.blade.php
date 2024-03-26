<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Hooperena</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Font Awesome Link & Google Font Link-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> -->

    <!-- scripts javascript-->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</head>

<body>
    <div id="app">
        @include('layouts.frontend.navbar')

        <main>
            @yield('content')
            <!-- @yield('content1') -->
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (session()->has('subscribed'))
                    <div class="alert alert-danger">
                        {{ session()->get('subscribed') }}
                    </div>
                @endif
        </main>
    </div>
    @include('layouts.frontend.footer')

    <!-- JS File Links -->

    @if(session('alert-success'))
        <script>
            alert("{{ session('alert-success') }}");
        </script>
    @endif


</body>

</html>
