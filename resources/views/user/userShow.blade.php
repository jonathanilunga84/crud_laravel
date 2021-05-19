@extends('layout/App')

@section('title')
    UserShow | App
@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <div class="panel panel-primary1">
                    <div class="panel-heading bg-primary ">Fiche d'utilisateur</div>
                    <div class="panel-body"> 
                        <p>Nom : {{ $user->name }}</p>
                        <p>Email : {{ $user->email }}</p>
                        @if($user->admin == 1)
                            Administrateur
                        @endif
			        </div>
                    <a href="javascript:history.back()" class="btn btn-primary">
			            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		            </a>
                </div>
            </div>
        </div>
    </div>
@endsection