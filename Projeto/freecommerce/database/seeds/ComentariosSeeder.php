<?php

use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->delete();

        factory('FreeCommerce\Comentario', 10000)->create();
    }
}
