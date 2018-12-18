<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Strong Boy</title>

    <script src="{{ asset('js/jquery-3.3.1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
      <div class="row">
        <div class="col-md-2">
          <div class="dashboard-title">
            <a href="{{ URL::to('/')  }}">StrongBoy</a>
          </div>
        </div>
        <div class="col-md-10">
          <div class="dashboard-top">
            @yield('title')
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <nav class="dashboard-nav">
            <a href="{{ URL::to('/exercise')}}">
              <div name="dashboard-nav-item">
                Exercises
              </div>
            </a>
          </nav>
        </div>
        <div class="col-md-10">
          <main class="container dashboard-content">
              @if(env("APP_DEBUG"))
                  <div class="row">
                      <div class="col-xs alert alert-danger">
                          <h1>You are currently in development mode</h1>
                      </div>
                  </div>
              @endif
              @yield('content')

              <div id="exercise-card">
              </div>
          </main>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
