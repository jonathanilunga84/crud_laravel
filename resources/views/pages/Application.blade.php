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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="#" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger">Supprimer</a>
                        </td>                      
                    <tr>
                    
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
   
@endsection