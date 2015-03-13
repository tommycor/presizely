/* JS Presizely */

/* Replace all SVG images with inline SVG
----------------------------------------------------------*/

/* YouTube
----------------------------------------------------------*/
function youTube() {
  var myNewWidth = $(".youtube_video").width();
  var myNewHeight = (myNewWidth*9)/16;
  $(".youtube_video").height(myNewHeight);
}
youTube();
$('iframe').each(function(){
  var url = $(this).attr("src");
  var char = "?";
  if(url.indexOf("?") != -1){
    var char = "&";
  }
$(this).attr("src",url+char+"wmode=transparent");
$(this).prop("frameBorder", 0);
});

$(window).on('resize', function () {
  youTube();
});

// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player('ytplayer', {
    height: '150',
    width: '100%',
    videoId: 'zFlML-LFa6g'
  });
}

/* Mensurations Owl Slider
----------------------------------------------------------*/

$('.measures-block').click(function(e) {
  e.preventDefault();
  $('.measures-block').removeClass('active');
  $(this).addClass('active');
  var dm = $(this).attr('data-measure');
  $('.sliders').addClass('hidden');
  if ($('.sliders').hasClass('dm'+dm)) {
    $('.sliders.dm'+dm).removeClass('hidden');
    switch(dm) {
      case '1':
        $('.mini-svg').attr('src','img/svg/tshirt.svg');
        break;
      case '2':
        $('.mini-svg').attr('src','img/svg/trousers.svg');
        break;
      case '3':
        $('.mini-svg').attr('src','img/svg/hat.svg');
        break;
      default:
        $('.mini-svg').attr('src','img/svg/tshirt.svg');
        break;
    }
  }
});

/* Dashboard Owl Slider
----------------------------------------------------------*/

$(".next").click(function(){
  $('#wishlist').trigger('owl.next');
});
$(".prev").click(function(){
  $('#wishlist').trigger('owl.prev');
});
$(".next-cw").click(function(){
  $('#cw').trigger('owl.next');
});
$(".prev-cw").click(function(){
  $('#cw').trigger('owl.prev');
});
$(".next-ev").click(function(){
  $('#ev').trigger('owl.next');
});
$(".prev-ev").click(function(){
  $('#ev').trigger('owl.prev');
});
$(".next-pev").click(function(){
  $('#pev').trigger('owl.next');
});
$(".prev-pev").click(function(){
  $('#pev').trigger('owl.prev');
});


function updateLogoColor(color){
  var $logo = $('.deco');
  $logo.each(function(){
    var _this = $(this);
    if (_this.is('img')){
      var src = _this.attr('src'), filename = src.split('/').reverse();
      _this.attr('src', '/img/themes/'+color+'/'+filename[0]);
    }
  });
}

// core module
var Presizely = (function(){
    var
        events = [],
        isMobile = { //  mobile detection utility
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        },
        init = function() {
            for (var e in events){
                events[e]();
            }
        },
        refresh = function() {
           $(window).trigger('debouncedresize.slitslider').trigger('resize');
        };
    return {
        events: events,
        isMobile: isMobile,
        init: init,
        refresh: refresh
    };
})();
// end core module


// slitslider module
Presizely.slider = (function(){
    var $navArrows = $('#nav-arrows'),
        $nav = $('#nav-dots > span'),
        $obj  = $('#slider'),
        slitslider = $obj.slitslider({
            onBeforeChange: function(slide, pos) {
                $nav.removeClass('nav-dot-current');
                $nav.eq(pos).addClass('nav-dot-current');
            }
        }),
        init = function() {
            initEvents();
        },
        initEvents = function() {
            // add navigation events
            $navArrows.children(':last').on('click', function() {
                slitslider.next();
                return false;
            });
            $navArrows.children(':first').on('click', function() {
                slitslider.previous();
                return false;
            });
            $nav.each(function(i) {
                $(this).on('click', function() {
                    var $dot = $(this);
                    if (!slitslider.isActive()) {
                        $nav.removeClass('nav-dot-current');
                        $dot.addClass('nav-dot-current');
                    }
                    slitslider.jump(i + 1);
                    return false;
                });
            });
            // everything ready, show the container
            $obj.show();
        },
        refresh = function() {
           $(window).trigger('debouncedresize.slitslider').trigger('resize');
        };
    return {
        init: init,
        refresh: refresh
    };
})();
Presizely.events.push(Presizely.slider.init);
// end slitslider module


// search bar module
Presizely.searchButton = function() {
    var h = '54px';
    if ($('.search_button').length) {
        $('.search_button').click(function(a) {
            a.preventDefault();
            if (0 === $('.h_search_form').height()) {
                $('.h_search_form input[type="text"]').focus();
                $('.h_search_form').stop().animate({
                    height: h
                }, 150);
            } else {
                $('.h_search_form').stop().animate({
                    height: '0'
                }, 150);
            }
            $(window).scroll(function() {
                if (0 !== $('.h_search_form').height()) {
                    $('.h_search_form').stop().animate({
                        height: '0'
                    }, 150);
                }
            });
            $('.h_search_close').click(function(a) {
                a.preventDefault();
                $('.h_search_form').stop().animate({
                    height: '0'
                }, 150);
            });
        });
    }
};
Presizely.events.push(Presizely.searchButton);
// end search bar module


// pie chart module
Presizely.pieChart = function(obj){
    var time = 1500;
    $(obj).fadeIn('slow').easyPieChart({
        //barColor: '#1abc9c',
        barColor: $('.bg-primary').css('backgroundColor'),
        trackColor: false,
        scaleColor: false,
        scaleLength: 0,
        lineCap: 'square',
        lineWidth: 5,
        size: 160,
        animate: { duration: time, enabled: true },
        onStart: function(){
            $(obj).find('.counter').countTo({
                speed: time
            });
        }
    });
};
Presizely.events.push(Presizely.pieChart);
// end pie chart module

// slider control module
Presizely.sliderControl = function(){
    var $obj = $('.filter_size');
    var $dataYTV = $(".youtube_video").attr('data-youtube');
    if ($obj.length > 0) {
        $.each($obj, function() {
          /*$(this).slider({
              tooltip:'hide'
          }).on('slidecreate', function(e){
            console.log($(this).closest('.slider-selection'));
            if ($(this).hasClass('to_update')) {
              $(this).closest('.slider-selection').css('width','100%');
            }
          });*/
          var $display = $(this).parent().next().children('.size_current');
          var $value = $(this).attr('data-slider-value');
          var $dataYT = $(this).attr('data-youtube');
          if ($value != 0) {
            $display.text($value+' cm');
          }
          else {
            $display.text('- - - - -');
          }
          $(this).slider({
              tooltip:'hide'
          }).on('slide', function(slideEvt) {
              $display.text(slideEvt.value+' cm');
              if ($dataYT != $dataYTV) {
                $(".youtube_video").attr('data-youtube', $dataYT);
                $dataYTV = $(".youtube_video").attr('data-youtube');
                $('.youtube_video').attr('src', 'https://www.youtube.com/embed/'+$dataYT+'?enablejsapi=1'); // Video switch
              }
          });
          $(this).slider({
              tooltip:'hide'
          }).on('slideStop', function(slideEvt) {
              $display.text(slideEvt.value+' cm');
              if ($dataYT != $dataYTV) {
                $(".youtube_video").attr('data-youtube', $dataYT);
                $dataYTV = $(".youtube_video").attr('data-youtube');
                $('.youtube_video').attr('src', 'https://www.youtube.com/embed/'+$dataYT+'?enablejsapi=1'); // Video switch
              }
          });
        });
    }
};
Presizely.events.push(Presizely.sliderControl);
// end slider control module


// accordion icons module
Presizely.accordionIcon = function(){
    var
        $target = $('div.panel-collapse'),
        toggleIcon = function(e){
            $(e.target)
                .prev('.accordion-heading')
                .find('.accordion-icon')
                .toggleClass('fa-minus fa-plus');
            };
    $target
        .on('hidden.bs.collapse', toggleIcon)
        .on('shown.bs.collapse', toggleIcon);
};
Presizely.events.push(Presizely.accordionIcon);
// end accordion icons module


// scroll effects module
Presizely.scrollController = function() {
    var
        controller = new ScrollMagic(),
        windowHeight = $(window).innerHeight(),
        $mainNavigation = $('#main-navigation'),
        $onePageMenu = $('#one-page-menu'),
        $backToTop = $('#back_to_top'),
        $parallax = $('.parallax'),
        $fadingTitle = $('.fading-title'),
        $charts = $('#charts-wrapper'),
        $timer = $('#timer-wrapper');

    function getWindowHeight() {
        return windowHeight;
    }

    controller.scrollTo(function (newpos) {
        TweenMax.to(window, 0.8, {scrollTo: {y: newpos}});
    });

    // adds 'opaque' class to navigation when scrolling down
    if ($mainNavigation.length > 0) {
        new ScrollScene({ offset: $mainNavigation.height() })
            .setClassToggle($mainNavigation, 'opaque')
            .addTo(controller);
    }

    // handles 'back to top' button
    if ($backToTop.length > 0) {
        var h = getWindowHeight();
        new ScrollScene({ offset: h })
            .addTo(controller)
            .on('enter', function() {
                $backToTop.fadeIn('fast');
            })
            .on('leave', function() {
                $backToTop.fadeOut('slow');
            });
        $backToTop.click(function(e){
            e.preventDefault();
            controller.scrollTo(0);
        });
    }

    // navigation behaviour on one page layout
    if ($onePageMenu.length > 0) {
        $onePageMenu.find('a[href^=#]').each(function(){
            var
                _this = $(this),
                _target = _this.attr('href'),
                _duration = $(_target).outerHeight();

            // highlights the proper navigation link when the relevant area is in the viewport
            new ScrollScene({triggerElement: _target, triggerHook: 'onCenter', duration:_duration })
                .setClassToggle(_this.parent(), 'active')
                .addTo(controller);

            _this.click(function(e){
                if (_target.length > 0) {
                    e.preventDefault();

                    // smooth scrolling
                    controller.scrollTo(_target);

                    // if supported by the browser, handles the Back button
                    if (window.history && window.history.pushState) {
                        history.pushState('', document.title, _target);
                    }
                }
            });
        });
    }

    // parallax background
    if ($parallax.length > 0) {
        var testMobile = Presizely.isMobile.any();
        if (testMobile === null) {
            $parallax.each(function(){
                var
                    _this = $(this),
                    _duration = _this.outerHeight() + getWindowHeight();
                    //bgPosMovement = 'center ' + (-Math.abs(_duration*0.35)) + 'px';
                _this.css({ backgroundSize:'110%'});
                new ScrollScene( {triggerElement: _this, duration: _duration, triggerHook: 'onEnter'} )
                    .setTween( TweenMax.to(_this, 1, {backgroundPosition:'100% 50%', ease: Linear.easeNone}) )
                    .addTo( controller );
            });
        }
    }

    // fades and shifts page title when scrolling down
    if ($fadingTitle.length > 0){
        $fadingTitle.each(function(){
            var
                _this = $(this),
                _element = _this.find('.section-title').first(),
                _duration = _this.outerHeight() + getWindowHeight(),
                offset = _duration*0.35,
                alpha = 1 / (_duration);

            new ScrollScene( {triggerElement: _this, duration: _duration, triggerHook: 'onLeave'} )
                .setTween( TweenMax.to(_element, 1, {marginTop: offset+'px', marginBottom: -Math.abs(offset)+'px', opacity:alpha}) )
                .addTo( controller );
        });
    }

    // start charts plotting when scrolled into view
    if ($charts.length > 0) {
        new ScrollScene( {triggerElement: $charts} )
            .addTo( controller )
            .on('enter', function() {
                Presizely.pieChart('.chart');
            });
    }

    // start charts plotting when scrolled into view
    if ($timer.length > 0) {
        new ScrollScene( {triggerElement: $timer} )
            .addTo( controller )
            .on('enter', function() {
                $('.timer').countTo();
            });
    }

    // updates windowHeight on resize
    $(window).on('resize', function () {
        windowHeight = $(window).innerHeight();
    });
};
Presizely.events.push(Presizely.scrollController);
// end scroll effects module


// isotope module
Presizely.isotope = function(){
  var
    $container = $('#isotope'),
    $filter = $('#filters'),
    instance = null,
    options = {
        itemSelector: '.item',
        layoutMode: 'masonry',
        masonry: null
    },
    calculateColumns = function(width) {
        var boxed = isBoxedLayout(),
            factor = 1;
        if (width > 435 && width < 723) {
            factor = 2;
        } else if(width > 722 && width < 1155) {
            factor = 3;
        } else if(width > 1154) {
            factor =  boxed ? 3 : 4;
        }
        //console.log(width+'/'+factor);
        return width/factor;
    },
    isBoxedLayout = function(){
        return $('body').hasClass('boxed-layout');
    },
    doFilter = function() {
        var
            _this  = $(this),
            _group = _this.parent(),
            value  = _this.attr('data-filter');
        instance.isotope({
            filter: value
        });
        _group.find('.btn-primary').removeClass('btn-primary');
        _this.addClass('btn-primary');
    };

    if ($container.length > 0) {
        if ($container.hasClass('portfolio-full')) {
            options.itemSelector = '.item-full';
            options.layoutMode = 'vertical';
        } else {
            options.masonry = {
                columnWidth: calculateColumns( $container.width() )
            };
        }
        if ($.fn.isotope !== undefined) {
            instance = $container.isotope(options);

            // layout Isotope again after all images have loaded
            instance.imagesLoaded( function() {
              instance.isotope('layout');
            });

            // bind filter button click
            if ($filter.length > 0){
                $filter.on('click', 'button', doFilter);
            }
            // re-arrange on window resize
            $(window).resize(function(){
                instance.isotope({
                    masonry: {
                        columnWidth: calculateColumns($container.width())
                    }
                });
            });
        } else {
            console.error('Isotope not available!');
        }
    }
};
Presizely.events.push(Presizely.isotope);
// end isotope module


// google maps module
Presizely.gmaps = function(){
    var
        $elem = $('#map-canvas'),
        options = window.mapOptions || {},
        apiLoad = function() {
            $.getScript('https://maps.googleapis.com/maps/api/js?v=3.exp&callback=Presizely.gmaps')
                //.done(function (script, textStatus) { })
                .fail(function (jqxhr) {
                    console.error('Could not load Google Maps: ' + jqxhr);
                });
        },
        initMap = function(){
            if ($.fn.gMap !== undefined) {
                $elem.gMap(options);
            } else {
                console.error('jQuery.gMap not available!');
            }
        };

    if (window.google && google.maps) {
        initMap();
    } else {
        apiLoad();
    }
    return {
        init: initMap
    };
};
Presizely.events.push(Presizely.gmaps);
// end google maps module



// Ajax portfolio module
Presizely.portfolio = function(){
    var
        obj               = '#portfolio-gallery',
        $obj              = $(obj),
        hash              = '',
        url               = '',
        page              = '',
        wrapperHeight     = '',
        ajaxLoading       = false,
        pageRefresh       = true,
        content           = false,
        current           = '',
        next              = '',
        prev              = '',
        target            = '',
        scrollPosition    = '',
        projectIndex      = '',
        projectLength     = '',
        loadingError      = '<div class="alert alert-warning">content not available.</div>',
        portfolioGrid     = $('.portfolio', $obj),
        loader            = $('.loader', $obj),
        projectContainer  = $('.ajax-content-inner', $obj),
        messageContainer  = $('.status-message', $obj),
        exitProject       = $('.closeProject', $obj),
        nextLink          = $('.nextProject', $obj),
        prevLink          = $('.prevProject', $obj),
        projectNav        = $('.project-navigation', $obj),
        easing            = 'easeOutExpo',
        folderName        = $obj.data('folder');

    $(window).bind( 'hashchange', function() {
        hash = $(window.location).attr('hash');
        var root = '#!'+ folderName +'/';
        var rootLength = root.length;

        if (hash.substr(0, rootLength) !== root){
            return;

        } else {
            var
                correction = 50,
                headerH = $('nav').outerHeight() + correction;

            hash = $(window.location).attr('hash');
            url = hash.replace(/[#\!]/g, '' );

            portfolioGrid.find('.item.current').removeClass('current' );

            /* url pasted in address bar (or page refresh) */
            if (pageRefresh === true && hash.substr(0, rootLength) === root) {
                $('html, body').stop().animate({ scrollTop: (projectContainer.offset().top-20)+'px'}, 800, easing, function(){
                    loadProject();
                });

                /* click on portfolio grid or project navigation */
            } else if(pageRefresh === false && hash.substr(0,rootLength) === root) {
                $('html,body').stop().animate({scrollTop: (projectContainer.offset().top-headerH)+'px'}, 800, easing, function(){
                    if (content === false) {
                        loadProject();
                    } else {
                        projectContainer.animate({opacity:0, height:wrapperHeight}, loadProject );
                    }
                    projectNav.fadeOut('100');
                    exitProject.fadeOut('100');
                });

                /* click on browser back button (no refresh)  */
            } else if (hash === '' && pageRefresh === false || hash.substr(0,rootLength) !== root && pageRefresh === false || hash.substr(0,rootLength) !== root && pageRefresh === true) {
                scrollPosition = hash;
                $('html, body').stop().animate({scrollTop: scrollPosition+'px'}, 1000, deleteProject );
            }

            /* add active class to selected project  */
            portfolioGrid.find('.item a[href="#!' + url + '"]' ).parents('li').addClass( 'current' );
        }
        return false;
    });

    function loadProject(){
        loader.fadeIn();
        messageContainer.animate({
            opacity:0,
            height:'0px'
        }).empty();
        if (!ajaxLoading) {
            ajaxLoading = true;
            projectContainer.load( url + ' .ajaxpage', function(xhr, statusText){
            if (statusText === 'success') {
                page =  $('.ajaxpage', obj);

                $('.ajaxpage', obj).waitForImages(function() {
                    hideLoader();
                    ajaxLoading = false;
                });
                $('.owl-carousel', $obj).owlCarousel();
                projectNav.fadeIn();
            }

                if (statusText === 'error') {
                    projectContainer
                        .animate({
                            opacity:0,
                            height:'0px'
                        })
                        .empty();
                    messageContainer
                        .html( loadingError )
                        .animate( {
                            opacity: 1,
                            height: (messageContainer.find('.alert').outerHeight(true)+'px')
                        });
                    hideLoader();
                    ajaxLoading = false;
                }
            });
        }
    }

    function hideLoader(){
        loader.fadeOut('fast', function(){
            showProject();
        });
    }

    function showProject(){
        if (content === false){
            wrapperHeight = projectContainer.children('.ajaxpage').outerHeight() + 'px';
            projectContainer.animate({opacity:1, height:wrapperHeight}, function(){
                scrollPosition = $('html, body').scrollTop();
                exitProject.fadeIn();
                content = true;
            });
        } else {
            wrapperHeight = projectContainer.children('.ajaxpage').outerHeight() + 'px';
            projectContainer.animate({opacity:1, height:wrapperHeight}, function(){
                scrollPosition = $('html, body').scrollTop();
                exitProject.fadeIn();
            });
        }

        projectIndex = portfolioGrid.find('.item.current').index();
        projectLength = $('.item', obj).length-1;

        if (projectIndex === projectLength) {
            nextLink.addClass('disabled');
            prevLink.removeClass('disabled');

        } else if (projectIndex === 0){
            nextLink.addClass('disabled');
            prevLink.removeClass('disabled');

        } else {
            nextLink.removeClass('disabled');
            prevLink.removeClass('disabled');
        }
    }

    function deleteProject(closeURL){
        projectNav.fadeOut(100);
        exitProject.fadeOut(100);
        projectContainer.animate({opacity:0, height:'0px'}).empty();
        messageContainer.animate({opacity:0, height:'0px'}).empty();

        if (typeof closeURL !== 'undefined' && closeURL !== '') {
            location = '#_';
        }
        portfolioGrid.find('.item.current').removeClass('current' );
    }

    /* link to next project */
    nextLink.on('click',function () {
        current = portfolioGrid.find('.item.current');
        next = current.next('.item');
        target = $(next).find('a.ajax_load').attr('href');
        $(this).attr('href', target);
        if (next.length === 0) {
            return false;
        }
        current.removeClass('current');
        next.addClass('current');
    });

    /* link to previous project */
    prevLink.on('click',function () {
        current = portfolioGrid.find('.item.current');
        prev = current.prev('.item');
        target = $(prev).find('a.ajax_load').attr('href');
        $(this).attr('href', target);
        if (prev.length === 0) {
            return false;
        }
        current.removeClass('current');
        prev.addClass('current');
    });

    /* close project */
    exitProject.on('click',function () {
        deleteProject( $(this).find('a').attr('href') );
        loader.fadeOut();
        return false;
    });

    // if passed in by the url, load the required portfolio detail
    $(window).trigger( 'hashchange' );

    pageRefresh = false;
};
Presizely.events.push(Presizely.portfolio);
// end Ajax portfolio module



// Contacts form module
Presizely.contactForm = function(){
    var
        $form = $('#contactForm'),
        $msgSuccess = $('#successMessage'),
        $msgFailure = $('#failureMessage'),
        $msgIncomplete = $('#incompleteMessage'),
        messageDelay = 2000;

    $form.validate({
        invalidHandler: function(event, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                $msgIncomplete.show();
            } else {
                $msgIncomplete.fadeOut();
            }
        },
        submitHandler: function(form) {
            var
                _form = $(form),
                data = _form.serialize(),
                action = _form.attr('action');

            data += '&ajax=true';
            $msgIncomplete.fadeOut();
            _form.fadeOut();

            $.post(action, data)
                .done(function(response){
                    if (response === 'success'){
                        $msgSuccess.fadeIn().delay(messageDelay).fadeOut();
                        _form.trigger('reset');
                    } else {
                        $msgFailure.fadeIn().delay(messageDelay).fadeOut();
                    }
                })
                .fail(function() {
                    $msgFailure.fadeIn().delay(messageDelay).fadeOut();

                })
                .always(function(){
                    _form.delay(messageDelay+500).fadeIn();
                });
            return false;
        }
    });
};
Presizely.events.push(Presizely.contactForm);
// end Contacts form module

$(document).ready(function() {

    // loading overlay
    $('body').queryLoader2({
        barColor: '#930028',
        backgroundColor: '#eee',
        percentage: true,
        barHeight: 1

    });
    $('#load').fadeOut().remove();

    if($('#circle-diagram').length) {
        circleDiagram('circle-diagram', 500, 500, '#circle-diagram-data');
    }

    $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
    });

    $('input, textarea').placeholder();

    // Start TouchSpin function
    $('input.qty').TouchSpin();

    // Start FitVids function
    $('body').fitVids();
    $('.background-video video').fillparent();

    // Swiper function
    $('.swiper-container').swiper({
        slidesPerView: 'auto'
    });

    // Start OwlCarousel
    $('.owl-carousel').owlCarousel();

    // PrettyPhoto initialization
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
    });
    $('a[data-rel^=prettyPhoto]').prettyPhoto({
        slideshow: 5000,
        autoplay_slideshow: false,
        social_tools: false
    });

    // Start WOW animations
    new WOW().init();

    // init Theme functions
    Presizely.init();

}).on('click','.navbar-toggle',function() {
    // toggle navigation
    $('.navbar-collapse').toggleClass('in');

}).on('click','.navbar-collapse.in',function(e) {
    // close navigation on click
    if( $(e.target).is('a') ) {
        $('.navbar-collapse').toggleClass('in');
    }
});

/*
* jquery.gmap
* Version 2.1.5 2013-10-30
* @requires jQuery >= 1.6.1 or later
*
* Homepage: http://labs.mario.ec/jquery-gmap/
* Author: Mario Estrada <me@mario.ec>
* License: MIT
*/
!function(a){a.fn.gMap=function(b,c){switch(b){case"addMarker":return a(this).trigger("gMap.addMarker",[c.latitude,c.longitude,c.content,c.icon,c.popup]);case"centerAt":return a(this).trigger("gMap.centerAt",[c.latitude,c.longitude,c.zoom]);case"clearMarkers":return a(this).trigger("gMap.clearMarkers")}var d=a.extend({},a.fn.gMap.defaults,b);return this.each(function(){var b=new google.maps.Map(this);a(this).data("gMap.reference",b);var c=new google.maps.Geocoder;d.address?c.geocode({address:d.address},function(a){a&&a.length&&b.setCenter(a[0].geometry.location)}):d.latitude&&d.longitude?b.setCenter(new google.maps.LatLng(d.latitude,d.longitude)):a.isArray(d.markers)&&d.markers.length>0?d.markers[0].address?c.geocode({address:d.markers[0].address},function(a){a&&a.length>0&&b.setCenter(a[0].geometry.location)}):b.setCenter(new google.maps.LatLng(d.markers[0].latitude,d.markers[0].longitude)):b.setCenter(new google.maps.LatLng(34.885931,9.84375)),b.setZoom(d.zoom),b.setMapTypeId(google.maps.MapTypeId[d.maptype]);var e={scrollwheel:d.scrollwheel,disableDoubleClickZoom:!d.doubleclickzoom};d.controls===!1?a.extend(e,{disableDefaultUI:!0}):0!==d.controls.length&&a.extend(e,d.controls,{disableDefaultUI:!0}),b.setOptions(e);var f,g,h=new google.maps.Marker;f=new google.maps.MarkerImage(d.icon.image),f.size=new google.maps.Size(d.icon.iconsize[0],d.icon.iconsize[1]),f.anchor=new google.maps.Point(d.icon.iconanchor[0],d.icon.iconanchor[1]),h.setIcon(f),d.icon.shadow&&(g=new google.maps.MarkerImage(d.icon.shadow),g.size=new google.maps.Size(d.icon.shadowsize[0],d.icon.shadowsize[1]),g.anchor=new google.maps.Point(d.icon.shadowanchor[0],d.icon.shadowanchor[1]),h.setShadow(g)),a(this).bind("gMap.centerAt",function(a,c,d,e){e&&b.setZoom(e),b.panTo(new google.maps.LatLng(parseFloat(c),parseFloat(d)))});var i=[];a(this).bind("gMap.clearMarkers",function(){for(;i[0];)i.pop().setMap(null)});var j;a(this).bind("gMap.addMarker",function(a,c,e,f,g,k){var l,m,n=new google.maps.LatLng(parseFloat(c),parseFloat(e)),o=new google.maps.Marker({position:n});if(g?(l=new google.maps.MarkerImage(g.image),l.size=new google.maps.Size(g.iconsize[0],g.iconsize[1]),l.anchor=new google.maps.Point(g.iconanchor[0],g.iconanchor[1]),o.setIcon(l),g.shadow&&(m=new google.maps.MarkerImage(g.shadow),m.size=new google.maps.Size(g.shadowsize[0],g.shadowsize[1]),m.anchor=new google.maps.Point(g.shadowanchor[0],g.shadowanchor[1]),h.setShadow(m))):(o.setIcon(h.getIcon()),o.setShadow(h.getShadow())),f){"_latlng"===f&&(f=c+", "+e);var p=new google.maps.InfoWindow({content:d.html_prepend+f+d.html_append});google.maps.event.addListener(o,"click",function(){j&&j.close(),p.open(b,o),j=p}),k&&google.maps.event.addListenerOnce(b,"tilesloaded",function(){p.open(b,o)})}o.setMap(b),i.push(o)});for(var k,l=this,m=function(b){return function(c){c&&c.length>0&&a(l).trigger("gMap.addMarker",[c[0].geometry.location.lat(),c[0].geometry.location.lng(),b.html,b.icon,b.popup])}},n=0;n<d.markers.length;n++)k=d.markers[n],k.address?("_address"===k.html&&(k.html=k.address),c.geocode({address:k.address},m(k))):a(this).trigger("gMap.addMarker",[k.latitude,k.longitude,k.html,k.icon,k.popup])})},a.fn.gMap.defaults={address:"",latitude:0,longitude:0,zoom:1,markers:[],controls:[],scrollwheel:!1,doubleclickzoom:!0,maptype:"ROADMAP",html_prepend:'<div class="gmap_marker">',html_append:"</div>",icon:{image:"http://www.google.com/mapfiles/marker.png",shadow:"http://www.google.com/mapfiles/shadow50.png",iconsize:[20,34],shadowsize:[37,34],iconanchor:[9,34],shadowanchor:[6,34]}}}(jQuery);
'use strict';
