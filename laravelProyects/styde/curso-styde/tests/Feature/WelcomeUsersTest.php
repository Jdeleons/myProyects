<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test*/
     function it_loads_the_users_with_nickname()
    {
        $this->get('/saludo/julio/jd')
		  ->assertStatus(200)
		  ->assertSee('Bienvenido julio, tu apodo es jd');
    }

	 function it_loads_the_users_without_nickname()
   {
		 $this->get('/saludo/julio')
		 ->assertStatus(200)
		 ->assertSee('Bienvenido julio, no tienes apodo:');
   }
}
