<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="{{asset('favico.ico')}}"/>
      <title>Mari berbagi ilmu kepada Sesama</title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    </head>

    <body>


      @include('content.header')
      @yield('content')
      @include('content.footer')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.2.1.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript">
      $( document ).ready(function(){$(".button-collapse").sideNav()});
      </script>
      @stack('js')
    </body>
  </html>
