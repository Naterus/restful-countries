<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APIAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function testCreatingAPIToken()
    {

    }
    public function testAccessingAPIWithoutAuthentication()
    {
        $response = $this->get('/api/v1');

        $response->assertStatus(401);
    }
    public function testAccessingAPIWithAuthentication()
    {
        $response = $this->get('/api/v1');

        $response->assertStatus(200);
    }

}
