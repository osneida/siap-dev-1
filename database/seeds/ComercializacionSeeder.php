<?php

use \App\Comercializacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComercializacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Comercializacion::create([
            'memo' => 'Texto 1',            
            'user' => 'mjorge'
        ]);  
        
         Comercializacion::create([
            'memo' => 'Texto 2',            
            'user' => 'dvergara'             
        ]);  

         Comercializacion::create([
            'memo' => 'Texto 3',
            'user' => 'jvergara'             
        ]);  
   
         factory(Comercializacion::class)->times(3)->create();        
    }
}
