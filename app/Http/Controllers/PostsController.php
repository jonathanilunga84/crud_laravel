<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('pages.About');
   }

   public function contact()
   {
       return view('pages.contact');
   }

   public function store(ContactRequest $contactRequest){
        $data = $contactRequest->input('nom').' -- '.$contactRequest->input('msgs');
        return 'ok '.$data ;//view('');
   }
}
