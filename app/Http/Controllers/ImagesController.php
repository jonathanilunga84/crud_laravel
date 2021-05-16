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

    public function store(/*ImageRequest $imageRequest*/ Request $request){
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

       /* $get_name = $imageRequest->file('monImage')->getClientOriginalName();
        $get_ext =$imageRequest->file('monImage')->getClientOriginalExtension();
        $get_justName = pathinfo($get_name, PATHINFO_FILENAME); // ->
        $aleatoir = str::random(3);
        $fileNameToStore = $aleatoir.'_'. time().'.'.$get_ext;

        $val=$imageRequest->monImage->storeAs('public/images', $fileNameToStore);
        Photo::create([
            'img'=>'images/'.$fileNameToStore
        ]);
        
        return 'Upload'."=> ".$val;*/

        $request->validate([
            'monImage' => 'required'
        ]);

        if ($request->hasfile('monImage')){
           $images = $request->file('monImage');
            //dd($images);
           //$ct = count($images);
          // dd($ct);
          //$tb = [];
          foreach($images as $image){
                //return "un image Exite-- ".$image;
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $finaleName = 'ML_'.str::random(3).'_'.time().'.'.$extension;
                $image->storeAs('public/images', $finaleName);
                Photo::create([
                    'img'=>'images/'.$finaleName
                ]);
                //$tb = $image;
                //dd($image);
                echo $finaleName.'<br/>';
            }
            /*for($i=0; $i<$ct; $i++){
               // dd($i);
               echo $i;
            }*/
        }
    }
}
