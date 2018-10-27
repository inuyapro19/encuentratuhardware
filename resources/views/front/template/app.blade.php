<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Planata Hardware</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
  <!---HEADER-->
  @include('front.include.header')
  <!---Fin HEADER-->



<!--Contenido-->
@yield('content')
<!--Fin Contenido-->
<!--FOOTER-->

<!--FINFOOTER-->
</body>
</html>
