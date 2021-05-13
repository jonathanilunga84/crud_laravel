@extends('layout/App')

@section('title')
    Accueil | App
@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10">
            <div class="">            
            <table class="table table-bordered table-hover">
                <h3 class="align-center border-bottom">Liste des Etudiant Inscrit</h3>
                <div class="d-flex justify-content-between">
                    {{ $etudiants->links() }}
                   <div> <a href="{{ route('Create') }}" class="btn btn-primary">Add Etudiant</a></div>
                </div>               
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Post</th>
                        <th scope="col">CLasse</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //var_dump($etudiants); ?>
                    @foreach($etudiants as $etudiant)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->postnom }}</td>
                            <td>{{ $etudiant->classe->libelle }}</td>
                            <td>
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Supprimer</a>
                            </td>                      
                        <tr>
                    @endforeach
                </tbody>
                
            </table>
            </div>
            </div>
        </div>
    </div>
   
@endsection