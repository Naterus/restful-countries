<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\User;
use Tests\TestCase;

class EndPointWithQueryTest extends TestCase
{
    private function getToken()
    {
        $user = factory(User::class)->create();
        $token = $user->createToken('authToken')->plainTextToken;
        return $token;
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCountryByContinentRoute()
    {
        $this->get('/api/v1/countries?continent=Africa', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data",
                "links"=>[
                    "first",
                    "last",
                    "prev",
                    "next"
                ],
                'meta'=>[
                    "current_page",
                    "from",
                    "last_page",
                    "path",
                    "per_page",
                    "to",
                    "total"
                ]
            ]);
    }
    public function testCountryByPopulationRoute()
    {
        $pattern = [
            "data",
            "links"=>[
                "first",
                "last",
                "prev",
                "next"
            ],
            'meta'=>[
                "current_page",
                "from",
                "last_page",
                "path",
                "per_page",
                "to",
                "total"
            ]
        ];
        $this->get('/api/v1/countries?population_from=1000', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure($pattern);
        $this->get('/api/v1/countries?population_to=10000', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure($pattern);
        $this->get('/api/v1/countries?population_from=1000&population_to=10000', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure($pattern);
    }
//    public function testCountryBySizeRoute()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
//    public function testCountryByISO2Route()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
//    public function testCountryByISO3Route()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
//    public function testCountryByCodeRoute()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
//    public function testCountryByFetchTypeRoute()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
}
