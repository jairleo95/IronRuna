"use strict";
$(document).ready(function () {
    /* -------------------------------------
     Pretty Photo Gallery			
     -------------------------------------- */
    $("a[data-rel]").each(function () {
        $(this).attr("rel", $(this).data("rel"));
        return false;
    });
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'dark_square',
        slideshow: 3000,
        autoplay_slideshow: true,
    });
    /* -------------------------------------
     Back to Top					
     -------------------------------------- */
    $('#btn-backtotop').on('click', function () {
        $('html,body').animate({scrollTop: 0}, 'slow');
        return false;
    });
    /* -------------------------------------
     Shopping Cart Prodict Increase		
     -------------------------------------- */
    $('em.minus').on('click', function () {
        $('#quantity1').val(parseInt($('#quantity1').val(), 10) - 1);
    });
    $('em.plus').on('click', function () {
        $('#quantity1').val(parseInt($('#quantity1').val(), 10) + 1);
    });
    /* -------------------------------------
     Theme All Sliders			
     -------------------------------------- */
    $("#main-slider").owlCarousel({
        autoPlay: false,
        navigation: false,
        pagination: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
    });

    $("#race-slider").owlCarousel({
        autoPlay: false,
        items: 2,
        navigation: true,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2],
        pagination: false,
    });

    $("#news-event-slider").owlCarousel({
        autoPlay: false,
        items: 3,
        navigation: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 2],
        pagination: true,
    });

    $("#sponsors-slider").owlCarousel({
        autoPlay: true,
        items: 5,
        navigation: true,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 4],
        pagination: false,
    });

    $("#testimonial-slider").owlCarousel({
        autoPlay: true,
        navigation: true,
        pagination: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
    });
    /* -------------------------------------
     Product Slider 				
     -------------------------------------- */
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    sync1.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        navigation: false,
        pagination: false,
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
    });
    sync2.owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: [640, 3],
        itemsMobile: [479, 2],
        pagination: false,
        responsiveRefreshRate: 100,
        afterInit: function (el) {
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });
    function syncPosition(el) {
        var current = this.currentItem;
        $("#sync2")
                .find(".owl-item")
                .removeClass("synced")
                .eq(current)
                .addClass("synced")
        if ($("#sync2").data("owlCarousel") !== undefined) {
            center(current)
        }
    }
    $("#sync2").on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo", number);
    });
    function center(number) {
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for (var i in sync2visible) {
            if (num === sync2visible[i]) {
                var found = true;
            }
        }
        if (found === false) {
            if (num > sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", num - sync2visible.length + 2)
            } else {
                if (num - 1 === -1) {
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if (num === sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if (num === sync2visible[0]) {
            sync2.trigger("owl.goTo", num - 1)
        }
    }
    /* -------------------------------------
     Portfolio Filter
     -------------------------------------- */
    var $container = $('#portfolio-content');
    // set selected menu items
    var $optionSets = $('#gallery-cats');
    var $optionLinks = $optionSets.find('a');
    function doIsotopeFilter() {
        if ($().isotope) {
            var isotopeFilter = '';
            $optionLinks.each(function () {
                var selector = $(this).attr('data-filter');
                var link = window.location.href;
                var firstIndex = link.indexOf('filter=');
                if (firstIndex > 0) {
                    var id = link.substring(firstIndex + 7, link.length);
                    if ('.' + id == selector) {
                        isotopeFilter = '.' + id;
                    }
                }
            });
            if (isotopeFilter.length > 0) {
                // initialize Isotope
                $container.isotope({
                    itemSelector: '.gallery-item',
                    filter: isotopeFilter
                });
                $optionLinks.each(function () {
                    var $this = $(this);
                    var selector = $this.attr('data-filter');
                    if (selector == isotopeFilter) {
                        if (!$this.hasClass('selected')) {
                            var $optionSet = $this.parents('.option-set');
                            $optionSet.find('.selected').removeClass('selected');
                            $this.addClass('selected');
                        }
                    }
                });
            }
            // filter items when filter link is clicked
            $optionLinks.on('click', function () {
                var $this = $(this);
                var selector = $this.attr('data-filter');
                $container.isotope({itemSelector: '.gallery-item', filter: selector});
                if (!$this.hasClass('selected')) {
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');
                }
                return false;
            });
        }
    }
    var isotopeTimer = window.setTimeout(function () {
        window.clearTimeout(isotopeTimer);
        doIsotopeFilter();
    }, 1000);
    var selected = $('#gallery-cats > li > a');
    var $this = $(this);
    selected.on('click', function () {
        if (selected.hasClass('selected')) {
            $(this).parent().addClass('select').siblings().removeClass('select');
        }
    });
    /* -------------------------------------
     Custom Form
     -------------------------------------- */
    $(function () {
        jcf.replaceAll();
    });
    /* -------------------------------------
     Google Map
     -------------------------------------- */
    $("#btn-map").on('click', function () {
        $('#contacus-map').stop(true, true).slideToggle(400);
    });
    var map;
    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(-33.8907368, 151.2727346)
        };
        map = new google.maps.Map(document.getElementById('contacus-map'),
                mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
});