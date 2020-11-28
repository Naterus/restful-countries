
@extends("layouts.home-layout")
@section("title","Welcome")
@section("page-content")
    <!-- Start Home -->
    <section class="bg-home" style="background: url('{!! asset("storage/images/map2.jpg") !!}') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h1 class="heading font-weight-bold mb-4">All 	Countries Repository</h1>
                                <h6 class="small-title text-uppercase text-light mb-3">Get countries information like states, covid19 stats, presidents, flag, population and others via Restful Api.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <div class="registration-form-box">
                                                    <select id="country-select" class="demo-default form-control">
                                                        <option selected disabled>Country</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="registration-form-box">
                                                    <select  id="state-select" name="" class="demo-default form-control">
                                                        <option selected disabled>State</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="text-center" style="margin-top: 50px;">
                                    <a href="{!! route("documentation",env("APP_VERSION")) !!}" class=""><button class="btn btn-primary">Explore Endpoints</button></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
@endsection
@section("page-script")
    <script>
        //Populate countries select on page load
        $(document).ready(function(){
            $.get('http://localhost:8081/restful_countries/public/api/v1/countries',function(countries){
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
            $.get('http://localhost:8081/restful_countries/public/api/v1/countries/'+country+'/states',function(states){

                $.each(states.data,function(key,value){
                    $('#state-select')
                        .append($("<option></option>")
                            .attr("value", value.name)
                            .text(value.name));
                });

            });
        });

    </script>
@endsection
