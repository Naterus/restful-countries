//todo : Store sample json data in individual json files


//todo simplify the functions below into one simple function

$.getJSON( "../../assets/js/json/allCountries.json", function( data ) {
    $('#all-countries-response').html(prettyPrintJson.toHtml(data));
});

$.getJSON( "../../assets/js/json/countryByName.json", function( data ) {
    $('#country-by-name-response').html(prettyPrintJson.toHtml(data));
});

$.getJSON( "../../assets/js/json/countriesByContinent.json", function( data ) {
    $('#countries-by-continent-response').html(prettyPrintJson.toHtml(data));
});

$.getJSON( "../../assets/js/json/countriesByPopulationResponse.json", function( data ) {
    $('#countries-by-population-response').html(prettyPrintJson.toHtml(data));
});

$.getJSON( "../../assets/js/json/countriesBySize.json", function( data ) {
    $('#country-by-size-response').html(prettyPrintJson.toHtml(data));
});

$.getJSON( "../../assets/js/json/countriesByIso2.json", function( data ) {
    $('#country-by-iso2-response').html(prettyPrintJson.toHtml(data));
});

$.getJSON( "../../assets/js/json/countriesByIso3.json", function( data ) {
    $('#country-by-iso3-response').html(prettyPrintJson.toHtml(data));
});





















$('#covid19-response').html(prettyPrintJson.toHtml(covid19Response));
$('#states-response').html(prettyPrintJson.toHtml(statesResponse));
$('#presidents-response').html(prettyPrintJson.toHtml(presidentsResponse));
$('#countries-slim').html(prettyPrintJson.toHtml(countriesSlim));
$('#states-slim').html(prettyPrintJson.toHtml(statesSlim));
$('#president-by-country-name-response').html(prettyPrintJson.toHtml(presidentByCountry));

$("#select-country").on("change", function () {
    version = $("select[name='version']").val();
    window.location.href = 'http://restfulcountries.com/api-documentation/version/' + version;
});

$(document).on('click','.scroll-div', function() {
    var target =  $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(target).offset().top -100
    }, 100);
});

$(".show-sidebar-sm").click(function () {
   $(".sidebar").show(300);
   $(this).hide();
});


if ($(window).width() < 994) {

    $(document).mouseup(function(e)
    {
        var container = $(".sidebar");

        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
            $(".show-sidebar-sm").show()
        }

    });
    $(".scroll-div").click(function () {
        $(".sidebar").hide(300);
        $(".show-sidebar-sm").show()
    });
}

$(".copy-btn").click(function () {

    var copyText = document.getElementById("api-token");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    alert("You have copied your API key");
});