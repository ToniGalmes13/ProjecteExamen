<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertaralumnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('alumnos')->truncate();

        DB::table('alumnos')->insert([
            'nombre' => 'Toni',
            'apellidos' => 'Galmes',
            'dni' => '41522030S',
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'Pere',
            'apellidos' => 'Galmes',
            'dni' => '41522030T',
        ]);
        DB::table('alumnos')->insert([
            'nombre' => 'Xavi',
            'apellidos' => 'Galmes',
            'dni' => '41522030U',
        ]);
    }
}
