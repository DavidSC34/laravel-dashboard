<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    static $categorias =[
       "Boxeadoras",
       "Boxeadores",
       "WBC Board",
       "Embajadas",
       "Gimnasios",
       "Gobierno",
       "Periodistas",
       "WBC Champion",
       "Fan",
       "Manager",
       "Entrenador",
       "Promotor",
       "Jueces",
       "Referis",
       "Supervisores",
       "Varios"
    ];

    public function run(): void
    {
        //
        foreach (self::$categorias as $categoria) {
            DB::table('categorias')->insert([
                'nombre' => $categoria,
                'created_at'=>date("Y-m-d H:i:s"),               
                'updated_at'=>date("Y-m-d H:i:s"),               
            ]);
        }
    }
}
