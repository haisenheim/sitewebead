<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
    </head>
    <title>
        @yield('titre')
    </title>

    <body>
         <div class="vide" >
            <img class="img-vide" src="{{asset('photos/ead1.png')}}" alt="" >
        </div>
        <div class=" haut container md">
            <h1>ACCEUIL</h1>
        </div>

        <div>
            @yield('corps')
        </div>

        <div>
            @yield('bas')
        </div>

    </body>
</html>