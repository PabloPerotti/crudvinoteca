<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <title>Aplicacion de Login</title>

    <!-- Bootstrap core CSS -->
      <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
  <body>
    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
      
  </body>
</html>