@extends('layout/App')

@section('title')
    User | App
@endsection

@section('contenu')
    <br />
    <div class="container">
        
        <div class="col-sm-12 col-md-10 offset-md-1">
            @if(session()->has('ok'))
                <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Liste des Utilisateurs</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr class="">
                            <th>#</th>
                            <th>Nom</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{!! $user->id !!}</td>
                                <td class="text-primary"><strong>{{ $user->name }}</strong></td>
                                <td> <a class="btn btn-success btn-block" href="{{ route('user.show', ['user'=>$user->id]) }}">Voir</a></td>
                                <td> <a class="btn btn-warning btn-block" href="{{ route('user.edit', ['user'=>$user->id]) }}">Modifié</a></td>
                                <td>
                                    <a class="btn btn-danger" href="#" onclick="if(confirm('Voulez-vous vraiment supprimer cet etudiant ?')){ document.getElementById('form-{{$user->id}}').submit() }">Supprimer</a>
                                    
                                    <form id="form-{{$user->id}}" action="{{ route('user.update', ['user'=>$user->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete" />
                                    </form>
							    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{ $users->links() }}
                </div>
                <div class="col-sm-3 offset-md-7">
                    <a class="btn btn-info pull-right" href="{{ route('user.create') }}">Ajouter un utilisateur </a>
                </div>
            </div>
        </div>
    </div>
@endsection