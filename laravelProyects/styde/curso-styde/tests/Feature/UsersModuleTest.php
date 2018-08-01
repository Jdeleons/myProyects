<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
		  ->assertStatus(200)
		  ->assertSee('Usuarios');
    }

	 function it_loads_the_users_details_page()
	 {
		 $this->get('/usuarios/new')
		 ->assertStatus(200)
		 ->assertSee('crear nuevo usuario');
	 }
}
