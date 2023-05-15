<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FederacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    static $federaciones =[
        "NABF",
        "ABU",
        "ABCO",
        "BBB of C",
        "CABOFE",
        "FECARBOX",
        "CISBB",
        "EBU",
        "OPBF",
        "FESUBOX",
        "varias",
       
     ];
    public function run(): void
    {
        //
        foreach (self::$federaciones as $federacion) {
            DB::table('federacions')->insert([
                'nombre' => $federacion,
                'created_at'=>date("Y-m-d H:i:s"),               
                'updated_at'=>date("Y-m-d H:i:s"),               
            ]);
        }
    }
}
