<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APIAuthenticationTest extends TestCase
{
    use RefreshDatabase;
    public function testCreatingUser(){
        $user = factory(\App\User::class)->create();
    }
    public function testCreatingAPIToken()
    {
//        $user = factory(\App\User::class)->create();
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
