<?php

namespace Tests\Feature;

use App\User;
use App\Country;

use App\Covid19;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EndPointTest extends TestCase
{

    public function testBaseRoute()
    {


        $this->get('/api/v1', ['Authorization' => 'Bearer ' .  $this->getToken()])
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
    public function testCountriesIndexRoute()
    {

        $this->get('/api/v1/countries/', ['Authorization' => 'Bearer ' . $this->getToken()])
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
    public function testCountriesShowRoute()
    {

        $countries = Country::where('id','<', 6)->get();
        foreach ($countries as $country) {

            $this->get('/api/v1/countries/' . $country->name, ['Authorization' => 'Bearer ' . $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'name',
                        'full_name',
                        'capital',
                        'iso2',
                        'iso3',
                        'covid19' => [
                            'total_case',
                            'total_deaths',
                            'last_updated',
                        ],
                        'current_president' => [
                            'name',
                            'gender',
                            'appointment_start_date',
                            'appointment_end_date',
                            'href' => [
                                'self',
                                'country',
                                'picture'
                            ],
                        ],
                        'currency',
                        'phone_code',
                        'continent',
                        'description',
                        'size',
                        'independence_date',
                        'population',
                        'href' => [
                            'self',
                            'states',
                            'presidents',
                            'flag'
                        ],
                    ]
                ]);

        }

}
    public function testPresidentsIndexRoute()
    {

        $pattern = [
            'name',
            'gender',
            'appointment_start_date',
            'appointment_end_date',
            'href' => [
                'self',
                'country',
                'picture'
            ]
        ];

        $countries = Country::inRandomOrder()->limit(5)->get();

        foreach ($countries as $country) {
            $number_of_presidents = $country->presidents()->count();

            $data = [];
            for ($i=0 ; $i < $number_of_presidents; $i++){
                $data[$i] = $pattern;
            }
            $this->get('/api/v1/countries/' . $country->name . '/presidents', ['Authorization' => 'Bearer ' .  $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure([
                    "data" => $data]);
        }

    }
    public function testPresidentsShowRoute()
    {


        $data = [
            "data" => [
                'name',
                'gender',
                'appointment_start_date',
                'appointment_end_date',
                'href' => [
                    'self',
                    'country',
                    'picture'
                ]
            ]
        ];
        $country = Country::inRandomOrder()->first();
        foreach ($country->presidents as $president) {
            $this->get('/api/v1/countries/' . $country->name . '/presidents/' . $president->name, ['Authorization' => 'Bearer ' .  $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure($data);
        }


    }
    public function testStatesIndexRoute()
    {


        $pattern = [
            'name',
            'iso2',
            'fips_code',
            'population',
            'size',
            'official_language',
            'region',
            'href' => [
                'self',
                'country'
            ]
        ];

        $countries = Country::inRandomOrder()->limit(2)->get();

        foreach ($countries as $country) {
            $number_of_states = $country->states()->count();

            $data = [];
            for ($i=0 ; $i < $number_of_states; $i++){
                $data[$i] = $pattern;
            }
            $this->get('/api/v1/countries/' . $country->name . '/states', ['Authorization' => 'Bearer ' . $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure([
                    "data" => $data
                ]);
        }

    }
    public function testStatesShowRoute()
    {

        $pattern = [
            'name',
            'iso2',
            'fips_code',
            'population',
            'size',
            'official_language',
            'region',
            'href' => [
                'self',
                'country'
            ]
        ];

        $country = Country::inRandomOrder()->first();

        foreach ($country->states as $state) {

            $this->get('/api/v1/countries/' . $country->name . '/states/'.$state->name, ['Authorization' => 'Bearer ' .  $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure([
                    "data" => $pattern
                ]);
        }
    }
    public function testCovid19IndexRoute()
    {
        $pattern = [
            "country_name",
            "total_case",
            "total_deaths",
            "last_updated",
            "href" => [
                "country"
            ]
        ];
        $data = [];
        for ($i=0 ; $i < 10; $i++){
            $data[$i] = $pattern;
        }
        $this->get('/api/v1/covid19', ['Authorization' => 'Bearer ' .  $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => $data,
                "links"=>[
                    "first",
                    "last",
                    "prev",
                    "next"
                ],
                "meta" => [
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

    private function getToken()
    {
        $user = factory(User::class)->create();
        $token = $user->createToken('authToken')->plainTextToken;
        return $token;
    }

}

