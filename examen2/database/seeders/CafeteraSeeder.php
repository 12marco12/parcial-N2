<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CafeteraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array('marca'=>"hyoga",'modelo'=>"seiya",'tipodecafe'=>"iiki",'capacidad'=>"4");
        db::table('cafeterias')->insert($data);
    }
}
