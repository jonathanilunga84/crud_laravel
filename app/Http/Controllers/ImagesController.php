<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Support\Str;
use App\Models\Photo;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    //
    public function index(){
        $photos = Photo::all();
        return view('pages.ImagesUpload',compact('photos'));
    }

    public function store(ImageRequest $imageRequest){
        /*$get_name =$imageRequest->file('monImage')->getClientOriginalName();
        $get_ext =$imageRequest->file('monImage')->getClientOriginalExtension();
        $get_justName = pathinfo($get_name, PATHINFO_FILENAME); //$imageRequest->
        $fileNameToStore = "MENA".'_'. time().'.'.$get_ext;
        $path = 'public/images';
        $this->move($path, $fileNameToStore);
        // if(move($path, $fileNameToStore)){
        //    return 'Upload Confirm OK';
        //} 
        return 'Upload Ok'.' => '. $get_name.' ==> '.$get_ext .' == juste_Nom > '.$get_justName.' --NameFinale-- '.$fileNameToStore;
        */
        $get_name = $imageRequest->file('monImage')->getClientOriginalName();
        $get_ext =$imageRequest->file('monImage')->getClientOriginalExtension();
        $get_justName = pathinfo($get_name, PATHINFO_FILENAME); // ->
        $aleatoir = str::random(3);
        $fileNameToStore = $aleatoir.'_'. time().'.'.$get_ext;

        $val=$imageRequest->monImage->storeAs('public/images', $fileNameToStore);
        Photo::create([
            'img'=>'images/'.$fileNameToStore
        ]);
        
        return 'Upload'."=> ".$val;
    }
}
