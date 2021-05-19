@extends('layout/App')

@section('title')
    User | App
@endsection 

@section('contenu')
    <div class="container bg-danger1">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <div class="panel panel-primary">	
                    <div class="panel-heading bg-primary">Modification d'un utilisateur</div> <br />
                    <div class="panel-body"> 
                        <form action="{{ route('user.update', ['user'=>$user->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="put" />
                            <div class="form-group"> 
                                <label for="">Nom:</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" />
                                {{ $errors->first('name','<small class="help-block">:message</small>') }}
                            </div>                            
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}" />
                                {{ $errors->first('email','<small class="help-block">:message</small>') }}
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label for="">
                                        <input type="checkbox" name="admin" value="1" /> Administrateur
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-2 offset-md-10">
                                    <button class="btn btn-primary pull-right" >Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="javascript:history.back()" class="btn btn-primary">
			            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		            </a>
                </div>
            </div>
        </div>
    </div>
@endsection