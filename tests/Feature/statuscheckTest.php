<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class statuscheckTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterStatusCheck()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testLoginStatusCheck()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testAboutStatusCheck()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
