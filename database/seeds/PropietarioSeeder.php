<?php
use \App\Propietario;
use Illuminate\Database\Seeder;

class PropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Propietario::create([
            'codigo' => 'ABCD1234',            
            'nombre' => 'Jenner',
            'apellido_paterno' => 'Vergara',
            'apellido_materno' => 'Pinto',
            'email' => 'jenner@yahoo.com',
            'direccion' => 'Av. Principal Montalban, Urb Juan Pablo II, Caracas',
            'telefono1' => '02124718934',
            'telefono2' => '02123399479',
            'celular1' => '04166183998',
            'celular2' => '04142277516',
            'fecha_baja' => '20181115 20:59:00',             
            'estatus' => 'true'
        ]);  
        
   
         factory(Propietario::class)->times(7)->create();
    }
}

