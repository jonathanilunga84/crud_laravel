@extends('layout/App')

@section('title')
    Add Etudiant | App
@endsection

@section('contenu')
    
        <div class="col-sm-12 col-md-8 offset-md-2">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h3 class="border-bottom ">Ajout d'un nouvel etudiant</h3>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{ session()->get('success') }}</p>
                    </div>
                    {{ session()->get('success') }}
                @endif
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('AjoutEtudiant') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom Etudiant</label>
                        <input type="text" name="nom" class="form-control" />
                        <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Postnom Etudiant</label>
                        <input type="text" name="postnom" class="form-control" />
                        <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Classe Etudiant</label>
                        <select name="classe_id" class="form-control">
                            <option value="">Fait votre Choix</option>
                            @foreach($classes as $classe)
                                <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="{{ route('Etudiant') }}" class="btn btn-danger">Ennuler</a>
                </form>
            </div>
        </div>
@endsection