<?php

use Illuminate\Database\Seeder;
use App\Flavor;

class FlavorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flavor::create(['name' => 'Abacaxi']);
        Flavor::create(['name' => 'Caju']);
        Flavor::create(['name' => 'Manga']);
        Flavor::create(['name' => 'Goiaba']);
        Flavor::create(['name' => 'Uva']);
        Flavor::create(['name' => 'Pera']);
        Flavor::create(['name' => 'Pessego']);
        Flavor::create(['name' => 'Graviola']);
        Flavor::create(['name' => 'Laranja']);
        Flavor::create(['name' => 'Umbu']);
        Flavor::create(['name' => 'Coco']);
        Flavor::create(['name' => 'Banana']);
        Flavor::create(['name' => 'Melancia']);
        Flavor::create(['name' => 'Melão']);
        Flavor::create(['name' => 'Jaca']);
        Flavor::create(['name' => 'Bocaiuva']);
        Flavor::create(['name' => 'Ameixa']);
        Flavor::create(['name' => 'Tamarindo']);
        Flavor::create(['name' => 'Jabuticaba']);
        Flavor::create(['name' => 'Limão']);
        Flavor::create(['name' => 'Framboesa']);
        Flavor::create(['name' => 'Amora']);
        Flavor::create(['name' => 'Quiwi']);
        Flavor::create(['name' => 'Pequi']);
        Flavor::create(['name' => 'Assai']);
        Flavor::create(['name' => 'Guaraná']);
        Flavor::create(['name' => 'Cajá']);
    }
}

