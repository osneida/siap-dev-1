<?php
use \App\Responsable;
use Illuminate\Database\Seeder;

class ResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Responsable::create([
            'codigo' => 'ABCD1234',            
            'nombre' => 'Jenner',
            'apellido_paterno' => 'Vergara',
            'apellido_materno' => 'Pinto',
            'email' => 'jenner@yahoo.com',
            'estacion' => 'Estación 123',
            'fecha_baja' => '20191126 12:29:00',
            'fecha_primer_envio_correo' => '20181126 10:29:00',
            'fecha_ultimo_envio_correo' => '20181126 12:29:00',             
            'estatus' => 'true'
        ]);  

         factory(Responsable::class)->times(7)->create();
    }
}
