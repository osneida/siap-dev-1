<?php
namespace Tests\Feature;

use App\Propietario;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PropietariosModuleTest extends TestCase
{
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
    function it_shows_a_default_message_if_the_propietarios_list_is_empty()
    {
        $this->withoutExceptionHandling(); 
        $this->get('/propietarios')
                ->assertStatus(200)
                ->assertSee('No hay propietarios registrados.');
    }

    /** @test */
    function it_loads_the_new_propietarios_page()
    {
        //  $this->withoutExceptionHandling();
        $this->get('/propietarios/nuevo')
                ->assertStatus(200)
                ->assertSee('Crear Propietario');
    }

    /** @test */
    function it_displays_a_404_error_if_the_propietarios_is_not_found()
    {
        $this->get('/propietarios/999')
                ->assertStatus(404)
                ->assertSee('Página no encontrada');
    }     
}
