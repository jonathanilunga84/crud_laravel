@extends('layout/App')

@section('title')
    Contact | App
@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2 shadow-sm ">
               <h3>Contact</h3>
               @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               <form action="{{ route('Contact.Add') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="noom">Nom:</label>
                        <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom') }}" />
                        {{ $errors->first('nom') }}
                    </div>
                    <div class="form-group">
                        <label for="msgs">Message:</label>
                        <textarea name="msgs" id="" cols="30" rows="3" class="form-control" >{{ old('msgs') }}</textarea>
                        {{$errors->first('msgs')}}
                    </div> 
                    <button class="form-control btn btn-success">Envoyer</button>                   
               </form>               
            </div>
        </div>
    </div>
@endsection


