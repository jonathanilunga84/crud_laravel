<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants = Etudiant::orderBy("nom","asc")->paginate(5);
        return view('pages.etudiant', compact("etudiants"));
    }

    public function create(){
        $classes = Classe::all();
        return view("pages.createEtudiant", compact("classes"));
    }

    public function edit(Etudiant $etudiant){
        $classes = Classe::all();
        return view("pages.editEtudiant", compact("etudiant","classes"));
    }

    public function store(Request $request){
        $request->validate([
            "nom"=>"required",
            "postnom"=>"required",
            "classe_id"=>"required"
        ]);
        
        //Etudiant::create($request->all()); //accodition de definir un fillename ds le models Etudiant
        
        Etudiant::create([
            "nom"=>$request->nom,
            "postnom"=>$request->postnom,
            "classe_id"=>$request->classe_id

        ]);
        return back()->with("success", "Etudiant ajouté avec succé");
        //return 'ADD';
    }

    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            "nom"=>"required",
            "postnom"=>"required",
            "classe_id"=>"required"
        ]);

        //Etudiant::create($request->all()); //accodition de definir un fillename ds le models Etudiant
        
        $etudiant->update([
            "nom"=>$request->nom,
            "postnom"=>$request->postnom,
            "classe_id"=>$request->classe_id
        ]);
        return back()->with("success", "Etudiant Mise ajour avec succé");
        //return 'ADD';
    }

    public function delete(Etudiant $etudiant){
        $nom_complet = $etudiant->nom." ". $etudiant->postnom;
        $etudiant->delete();

        return back()->with("successDelete", "L'étudiant '$nom_complet' supprimé avec succès!");
    }
}
