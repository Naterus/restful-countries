import $ from 'jquery';
import prettyPrintJson from 'pretty-print-json';

    // Menu
    $('.navbar-toggle').on('click', function (event) {
        $(this).toggleClass('open');
        $('#navigation').slideToggle(400);
    });

    $('.navigation-menu>li').slice(-1).addClass('last-elements');

    $('.menu-arrow,.submenu-arrow').on('click', function (e) {
        if ($(window).width() < 992) {
            e.preventDefault();
            $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
        }
    });

    $(".navigation-menu a").each(function () {
        if (this.href === window.location.href) {
            $(this).parent().addClass("active");
            $(this).parent().parent().parent().addClass("active");
            $(this).parent().parent().parent().parent().parent().addClass("active");
        }
    });

    // Clickable Menu
    $(".has-submenu a").click(function() {
        if(window.innerWidth < 992){
            if($(this).parent().hasClass('open')){
                $(this).siblings('.submenu').removeClass('open');
                $(this).parent().removeClass('open');
            } else {
                $(this).siblings('.submenu').addClass('open');
                $(this).parent().addClass('open');
            }
        }
    });

    $('.mouse-down').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 0
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    //Sticky
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $(".defaultscroll").addClass("scroll");
        } else {
            $(".defaultscroll").removeClass("scroll");
        }
    });

//todo : Store sample json data in individual json files


//todo : simplify the functions below into one simple function

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

// $('#covid19-response').html(prettyPrintJson.toHtml(covid19Response));
// $('#states-response').html(prettyPrintJson.toHtml(statesResponse));
// $('#presidents-response').html(prettyPrintJson.toHtml(presidentsResponse));
// $('#countries-slim').html(prettyPrintJson.toHtml(countriesSlim));
// $('#states-slim').html(prettyPrintJson.toHtml(statesSlim));
// $('#president-by-country-name-response').html(prettyPrintJson.toHtml(presidentByCountry));


$(document).on('click','.scroll-div', function() {

    var target =  $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(target).offset().top - 100
    }, 100);
});



window.addEventListener('DOMContentLoaded', () => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            if (entry.intersectionRatio > 0) {
                document.querySelector(`.list-unstyled li a[href="#${id}"]`).classList.add('active');
            } else {
                document.querySelector(`.list-unstyled li a[href="#${id}"]`).classList.remove('active');
            }
        });
    });

// Track all sections that have an `id` applied
    document.querySelectorAll('.content[id]').forEach((section) => {
        observer.observe(section);
    });

});


