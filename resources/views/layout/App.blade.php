<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('bootstrap4.css') }}" />
    </head>
    <body>
        <ul>
            <li><a href="{{ Route('Accueil') }}">Accueil</a></li>
            <li><a href="{{ Route('About') }}">About</a></li>
            <li><a href="{{ Route('Etudiant') }}">Etudiant</a></li>
        </ul>
        <div class="container-fluid">
            @yield('contenu')
        </div>   
    </body>
</html>