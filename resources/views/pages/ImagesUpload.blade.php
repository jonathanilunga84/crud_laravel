@extends('layout/App')

@section('title')
    Upload | App
@endsection

@section('contenu')
    <div class="container">
        <div class="col-sm-12 col-md-8 offset-md-2 shadow-sm">
            <h3>Add Image</h3>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="{{ route('Upload.Add') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                
                <input type="file" name="monImage[]" />
                <p>{{$errors->first('monImage')}}</p>
                <button class="form-control btn btn-success">Uploader</button>
            </form>
        </div>
        <div class="row">
        <img src="{{asset('storage/images/MENA_1621077879.jpeg')}}" alt="NNNN">
            @foreach($photos as $photo)
            <div class="col-sm-12 col-md-4 d-flex align-items-center justify-content-center">
                <h3>{{$photo->id}}</h3>
                <img src="{{asset('storage/'.$photo->img)}}" alt="img pas vue" />
            </div>
            @endforeach
        </div>
    </div>
@endsection