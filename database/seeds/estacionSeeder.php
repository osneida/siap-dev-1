<?php

use Illuminate\Database\Seeder;
use App\Estacion;

class estacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         estacion::create([
         	'codigo'=>'ES-PG-002',  
         	'nombre'=>'Grupo Emprendedor Gasolinero S.A de C.V',   
         	'descripcion'=>'Política del Sistema Integral de Administración en Petrolíferos',       
         	'id_propietario'=>'1',
         	'id_grupo'=>'1',
         	'nombre_responsable'=>'Osneida Bordones',
         	'email_responsable'=>'responsable@gmail.com',
         	'rfc_estacion'=>'DACG',
         	'nro_estacion'=>'SASISOPA/811',
         	'nroper_cre'=>'521',
         	'calle'=>'nombre de la calle',
         	'colonia'=>'Nombre de la Colonia',
         	'codigo_postal'=>'12345',
         	'estado'=>'Estado',
         	'municipio'=>'Municipio',
         	'entidad_federal'=>'Entidad Federal',
            'logo'=>'logo_1.png',
            'fecha_constitucion'=>'2018-12-15'
         	]); 
    }
}
