<!DOCTYPE html>
<html>
<style type="text/css">
    .header img {
        width: 20%;
        margin-top: 2%;
        margin-bottom: 2%;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/dist/css/bootstrap.min.css')  }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.css')  }}">
    <link href="{{ asset('ihover/src/ihover.css')  }}" rel="stylesheet">
    {{-- Title --}}
    <title>{{ config('app.name') }}</title>
</head>

<body>
    {{-- Header --}}
    <div class="header">
        <img src="{{ asset('img/nuevoLogo.png') }}" class="center-block img-responsive">
    </div>
    {{-- GetContent --}}
    <div class="content">
        @yield('content')
    </div>

    {{-- Script --}}
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')  }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/dist/js/bootstrap.min.js')  }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js')  }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.js')  }}"></script>
    <script defer src="{{ asset('js/font.js')  }}"></script>
</body>

</html>
