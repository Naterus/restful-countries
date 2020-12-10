const countriesResponse =
    { "data":
        [
            {
                "name": "Nigeria",
                "full_name": "Federal Republic of Nigeria",
                "capital": "Abuja",
                "iso2": "NG",
                "iso3": "NGA",
                "covid19": {
                    "total_case": "67,412",
                    "total_deaths": "1,173",
                    "last_updated": "2020-11-30T19:36:49.000000Z"
                },
                "current_president": {
                    "name": "Muhammadu Buhari",
                    "gender": "Male",
                    "appointment_start_date": "2015-05-29",
                    "appointment_end_date": null,
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Nigeria/presidents/Muhammadu-Buhari",
                        "country": "https://restfulcountries.com/api/v1/countries/Nigeria",
                        "picture": "https://restfulcountries.com/storage/images/presidents/muhammadu-buharipxpjw98lcj.jpg"
                    }
                },
                "currency": "NGN",
                "phone_code": "234",
                "continent": "Africa",
                "description": "Nigeria is the most populous country in Africa and the seventh most populous country in the world, with an estimated 206 million inhabitants as of late 2019.  The name Nigeria was taken from the Niger River running through the country.",
                "size": "923,768 km²",
                "independence_date": "1960-10-01",
                "population": "208,355,710",
                "href": {
                    "self": "https://restfulcountries.com/api/v1/countries/Nigeria",
                    "states": "https://restfulcountries.com/api/v1/countries/Nigeria/states",
                    "presidents": "https://restfulcountries.com/api/v1/countries/Nigeria/presidents",
                    "flag": "https://restfulcountries.com/storage/images/flags/Nigeria.png"
                }
            }
        ] ,
        "links": {
            "first": "https://restfulcountries.com/api/v1/countries?page=1",
            "last": "https://restfulcountries.com/api/v1/countries?page=1",
            "prev": null,
            "next": null
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 1,
            "path": "https://restfulcountries.com/api/v1/countries",
            "per_page": 1,
            "to": 1,
            "total": 1
        }
    };

const covid19Response =
    {
        "data": [
            {
                "country_name": "Afghanistan",
                "total_case": "46,498",
                "total_deaths": "1,774",
                "last_updated": "2020-12-01T15:35:51.000000Z",
                "href": {
                    "country": "https://restfulcountries.com/api/v1/countries/Afghanistan"
                }
            },
        ],
        "links": {
            "first": "https://restfulcountries.com/api/v1/covid19?page=1",
            "last": "https://restfulcountries.com/api/v1/covid19?page=1",
            "prev": null,
            "next": null
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 1,
            "path": "https://restfulcountries.com/api/v1/covid19",
            "per_page": 1,
            "to": 1,
            "total": 1
        }
    };

const statesResponse = {
    "data": [
        {
            "name": "Adamawa",
            "iso2": "AD",
            "fips_code": "35",
            "population": "5,527,800",
            "size": null,
            "official_language": null,
            "region": "North East",
            "href": {
                "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Adamawa",
                "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
            }
        },

        {
            "name": "Akwa Ibom",
            "iso2": "AK",
            "fips_code": "21",
            "population": "5,482,200",
            "size": null,
            "official_language": null,
            "region": "South South",
            "href": {
                "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Akwa%20Ibom",
                "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
            }

        }
    ]
};

const presidentsResponse =
    {
        "data": [
            {
                "name": "Ram Nath Kovind",
                "gender": "Male",
                "appointment_start_date": "2017-07-20",
                "appointment_end_date": null,
                "picture": "https://restfulcountries.com/storage/images/presidents/ram-nath-kovindfy6d2usmhy.jpg",
                "href": {
                    "self": "https://restfulcountries.com/api/v1/countries/India/presidents/Ram-Nath-Kovind",
                    "country": "https://restfulcountries.com/api/v1/countries/India"
                }
            }
        ]
    };

const countriesSlim =
    {
        "data": [
            {
                "name": "Afghanistan",
                "phone_code": "93",
                "href": {
                    "self": "https://restfulcountries.com/api/v1/countries/Afghanistan",
                    "flag": "https://restfulcountries.com/storage/images/flags/Afghanistan.png"
                }
            },
            {
                "name": "Albania",
                "phone_code": "355",
                "href": {
                    "self": "https://restfulcountries.com/api/v1/countries/Albania",
                    "flag": "https://restfulcountries.com/storage/images/flags/Albania.png"
                }
            },
        ],
        "links": {
            "first": "https://restfulcountries.com/api/v1/countries?page=1",
            "last": "https://restfulcountries.com/api/v1/countries?page=1",
            "prev": null,
            "next": null
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 1,
            "path": "https://restfulcountries.com/api/v1/countries",
            "per_page": 2,
            "to": 2,
            "total": 2
        }
    };

const statesSlim = {
    "data" : [
        {
            "name": "Al Jazirah",
            "iso2": "GZ",
            "href": {
                "self": "https://restfulcountries.com/api/v1/countries/Sudan/states/Al%20Jazirah",
                "country": "https://restfulcountries.com/api/v1/countries/Sudan"
            }
        },
        {
            "name": "Al Qadarif",
            "iso2": "GD",
            "href": {
                "self": "https://restfulcountries.com/api/v1/countries/Sudan/states/Al%20Qadarif",
                "country": "https://restfulcountries.com/api/v1/countries/Sudan"
            }
        }
    ]
}
const countriesName={"data":{"name":"Nigeria","full_name":"Federal Republic of Nigeria","capital":"Abuja","iso2":"NG","iso3":"NGA","covid19":{"total_case":"69,645","total_deaths":"1,181","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":{"name":"Muhammadu Buhari","gender":"Male","appointment_start_date":"2015-05-29","appointment_end_date":null,"href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria\/presidents\/Muhammadu-Buhari","country":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria","picture":"https:\/\/restfulcountries.com\/storage\/images\/presidents\/muhammadu-buharipxpjw98lcj.jpg"}},"currency":"NGN","phone_code":"234","continent":"Africa","description":"Nigeria is the most populous country in Africa and the seventh most populous country in the world, with an estimated 206 million inhabitants as of late 2019.  The name Nigeria was taken from the Niger River running through the country.","size":"923,768 km\u00b2","independence_date":"1960-10-01","population":"208,355,710","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Nigeria.png"}}}
const countriesContinent ={"data":[{"name":"Algeria","full_name":"Democratic Republic of Algeria","capital":"Algiers","iso2":"DZ","iso3":"DZA","covid19":{"total_case":"88,825","total_deaths":"2,527","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"DZD","phone_code":"213","continent":"Africa","description":null,"size":"2,381,741 km\u00b2","independence_date":null,"population":"44,190,030","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Algeria","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Algeria\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Algeria\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Algeria.png"}},{"name":"Angola","full_name":"Republic of Angola","capital":"Luanda","iso2":"AO","iso3":"AGO","covid19":{"total_case":"15,648","total_deaths":"354","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"AOA","phone_code":"244","continent":"Africa","description":"1246620","size":"1,246,620 km\u00b2","independence_date":null,"population":"33,312,843","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Angola","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Angola\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Angola\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Angola.png"}},{"name":"Benin","full_name":"Republic of Benin","capital":"Porto-Novo","iso2":"BJ","iso3":"BEN","covid19":{"total_case":"3,073","total_deaths":"44","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XOF","phone_code":"229","continent":"Africa","description":null,"size":"114,763 km\u00b2","independence_date":null,"population":"12,260,889","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Benin","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Benin\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Benin\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Benin.png"}},{"name":"Botswana","full_name":"Republic of Botswana","capital":"Gaborone","iso2":"BW","iso3":"BWA","covid19":{"total_case":"11,531","total_deaths":"34","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"BWP","phone_code":"267","continent":"Africa","description":null,"size":"581,730 km\u00b2","independence_date":null,"population":"2,372,028","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Botswana","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Botswana\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Botswana\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Botswana.png"}},{"name":"Burkina Faso","full_name":"Burkina Faso","capital":"Ouagadougou","iso2":"BF","iso3":"BFA","covid19":{"total_case":"3,315","total_deaths":"68","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XOF","phone_code":"226","continent":"Africa","description":null,"size":"274,200 km\u00b2","independence_date":null,"population":"21,152,326","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Burkina%20Faso","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Burkina%20Faso\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Burkina%20Faso\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Burkina-Faso.png"}},{"name":"Burundi","full_name":"Republic of Burundi","capital":"Bujumbura","iso2":"BI","iso3":"BDI","covid19":{"total_case":"716","total_deaths":"1","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"BIF","phone_code":"257","continent":"Africa","description":null,"size":"27,834 km\u00b2","independence_date":null,"population":"12,045,230","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Burundi","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Burundi\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Burundi\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Burundi.png"}},{"name":"Cameroon","full_name":"Republic of Cameroon","capital":"Yaounde","iso2":"CM","iso3":"CMR","covid19":{"total_case":"24,752","total_deaths":"443","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XAF","phone_code":"237","continent":"Africa","description":null,"size":"475,442 km\u00b2","independence_date":null,"population":"26,831,876","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Cameroon","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Cameroon\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Cameroon\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Cameroon.png"}},{"name":"Central African Republic","full_name":"Central African Republic","capital":"Bangui","iso2":"CF","iso3":"CAF","covid19":{"total_case":"4,927","total_deaths":"63","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XAF","phone_code":"236","continent":"Africa","description":null,"size":"622,984 km\u00b2","independence_date":null,"population":"4,865,703","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Central%20African%20Republic","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Central%20African%20Republic\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Central%20African%20Republic\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Central-African-Republic.png"}},{"name":"Chad","full_name":"Republic of Chad","capital":"N'Djamena","iso2":"TD","iso3":"TCD","covid19":{"total_case":"1,728","total_deaths":"102","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XAF","phone_code":"235","continent":"Africa","description":null,"size":"1,284,000 km\u00b2","independence_date":null,"population":"16,631,098","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Chad","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Chad\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Chad\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Chad.png"}},{"name":"Comoros","full_name":"Union of the Comoros","capital":"Moroni","iso2":"KM","iso3":"COM","covid19":{"total_case":"616","total_deaths":"7","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"KMF","phone_code":"269","continent":"Africa","description":null,"size":"1,861 km\u00b2","independence_date":null,"population":"877,576","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Comoros","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Comoros\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Comoros\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Comoros.png"}},{"name":"Congo","full_name":"Democratic Republic of the Congo","capital":"Brazzaville","iso2":"CG","iso3":"COG","covid19":{"total_case":"5,774","total_deaths":"94","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XAF","phone_code":"242","continent":"Africa","description":null,"size":"2,345,410 km\u00b2","independence_date":null,"population":"5,576,861","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Congo","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Congo\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Congo\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Congo.png"}},{"name":"Cote D'Ivoire","full_name":"Republic of C\u00f4te d'Ivoire","capital":"Yamoussoukro","iso2":"CI","iso3":"CIV","covid19":{"total_case":"0","total_deaths":"0","last_updated":"2020-12-01T15:19:53.000000Z"},"current_president":null,"currency":"XOF","phone_code":"225","continent":"Africa","description":null,"size":"322,463 km\u00b2","independence_date":null,"population":"26,661,011","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Cote%20D%27Ivoire","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Cote%20D%27Ivoire\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Cote%20D%27Ivoire\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Cote-d-Ivoire.png"}},{"name":"Djibouti","full_name":"Republic of Djibouti","capital":"Djibouti","iso2":"DJ","iso3":"DJI","covid19":{"total_case":"5,708","total_deaths":"61","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"DJF","phone_code":"253","continent":"Africa","description":null,"size":"23,200 km\u00b2","independence_date":null,"population":"994,124","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Djibouti","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Djibouti\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Djibouti\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Djibouti.png"}},{"name":"Egypt","full_name":"The Arab Republic of Egypt","capital":"Cairo","iso2":"EG","iso3":"EGY","covid19":{"total_case":"118,847","total_deaths":"6,790","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"EGP","phone_code":"20","continent":"Africa","description":null,"size":"1,002,450 km\u00b2","independence_date":null,"population":"103,162,538","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Egypt","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Egypt\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Egypt\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Egypt.png"}},{"name":"Equatorial Guinea","full_name":"Republic of Equatorial Guinea","capital":"Malabo","iso2":"GQ","iso3":"GNQ","covid19":{"total_case":"5,166","total_deaths":"85","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XAF","phone_code":"240","continent":"Africa","description":null,"size":"28,050 km\u00b2","independence_date":null,"population":"1,423,195","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Equatorial%20Guinea","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Equatorial%20Guinea\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Equatorial%20Guinea\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Equatorial-Guinea.png"}},{"name":"Eritrea","full_name":"The State of Eritrea","capital":"Asmara","iso2":"ER","iso3":"ERI","covid19":{"total_case":"649","total_deaths":"0","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"ERN","phone_code":"291","continent":"Africa","description":null,"size":"117,600 km\u00b2","independence_date":null,"population":"3,567,323","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Eritrea","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Eritrea\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Eritrea\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Eritrea.png"}},{"name":"Ethiopia","full_name":"Federal Democratic Republic of Ethiopia","capital":"Addis Ababa","iso2":"ET","iso3":"ETH","covid19":{"total_case":"113,735","total_deaths":"1,755","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"ETB","phone_code":"251","continent":"Africa","description":null,"size":"1,127,127 km\u00b2","independence_date":null,"population":"116,197,488","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ethiopia","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ethiopia\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ethiopia\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Ethiopia.png"}},{"name":"Gabon","full_name":"The Gabonese Republic","capital":"Libreville","iso2":"GA","iso3":"GAB","covid19":{"total_case":"9,278","total_deaths":"60","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XAF","phone_code":"241","continent":"Africa","description":null,"size":"267,667 km\u00b2","independence_date":null,"population":"2,248,450","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Gabon","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Gabon\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Gabon\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Gabon.png"}},{"name":"Gambia","full_name":"The Republic of The Gambia","capital":"Banjul","iso2":"GM","iso3":"GMB","covid19":{"total_case":"3,772","total_deaths":"123","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"GMD","phone_code":"220","continent":"Africa","description":null,"size":"11,295 km\u00b2","independence_date":null,"population":"2,446,240","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Gambia","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Gambia\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Gambia\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Gambia.png"}},{"name":"Ghana","full_name":"Republic of Ghana","capital":"Accra","iso2":"GH","iso3":"GHA","covid19":{"total_case":"52,274","total_deaths":"325","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":{"name":"Nana Akufo-Addo","gender":"Male","appointment_start_date":"2017-01-07","appointment_end_date":null,"href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ghana\/presidents\/Nana-Akufo-Addo","country":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ghana","picture":"https:\/\/restfulcountries.com\/storage\/images\/presidents\/nana-akufo-addoxq8mkf7jif.jpg"}},"currency":"GHS","phone_code":"233","continent":"Africa","description":null,"size":"238,535 km\u00b2","independence_date":null,"population":"31,352,348","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ghana","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ghana\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Ghana\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Ghana.png"}},{"name":"Guinea","full_name":"The Republic of Guinea","capital":"Conakry","iso2":"GN","iso3":"GIN","covid19":{"total_case":"13,246","total_deaths":"77","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"GNF","phone_code":"224","continent":"Africa","description":null,"size":"245,857 km\u00b2","independence_date":null,"population":"13,287,738","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Guinea","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Guinea\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Guinea\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Guinea.png"}},{"name":"Guinea-Bissau","full_name":"Guinea-Bissau","capital":"Bissau","iso2":"GW","iso3":"GNB","covid19":{"total_case":"2,441","total_deaths":"44","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XOF","phone_code":"245","continent":"Africa","description":null,"size":"36,125 km\u00b2","independence_date":null,"population":"1,988,124","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Guinea-Bissau","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Guinea-Bissau\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Guinea-Bissau\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Guinea-Bissau.png"}},{"name":"Kenya","full_name":"The Republic of Kenya","capital":"Nairobi","iso2":"KE","iso3":"KEN","covid19":{"total_case":"88,579","total_deaths":"1,531","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"KES","phone_code":"254","continent":"Africa","description":null,"size":"580,367 km\u00b2","independence_date":null,"population":"54,282,617","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Kenya","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Kenya\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Kenya\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Kenya.png"}},{"name":"Liberia","full_name":"The Republic of Liberia","capital":"Monrovia","iso2":"LR","iso3":"LBR","covid19":{"total_case":"1,676","total_deaths":"83","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"LRD","phone_code":"231","continent":"Africa","description":null,"size":"111,369 km\u00b2","independence_date":null,"population":"5,109,227","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Liberia","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Liberia\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Liberia\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Liberia.png"}},{"name":"Libya","full_name":"Great Socialist People's Libyan Arab Jamahiriya","capital":"Tripolis","iso2":"LY","iso3":"LBY","covid19":{"total_case":"87,097","total_deaths":"1,243","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"LYD","phone_code":"218","continent":"Africa","description":null,"size":"1,760,000 km\u00b2","independence_date":null,"population":"6,911,205","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Libya","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Libya\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Libya\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Libya.png"}},{"name":"Madagascar","full_name":"The Republic of Madagascar","capital":"Antananarivo","iso2":"MG","iso3":"MDG","covid19":{"total_case":"17,473","total_deaths":"255","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"MGA","phone_code":"261","continent":"Africa","description":null,"size":"587,041 km\u00b2","independence_date":null,"population":"28,000,775","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Madagascar","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Madagascar\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Madagascar\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Madagascar.png"}},{"name":"Malawi","full_name":"Republic of Malawi","capital":"Lilongwe","iso2":"MW","iso3":"MWI","covid19":{"total_case":"6,051","total_deaths":"185","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"MWK","phone_code":"265","continent":"Africa","description":null,"size":"118,484 km\u00b2","independence_date":null,"population":"19,345,092","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Malawi","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Malawi\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Malawi\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Malawi.png"}},{"name":"Mali","full_name":"Republic of Mali","capital":"Bamako","iso2":"ML","iso3":"MLI","covid19":{"total_case":"5,290","total_deaths":"175","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XOF","phone_code":"223","continent":"Africa","description":null,"size":"1,240,000 km\u00b2","independence_date":null,"population":"20,505,871","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mali","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mali\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mali\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Mali.png"}},{"name":"Mauritania","full_name":"Islamic Republic of Mauritania","capital":"Nouakchott","iso2":"MR","iso3":"MRT","covid19":{"total_case":"9,516","total_deaths":"188","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"MRO","phone_code":"222","continent":"Africa","description":null,"size":"1,030,700 km\u00b2","independence_date":null,"population":"4,702,891","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mauritania","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mauritania\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mauritania\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Mauritania.png"}},{"name":"Mauritius","full_name":"The Republic of Mauritius","capital":"Port Louis","iso2":"MU","iso3":"MUS","covid19":{"total_case":"505","total_deaths":"10","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"MUR","phone_code":"230","continent":"Africa","description":null,"size":"2,040 km\u00b2","independence_date":null,"population":"1,272,654","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mauritius","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mauritius\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mauritius\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Mauritius.png"}},{"name":"Morocco","full_name":"Kingdom of Morocco","capital":"Rabat","iso2":"MA","iso3":"MAR","covid19":{"total_case":"381,188","total_deaths":"6,320","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"MAD","phone_code":"212","continent":"Africa","description":null,"size":"446,550 km\u00b2","independence_date":null,"population":"37,097,014","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Morocco","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Morocco\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Morocco\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Morocco.png"}},{"name":"Mozambique","full_name":"Republic of Mozambique","capital":"Maputo","iso2":"MZ","iso3":"MOZ","covid19":{"total_case":"16,326","total_deaths":"136","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"MZN","phone_code":"258","continent":"Africa","description":null,"size":"801,590 km\u00b2","independence_date":null,"population":"31,637,928","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mozambique","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mozambique\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Mozambique\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Mozambique.png"}},{"name":"Namibia","full_name":"Republic of Namibia","capital":"Windhoek","iso2":"NA","iso3":"NAM","covid19":{"total_case":"15,219","total_deaths":"153","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"NAD","phone_code":"264","continent":"Africa","description":null,"size":"824,292 km\u00b2","independence_date":null,"population":"2,560,702","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Namibia","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Namibia\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Namibia\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Namibia.png"}},{"name":"Niger","full_name":"Republic of Niger","capital":"Niamey","iso2":"NE","iso3":"NER","covid19":{"total_case":"1,789","total_deaths":"77","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XOF","phone_code":"227","continent":"Africa","description":null,"size":"1,270,000 km\u00b2","independence_date":null,"population":"24,594,403","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Niger","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Niger\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Niger\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Niger.png"}},{"name":"Nigeria","full_name":"Federal Republic of Nigeria","capital":"Abuja","iso2":"NG","iso3":"NGA","covid19":{"total_case":"69,645","total_deaths":"1,181","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":{"name":"Muhammadu Buhari","gender":"Male","appointment_start_date":"2015-05-29","appointment_end_date":null,"href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria\/presidents\/Muhammadu-Buhari","country":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria","picture":"https:\/\/restfulcountries.com\/storage\/images\/presidents\/muhammadu-buharipxpjw98lcj.jpg"}},"currency":"NGN","phone_code":"234","continent":"Africa","description":"Nigeria is the most populous country in Africa and the seventh most populous country in the world, with an estimated 206 million inhabitants as of late 2019.  The name Nigeria was taken from the Niger River running through the country.","size":"923,768 km\u00b2","independence_date":"1960-10-01","population":"208,355,710","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Nigeria\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Nigeria.png"}},{"name":"Rwanda","full_name":"The Republic of Rwanda","capital":"Kigali","iso2":"RW","iso3":"RWA","covid19":{"total_case":"6,191","total_deaths":"51","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"RWF","phone_code":"250","continent":"Africa","description":null,"size":"26,338 km\u00b2","independence_date":null,"population":"13,091,980","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Rwanda","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Rwanda\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Rwanda\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Rwanda.png"}},{"name":"Sao Tome and Principe","full_name":"Democratic Republic of S\u00e3o Tom\u00e9 and Pr\u00edncipe","capital":"Sao Tome","iso2":"ST","iso3":"STP","covid19":{"total_case":"1,002","total_deaths":"17","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"STD","phone_code":"239","continent":"Africa","description":null,"size":"1,001 km\u00b2","independence_date":null,"population":"220,914","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sao%20Tome%20and%20Principe","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sao%20Tome%20and%20Principe\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sao%20Tome%20and%20Principe\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Sao-Tome-and-Principe.png"}},{"name":"Senegal","full_name":"Republic of Senegal","capital":"Dakar","iso2":"SN","iso3":"SEN","covid19":{"total_case":"16,553","total_deaths":"340","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XOF","phone_code":"221","continent":"Africa","description":null,"size":"196,722 km\u00b2","independence_date":null,"population":"16,936,487","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Senegal","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Senegal\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Senegal\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Senegal.png"}},{"name":"Seychelles","full_name":"Republic of Seychelles","capital":"Victoria","iso2":"SC","iso3":"SYC","covid19":{"total_case":"182","total_deaths":"0","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"SCR","phone_code":"248","continent":"Africa","description":null,"size":"458 km\u00b2","independence_date":null,"population":"98,605","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Seychelles","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Seychelles\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Seychelles\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Seychelles.png"}},{"name":"Sierra Leone","full_name":"Republic of Sierra Leone","capital":"Freetown","iso2":"SL","iso3":"SLE","covid19":{"total_case":"2,428","total_deaths":"74","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"SLL","phone_code":"232","continent":"Africa","description":null,"size":"71,740 km\u00b2","independence_date":null,"population":"8,047,131","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sierra%20Leone","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sierra%20Leone\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sierra%20Leone\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Sierra-Leone.png"}},{"name":"Somalia","full_name":"Federal Republic of Somalia","capital":"Mogadishu","iso2":"SO","iso3":"SOM","covid19":{"total_case":"4,579","total_deaths":"121","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"SOS","phone_code":"252","continent":"Africa","description":null,"size":"637,657 km\u00b2","independence_date":null,"population":"16,087,259","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Somalia","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Somalia\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Somalia\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Somalia.png"}},{"name":"South Africa","full_name":"Republic of South Africa","capital":"Pretoria","iso2":"ZA","iso3":"ZAF","covid19":{"total_case":"817,878","total_deaths":"22,249","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"ZAR","phone_code":"27","continent":"Africa","description":null,"size":"12,199,912 km\u00b2","independence_date":null,"population":"59,628,390","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/South%20Africa","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/South%20Africa\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/South%20Africa\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/South-Africa.png"}},{"name":"South Sudan","full_name":"Republic of South Sudan","capital":"Juba","iso2":"SS","iso3":"SSD","covid19":{"total_case":"3,181","total_deaths":"62","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"SSP","phone_code":"211","continent":"Africa","description":null,"size":"619,745 km\u00b2","independence_date":null,"population":"11,249,761","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/South%20Sudan","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/South%20Sudan\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/South%20Sudan\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/South-Sudan.png"}},{"name":"Sudan","full_name":"Republic of the Sudan","capital":"Khartoum","iso2":"SD","iso3":"SDN","covid19":{"total_case":"19,747","total_deaths":"1,301","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"SDG","phone_code":"249","continent":"Africa","description":null,"size":"1,886,068 km\u00b2","independence_date":null,"population":"44,294,189","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sudan","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sudan\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Sudan\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Sudan.png"}},{"name":"Swaziland","full_name":"Kingdom of Swaziland","capital":"Mbabane","iso2":"SZ","iso3":"SWZ","covid19":{"total_case":"0","total_deaths":"0","last_updated":"2020-12-01T15:20:58.000000Z"},"current_president":null,"currency":"SZL","phone_code":"268","continent":"Africa","description":null,"size":"17,364 km\u00b2","independence_date":null,"population":"1,165,287","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Swaziland","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Swaziland\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Swaziland\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Swaziland.png"}},{"name":"Tanzania","full_name":"The United Republic of Tanzania","capital":"Dodoma","iso2":"TZ","iso3":"TZA","covid19":{"total_case":"0","total_deaths":"0","last_updated":"2020-12-01T15:21:01.000000Z"},"current_president":null,"currency":"TZS","phone_code":"255","continent":"Africa","description":null,"size":"945,087 km\u00b2","independence_date":null,"population":"60,479,818","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Tanzania","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Tanzania\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Tanzania\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Tanzania.png"}},{"name":"Togo","full_name":"Togolese Republic","capital":"Lome","iso2":"TG","iso3":"TGO","covid19":{"total_case":"3,095","total_deaths":"65","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"XOF","phone_code":"228","continent":"Africa","description":null,"size":"56,785 km\u00b2","independence_date":null,"population":"8,363,092","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Togo","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Togo\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Togo\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Togo.png"}},{"name":"Uganda","full_name":"Republic of Uganda","capital":"Kampala","iso2":"UG","iso3":"UGA","covid19":{"total_case":"23,200","total_deaths":"207","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"UGX","phone_code":"256","continent":"Africa","description":null,"size":"241,037 km\u00b2","independence_date":null,"population":"46,377,077","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Uganda","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Uganda\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Uganda\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Uganda.png"}},{"name":"Zambia","full_name":"Republic of Zambia","capital":"Lusaka","iso2":"ZM","iso3":"ZMB","covid19":{"total_case":"17,931","total_deaths":"364","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"ZMK","phone_code":"260","continent":"Africa","description":null,"size":"752,618 km\u00b2","independence_date":null,"population":"18,609,335","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Zambia","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Zambia\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Zambia\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Zambia.png"}},{"name":"Zimbabwe","full_name":"Republic of Zimbabwe","capital":"Harare","iso2":"ZW","iso3":"ZWE","covid19":{"total_case":"10,839","total_deaths":"294","last_updated":"2020-12-09T09:57:48.000000Z"},"current_president":null,"currency":"ZWL","phone_code":"263","continent":"Africa","description":null,"size":"390,757 km\u00b2","independence_date":null,"population":"14,955,711","href":{"self":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Zimbabwe","states":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Zimbabwe\/states","presidents":"https:\/\/restfulcountries.com\/api\/v1\/countries\/Zimbabwe\/presidents","flag":"https:\/\/restfulcountries.com\/storage\/images\/flags\/Zimbabwe.png"}}],"links":{"first":"https:\/\/restfulcountries.com\/api\/v1\/countries?page=1","last":"https:\/\/restfulcountries.com\/api\/v1\/countries?page=1","prev":null,"next":null},"meta":{"current_page":1,"from":1,"last_page":1,"path":"https:\/\/restfulcountries.com\/api\/v1\/countries","per_page":186,"to":50,"total":50}}
$('#countries-response').html(prettyPrintJson.toHtml(countriesResponse));
$('#country-by-name-response').html(prettyPrintJson.toHtml(countriesName));
$('#country-by-continent-response').html(prettyPrintJson.toHtml(countriesContinent));
$('#covid19-response').html(prettyPrintJson.toHtml(covid19Response));
$('#states-response').html(prettyPrintJson.toHtml(statesResponse));
$('#presidents-response').html(prettyPrintJson.toHtml(presidentsResponse));
$('#countries-slim').html(prettyPrintJson.toHtml(countriesSlim));
$('#states-slim').html(prettyPrintJson.toHtml(statesSlim));
//        setCountriesResponse();
//        setCountryByNameResponse();
//        setCountryByContinent();
//
//        function setCountriesResponse() {
//            $.get('https://restfulcountries.com/api/v1/countries?per_page=5',  function(data){
//                $('#countries-response').html(prettyPrintJson.toHtml(data));
//            });
//        }
//        function setCountryByNameResponse() {
//            $.get('https://restfulcountries.com/api/v1/countries/Nigeria',  function(data){
//                $('#country-by-name-response').html(prettyPrintJson.toHtml(data));
//            });
//        }
//        function setCountryByContinent() {
//            $.get('https://restfulcountries.com/api/v1/countries?continent=africa',  function(data){
//                $('#country-by-continent-response').html(prettyPrintJson.toHtml(data));
//            });
//        }



$("#select-country").on("change", function () {
    version = $("select[name='version']").val();
    window.location.href = 'http://restfulcountries.com/api-documentation/version/' + version;
});

$(document).on('click','.scroll-div', function(event) {
//            event.preventDefault();
    var target =  $(this).attr('href');
    console.log(target);
    $('html, body').animate({
        scrollTop: $(target).offset().top - 50
    }, 100);
});


