<p align="center"><a href="https://restfulcountries.com" target="_blank"><img src="https://restfulcountries.com/storage/images/logo/restful-logo-VERTICAL-SVG.svg" width="120"></a></p>

<p align="center">

<a href="https://github.com/Naterus/restful-countries/blob/main/LICENSE"><img src="https://restfulcountries.com/storage/images/license-mit.svg" alt="License"></a>
</p>


Restful (JSON) Api to retrieve data about any country with an admin management console to monitor requests, manage country data, feedbacks, and admin users with roles and permissions:

Everything on [https://restfulcountries.com](https://restfulcountries.com) has its source code available here except the data itself as it is hosted on a live database server.

## Documentation
See api documentation here -  [Api Docs](https://restfulcountries.com/api-documentation)

## Use Case
The simplest use case of this api is to populate your form with countries and states data using a select field.
Here is a sample jquery script.

```angular2html
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    //Populate countries select on page load
    $(document).ready(function(){
        $.get('https://restfulcountries.com/api/v1/countries',function(countries){
            //Loop through data returned and populate select field 
            $.each(countries.data,function(key,value){
                $('#country-select')
                    .append($("<option></option>")
                        .attr("value", value.name)
                        .text(value.name));
            });

        });
    });


    //Load states on country change
    $("#country-select").change(function(){
        country=$("#country-select").val();

        //Remove previous loaded options
        $('#state-select option:gt(0)').remove();
        $('#district-select option:gt(0)').remove();
        $.get('https://restfulcountries.com/api/v1/countries/'+country+'/states',function(states){

            //Loop through data returned and populate select field 
            $.each(states.data,function(key,value){
                $('#state-select')
                    .append($("<option></option>")
                        .attr("value", value.name)
                        .text(value.name));
            });

        });
    });

</script>
```
Then of course add 2 select fields on your html form with IDs `country-select` and `state-select` which would be called in the script.

```angular2html

<select id="country-select" class="form-control">
    <option selected disabled>Country</option>
</select>

<select  id="state-select" name="" class="form-control">
    <option selected disabled>State</option>
</select>

```
That's it, you should have your select populated with countries on load and get the country states on country select change.
There are many other use cases, it all depends on the data you wish to access.

## Installation


## Donations

A kind gesture would go a long way in maintaining restful countries. If you are interested in donating to restful countries, please visit [donation page](https://restfulcountries.com/donation).

## Contributing

See contribution  guide here - [Restful Countries Contribution](https://laravel.com/docs/contributions).

## License

Restful countries is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
