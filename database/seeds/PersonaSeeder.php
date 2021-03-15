<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            //'folio'=>1,
            'nombre'=>'adan',
            'genero'=>'M',
            'apellidoP'=>'piceno',
            'apellidoM'=>'roque',
            'intereses'=>'Musica',
            'user_id'=>1,
        ]);
        DB::table('personas')->insert([
            //'folio'=>2,
            'nombre'=>'crineth',
            'genero'=>'F',
            'apellidoP'=>'fernandez',
            'apellidoM'=>'flores',
            'intereses'=>'Baile',
            'user_id'=>2,
        ]);
        DB::table('personas')->insert([
            //'folio'=>3,
            'nombre'=>'Alex',
            'genero'=>'M',
            'apellidoP'=>'Roque',
            'apellidoM'=>'Sanchez',
            'intereses'=>'Videojuegos',
            'user_id'=>3,
        ]);
    }
}
