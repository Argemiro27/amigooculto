<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- LAYOUT PADRÃO DO SITE -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SECRET FRIEND</title>
  <link rel="stylesheet" href="{{ asset('css/logged/logged.css') }}">
</head>

<body>
  <main>
    @yield('content')
  </main>
</body>

</html>