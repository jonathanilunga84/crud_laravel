<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('bootstrap4.css') }}" />
        <link rel="stylesheet" href="{{ asset('app.css') }}" />
        <style>
        #ct{
            border:5px solid red;
        }
           #conte{
            /*border-left:1px solid red;
            border-right:1px solid red;
            border-bottom:1px solid red;*/
            width:100%;
            height-: 150px;
            text-align:justify;
            object-fit:cover;
            /*line-height: 250px;*/
            /*transform: translate(50%, 50%);*/
           }
            #imgBd{
            width-:;
            height-: 250px;
            border-left-:5px;
            margin-bottom-: 10px;
            padding-bottom: 15px;
            border-:5px solid red;
           /* border-left:1px solid red;
            border-right:1px solid red;*/
            border-bottom-:1px solid red;
            }
            img{
                width:100%;
                height: 250px;
                border-:5px solid black;
                object-fit:cover;
            }
            
            #container-img{
                border-:1px solid black;
                margin-left-: 5px;
                margin-bottom: 15px;
            }
            #ct:hover{
                border: 3px solid green;
            }
        </style>
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