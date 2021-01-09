<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CountryWithQueryStringTest extends TestCase
{

    public function testApiBaseUrl()
    {
        $response = $this->get('/api/v1');

        $response->assertStatus(200);
    }
}
