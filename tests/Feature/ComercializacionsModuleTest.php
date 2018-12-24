<?php

namespace Tests\Feature;

use App\Comercializacion;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComercializacionsModuleTest extends TestCase
{
    use RefreshDatabase;    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        //$this->withoutExceptionHandling(); 
        $this->get('/comercializacion')
                ->assertStatus(200)
                ->assertSee('No hay usuarios registrados.');
    }

    /** @test */
    function it_loads_the_new_users_page2()
    {
        $this->get('/comercializacion/nuevo')
                ->assertStatus(200)
                ->assertSee('Crear Texto');
    }

    /** @test */
    function it_displays_a_404_error_if_the_users_is_not_found()
    {
        $this->get('/comercializacion/999')
                ->assertStatus(404)
                ->assertSee('Página no encontrada');
    }  
    
    /** @test */
    function it_creates_a_new_user()
    {
        $this->withoutExceptionHandling();
        $this->post('/comercializacion/',[
            'memo' => 'TextoX',
            'user' => 'jvergara'
        ])->assertRedirect(route('comercializacions.index'));

        $this->assertCredentials([
            'memo' => 'Texto x',
            'user' => 'jvergara',
        ]);
    }
    
    /** @test */
    /*function it_creates_a_new_user()
    {
        $this->withoutExceptionHandling();
        $this->post('/usuarios/',[
            'name' => 'JennerV',
            'email' => 'Jenner@Vergara.com',
            'password' => '123456'
        ])->assertRedirect(route('users.index'));

        //$this->assertDatabaseHas('users', [ // para modulos con post se usa el databasehas
        $this->assertCredentials([ //con Credentials no hace falta ni el nombre de la tabla ni la contrasena encriptada
            'name' => 'JennerV',
            'email' => 'Jenner@Vergara.com',
            //'password' => bcrypt('123456')
            'password' => '123456',
        ]);
    } */
     

    /** @test */
    function the_name_is_required()
    {
        //$this->withoutExceptionHandling();
        $this->from('comercializacion/nuevo')
                ->post('/comercializacion/',[ //se coloca previamente el from para evitar problemas con las redirecciones al momento de validar un campo
                    'memo' => '',
                    'user' => 'jvergara'
        ])->assertRedirect('comercializacion/nuevo')
        ->assertSessionHasErrors(['memo' => 'El campo de Texto es obligatorio']);  //para el manejo de errores que no escriba el nombre        
        $this->assertEquals(0,Comercializacion::count()); 
    }
}