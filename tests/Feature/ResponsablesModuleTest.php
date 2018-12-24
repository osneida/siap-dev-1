<?php
namespace Tests\Feature;

use App\Responsable;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResponsablesModuleTest extends TestCase
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
    function it_shows_a_default_message_if_the_responsables_list_is_empty()
    {
        $this->withoutExceptionHandling(); 
        $this->get('/responsables')
                ->assertStatus(200)
                ->assertSee('No hay responsables registrados.');
    }

    /** @test */
    function it_loads_the_new_responsables_page()
    {
        //  $this->withoutExceptionHandling();
        $this->get('/responsables/nuevo')
                ->assertStatus(200)
                ->assertSee('Crear Responsable');
    }

    /** @test */
    function it_displays_a_404_error_if_the_responsables_is_not_found()
    {
        $this->get('/responsables/999')
                ->assertStatus(404)
                ->assertSee('Página no encontrada');
    }     
}
