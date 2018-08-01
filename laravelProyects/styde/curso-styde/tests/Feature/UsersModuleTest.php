<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_shows_the_users_list()
    {
        $this->get('/usuarios')
		  ->assertStatus(200)
		  ->assertSee('Usuarios');
    }
	 function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios?empty')
		  ->assertStatus(200)
		  ->assertSee('No hay usuarios registrados');

    }

	 function it_loads_the_users_details_page()
	 {
		 $this->get('/usuarios/new')
		 ->assertStatus(200)
		 ->assertSee('crear nuevo usuario');
	 }
}
