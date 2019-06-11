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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="/">
       Bongloy Demo
       </a>
       <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                <a class="nav-link" href="/">
                Demo
                <span class="sr-only">(current)</span>
                </a>
             </li>
             <li class="nav-item">
                <a target="_blank" class="nav-link" href="https://www.bongloy.com/documentation">Official Documentation</a>
             </li>
             <li class="nav-item">
                <a target="_blank" class="nav-link" href="https://github.com/khomsovon/bongloy-demo-laravel">Source Code</a>
             </li>
          </ul>
       </div>
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
