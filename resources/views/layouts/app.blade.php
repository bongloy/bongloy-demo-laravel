<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="bongloy-publishable-key" content="{{Config('bongloy.publishable_key')}}">
    <title>Bongloy Demo Laravel</title>
    <script type="text/javascript" src="https://js.bongloy.com/v3"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url("/")}}">Bongloy Demo Laravel</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main_navbar">
            <ul class="nav navbar-nav">
              <li><a target="_blank" class="nav-link" href="https://www.bongloy.com/documentation">Documentation</a></li>
              <li><a target="_blank" href="https://github.com/khomsovon/bongloy-demo-laravel">Source Code</a></li>
              <li><a target="_blank" class="nav-link" href="https://www.bongloy.com">Bongloy Home</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      @if (session('message'))
        <div class="alert alert-success">
            {!! session('message') !!}
        </div>
      @endif
      @yield('content')
      <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </div>
  </body>
</html>
