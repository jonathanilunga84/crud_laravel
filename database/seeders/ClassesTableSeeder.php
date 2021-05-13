<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("classes")->insert([
           ["libelle"=>"6éme"],
           ["libelle"=>"5éme"],
           ["libelle"=>"4éme"],
           ["libelle"=>"3éme"],
           ["libelle"=>"Seconde"],
           ["libelle"=>"Première"],
           ["libelle"=>"Terminale"],
       ]);
    }
}
