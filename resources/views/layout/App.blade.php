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
            <li><a href="{{ Route('Contact') }}">Contact</a></li>
            <li><a href="{{ Route('Upload') }}">Upload</a></li>
        </ul>
        <div class="container-fluid">
            @yield('contenu')
        </div>  
        <script src="{{ asset('js/jQuery3.6.0.min.js') }}"></script> 
        <script src="{{ asset('js/bootstrap.bundle.js') }}"></script> 
        <script src="{{ asset('js/app1.js') }}"></script> 
    </body>
</html>