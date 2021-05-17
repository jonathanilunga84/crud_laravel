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
                
                <input type="file" name="monImage[]" multiple />
                <p>{{$errors->first('monImage')}}</p>
                <button class="form-control btn btn-success">Uploader</button>
            </form>
        </div>
        <div class="row">
            @foreach($photos as $photo)
            <h3>{{$photo->id1}}</h3>
            <div  id="container-img" class="col-sm-12 col-md-4 d-flex1 align-items-center1 justify-content-center1 bg-danger1">
               <div class="row">
               
                    <div class="col-ms-12 col-md-12">
                        <div id="ct">
                            <img id="imgBd" src="{{asset('storage/'.$photo->img)}}" alt="img pas vue" />

                            <div class="row">
                                <div class="col-ms-12 col-md-12">
                                <p id="conte">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti enim alias mollitia dolorum nostrum dolores sapiente aliquid blanditiis numquam? Nam, atque magnam! Eius, perspiciatis. Aperiam error eum nam expedita quos.
                                </p>
                                </div> 
                            </div>
                        </div>
                    </div>                      
               </div>
                
                
            </div>
            @endforeach
        </div>
    </div>
@endsection