<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Strong Boy</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

          <div>
              @if(env("APP_DEBUG"))
                      <div class="mb-1 alert alert-danger dev-mode-banner">
                          <b>You are currently in development mode</b>
                      </div>
              @endif
              @yield('content')
          </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>
