<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" href="{{asset('cssSinauyo/master.css')}}">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
      <link rel="stylesheet" href="/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
      <title>Mari berbagi ilmu kepada Sesama</title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        body{
          background: #F7F7F7;
        }

        .datastat{
          background: #fff; 
          padding: 30px;
          overflow-x: auto;
          overflow-y: auto;
          height: 500px;
        }
        .total{
          color: rgb(37, 190, 152);
          font-weight: bold;
          font-size: 20px;
        }
        #sidenav{
          width: 210px;
          margin-right:2000px;
        }
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background: linear-gradient(180deg, #404F76 0%, #5C6682 100%);
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidenav a {
          padding: 8px;
          text-decoration: none;
          font-size: 18px;
          color: #fff;
          display: block;
          transition: 0.3s;
        }

        .sidenav li:hover {
          background: #3BF4C7;
        }
        .tabs{
          background: transparent;
        }
        .tabs .indicator{
          display: none;
        }
        .tabs .tab a:focus.active {
          background-color: #3BF4C7;
        }
        .nav-ver{
          width: 100%; 
          float: left; 
          
        }
        .nav-ver a{
          
          text-align: left;
        }
        table, th, tr, td{
          border: 1px solid #000;
        }
      </style>

    </head>

    <body>
  
      @yield('content')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.2.1.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript">
      // $( document ).ready(function(){$(".button-collapse").sideNav()});
      </script>
      <script type="text/javascript">
        $(".dropdown-button").dropdown();
      </script>
      <script>
        $(document).ready(function() {
            $('select').material_select();
          });
      </script>
      <script>
        $(document).ready(function(){
        $('ul.tabs').tes();
      });
      </script>
      <script>
            $(document).ready(function(){
          $('ul.tabs').tabs('select_tab', 'tab_id');
        });
        </script>
      @stack('js')
    </body>
  </html>
