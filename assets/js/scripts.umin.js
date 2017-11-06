jQuery(document).ready(function($){

    //vars
    var $body = $('body'),
        $wind = $(window),
        windW = $wind.width(),
        windH = $wind.height();

    $wind.on('resize', function(){
        windW = $wind.width(),
        windH = $wind.height();
    });

    //init functions
    init_typed();
    mobileMenu();
    loader();
    initMap();
    init_isotopes();
    lazy_load();
    equalizeColumnsHeight();

    //b-lazy lazy load
    function lazy_load(){
        var blazy_item = $('.b-lazy');
        if (blazy_item.length > 0){var bLazy = new Blazy(); }
    }

    // lightbox
    lightbox.option({
        'resizeDuration': 300,
        'wrapAround': true,
        'fadeDuration': 300,
        'albumLabel': 'Zdjęcie %1 z %2'
    });

    // equalize height of columns
    function equalizeColumnsHeight() {

        var highestColumn = 0;

        $('.column.six.columns').each(function() {

            if ($(this).height() > highestColumn) {
                highestColumn = $(this).height();
            }

        });

        $('.column.six.columns').css("min-height", highestColumn + "px");
    }

    // init single isotope by id
    function init_isotope(id) {

        var $grid = $('#list-images-' + id).isotope({
            layoutMode: 'fitRows'
        });

        // filter items on button click
        $('#categories-' + id + ' a').on( 'click', function(e) {
            e.preventDefault();
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });

        //add class active to clicked item
        $('#categories-' + id + ' li').on('click', function() {
            $(this).addClass('active').siblings().removeClass('active');
        });
    }

    // init multiple isotopes
    function init_isotopes () {
        var containerElements = document.querySelectorAll('.portfolio .six.columns');

        if(containerElements) {
            for(var i = 1; i<=containerElements.length; i++) {
                init_isotope(i);
            }
        }
    }

    // page preloader
    function loader() {
        $(window).on('load', function() {
            $('body').addClass('loaded');
        });
    }

    // responsive mobile menu
    function mobileMenu() {
        var body = document.querySelector('body');
        var btn = document.querySelector('.toggle-mobile');

        btn.addEventListener('click', function() {
            body.classList.toggle('menu--open');
        });
    }

    // typed for typing animation init
    function init_typed() {
        $(function(){
            $("#typed").typed({
                stringsElement: $('#typed-strings'),
                typeSpeed: 50,
                backDelay: 0,
                startDelay: 0,
                loop: true,
                contentType: 'html',
                loopCount: false
            });

            $('.reset').click(function(){
                $('#typed').typed('reset');
            });
        });
    }

    // google map
    function initMap() {

        var mapElement = document.getElementById('map');

        if (mapElement) {

            var myLatLng = {lat: 50.121801, lng: 19.020002};

            var map = new google.maps.Map(mapElement, {
                zoom: 11,
                center: myLatLng,
                styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Tu jestem!',
                icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
            });
        }
    }

});