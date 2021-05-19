@extends('layout/App')

@section('title')
    UserCreate | App
@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <div class="panel panel-primary">	
                    <div class="panel-heading bg-primary"><h3>Création d'un utilisateur</h3></div><br />
                        <div class="panel-body"> 
                            <form action="{{route('user.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nom" value="{{ old('name')}}" />
                                    {{ $errors->first('name') }}
                                </div> 
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email')}}" />
                                    {{ $errors->first('email') }}
                                </div>  
                                <div class="form-group">
                                    <input type="text" name="password" class="form-control" placeholder="password" />
                                    {{ $errors->first('password') }}
                                </div>
                                <div class="form-group">
                                    <input type="text" name="password_confirmation" class="form-control" placeholder="password-confirmation" />
                                   
                                </div> 
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label for="admin">
                                            <input type="checkbox" name="admin" id="admin" value="1"> Administrateur
                                        </label>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-sm-12 col-md-2 offset-md-10">
                                        <button class="btn btn-primary"> Envoyer</button>
                                    </div>
                                </div>                                                       
                            </form>
                            <a href="javascript:history.back()" class="btn btn-primary">
			                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection