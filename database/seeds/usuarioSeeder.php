<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuario::create(['name'=>'Hermann Benda',  'email'=>'hbenda@siap.com',    'cargo'=>'Gerente',       'password'=>'password']); 
        usuario::create(['name'=>'Berkis Puentes', 'email'=>'bpuentes@siap.com',  'cargo'=>'Jefe de Piso',  'password'=>'password']); 
        usuario::create(['name'=>'Jesus Martinez', 'email'=>'jmartinez@siap.com', 'cargo'=>'Jefe de Piso',  'password'=>'password']); 
        usuario::create(['name'=>'Blanca Conde',   'email'=>'bconde@siap.com',    'cargo'=>'Jefe de Piso',  'password'=>'password']); 
    }
}
