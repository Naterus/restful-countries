<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\User;
use App\Country;
use App\Helpers\Helper;
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
    public function testCountryBySizeRoute()
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
        $this->get('/api/v1/countries?size_from=1000', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure($pattern);
        $this->get('/api/v1/countries?size_to=10000', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure($pattern);
        $this->get('/api/v1/countries?size_from=1000&size_to=10000', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure($pattern);
    }
    public function testCountryByISO2Route()
    {
        $pattern = [
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
        ];
        $countries = Country::inRandomOrder()->limit(2)->get();
        foreach ($countries as $country){
            $this->get('/api/v1/countries?iso2='.$country->iso2, ['Authorization' => 'Bearer ' . $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure($pattern);
        }


    }
    public function testCountryByISO3Route()
    {
        $pattern = [
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
        ];
        $countries = Country::inRandomOrder()->limit(2)->get();
        foreach ($countries as $country){
            $this->get('/api/v1/countries?iso3='.$country->iso3, ['Authorization' => 'Bearer ' . $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure($pattern);
        }


    }
    public function testCountryByCodeRoute()
    {
        $pattern = [
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
        ];
        $countries = Country::inRandomOrder()->limit(2)->get();
        foreach ($countries as $country){
            $this->get('/api/v1/countries?code='.$country->code, ['Authorization' => 'Bearer ' . $this->getToken()])
                ->assertStatus(200)
                ->assertJsonStructure($pattern);
        }
    }
    public function testCountryByFetchTypeRoute()
    {
        $pattern= [
            "name",
            "iso2",
            "href" => [
                "self",
                "country"
            ]
        ];
        $country = Country::inRandomOrder()->first();

        $number_of_states = $country->states()->count();

        $data = Helper::instance()->duplicate($pattern,$number_of_states);

        $this->get('/api/v1/countries/'.$country->name.'/states?fetch_type=slim', ['Authorization' => 'Bearer ' . $this->getToken()])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => $data
            ]);

    }
}
