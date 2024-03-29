/* global Pace, ScrollMagic, Linear, particlesJS */

(function($){
    "use strict";
    
    var $document = $(document),
        $window = $(window),
        $htmlBody = $('html, body'),
        $body = $('body'),
        $header = $('header'),
        $navbar = $('.navbar'),
        $navbarCollapse = $('.navbar-collapse'),
        $pageScrollLink = $('.page-scroll'),
        $galleryGrid = $('.gallery-grid'),
        $scrollToTop = $('.scroll-to-top'),
        navHeight = 90,
        navHeightShrink = 60;
      
    /** Detect mobile device */
    var isMobile = {
        Android: function(){
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function(){
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function(){
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function(){
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function(){
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function(){
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    
    
    /*
    * Window load
    */
   
    $window.on('load', function(){
        
        /** Bootstrap scrollspy */
        var ww = Math.max($window.width(), window.innerWidth);
        $body.scrollspy({    
            target: '#navigation',
            offset: ww > 992 ? navHeightShrink : navHeight
        });
    });
    
    
    /*
    * Document ready
    */
   
    $document.ready(function(){
        
        /*
        * Window scroll
        */
       
        $window.on('scroll', function(){
        
            if ($document.scrollTop() > navHeight){
                
                /** Shrink navigation */
                $header.addClass('shrink');
                $navbar.addClass('shrink');
                
                /** Scroll to top */
                $scrollToTop.fadeIn();
            }
            else{
                
                /** Shrink navigation */
                $header.removeClass('shrink');
                $navbar.removeClass('shrink');
                
                /** Scroll to top */
                $scrollToTop.fadeOut();
            }
        });
        
        
        /*
        * Window resize
        */
       
        $window.on('resize', function(){
            
            /** Bootstrap scrollspy */
            var dataScrollSpy = $body.data('bs.scrollspy'),
                ww = Math.max($window.width(), window.innerWidth),
                offset = ww > 992 ? navHeightShrink : navHeight;
        
            dataScrollSpy._config.offset = offset;
            $body.data('bs.scrollspy', dataScrollSpy);
            $body.scrollspy('refresh');
            
            
            /** Gallery grid */
            if ($.fn.isotope){
                $galleryGrid.isotope('layout');
            }
            
            
            /** Destroy Carousel - Family */
            var $tabFamilyContent = $('#tab-family-content'),
                $tabPane = $tabFamilyContent.find('.tab-pane').not('.active');
                
            $tabPane.each(function(){
                var $carouselInTab = $tabPane.find('.carousel-custom'),
                    $carousel = $('#' + $carouselInTab.attr('id'));
                    
                if($carousel.data('flickity')){
                    $carousel.flickity('destroy');
                }
            });
        });
        
        
        /** Page scroll */ 
        $pageScrollLink.on('click', function(e){
            var anchor = $(this),
                target = anchor.attr('href');
            pageScroll(target);
            e.preventDefault();
        });
        
        function pageScroll(target){
            var ww = Math.max($window.width(), window.innerWidth),
                    offset = ww > 992 ? navHeightShrink : navHeight;
            
            $htmlBody.stop().animate({
                scrollTop: $(target).offset().top - (offset - 1)
            }, 1000, 'easeInOutExpo');
            
            // Automatically retract the navigation after clicking on one of the menu items.
            $navbarCollapse.collapse('hide');
        };
        
        
        /** Hero - BG Parallax */
        if (typeof ScrollMagic !== 'undefined'){
            var $bgImgParallax = $('.bg-img-parallax');
            
            // Init controller
            var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: 'onEnter', duration: '200%'}});
            
            $bgImgParallax.each(function(){
                var selector = '#' + $(this).parent().attr('id');
                
                // Build scenes
                new ScrollMagic.Scene({triggerElement: selector})
                    .setTween(selector + ' > .bg-img-parallax', {y: '80%', ease: Linear.easeNone})
                    .addTo(controller);
            });
        }
        
        
        /** Hero - BG Slideshow */
        if ($.fn.flexslider){
            var $bgSlideshow = $('#hero-bg-slideshow').find('.hero-slides-wrapper');
            $bgSlideshow.flexslider({
                selector: '.slides > .bg-img-cover',
                easing: 'linear',
                slideshowSpeed : 5000,
                animationSpeed : 1000,
                controlNav: false,
                directionNav: false,
                keyboard: false,
                pauseOnAction: false,
                touch: false
            });
        }
        
        
        /** Hero - BG Particles */
        var heroBgStatic = 'hero-bg-static',
            heroBgParallax = 'hero-bg-parallax',
            heroBgSlideshow = 'hero-bg-slideshow';
        
        bgParticles(heroBgStatic);
        bgParticles(heroBgParallax);
        bgParticles(heroBgSlideshow);
        
        function bgParticles(elem){
            if ($('#' + elem).length){
                particlesJS.load(elem, 'assets/js/particles.json');
            }
        }
        
        
        /** Gallery - Grid */
        if ($.fn.imagesLoaded && $.fn.isotope){
            $galleryGrid.imagesLoaded(function(){
                $galleryGrid.isotope({
                    itemSelector: '.item',
                    layoutMode: 'masonry'
                });
            });
        }
        
        
        /** Gallery - Magnific popup */
        if ($.fn.magnificPopup){
            $galleryGrid.magnificPopup({
                delegate: 'a',
                type: 'image',
                mainClass: 'mfp-fade',
                gallery:{
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,2],
                    tPrev: 'Previous',
                    tNext: 'Next',
                    tCounter: '<span class="mfp-counter-curr">%curr%</span> of <span class="mfp-counter-total">%total%</span>'
                }
            });
        }
        
        
        /** Countdown */
        if ($.fn.countdown){
            var $clock = $('#clock'),
                untilDate = $clock.data('until-date');

            $clock.countdown(untilDate, function(e){
                $(this).html(e.strftime(''
                    + '<div class="col-4 col-sm-3 col-lg-2 border-gray-300 border-right text-center"><span class="d-block font-alt letter-spacing-1 text-base-color text-uppercase title-large title-sm-extra-large title-lg-extra-large">%D</span><span class="d-block font-alt2 text-gray-700 text-medium text-md-large">Days</span></div>'
                    + '<div class="col-4 col-sm-3 col-lg-2 border-gray-300 border-right text-center"><span class="d-block font-alt letter-spacing-1 text-base-color text-uppercase title-large title-sm-extra-large title-lg-extra-large">%H</span><span class="d-block font-alt2 text-gray-700 text-medium text-md-large">Hours</span></div>'
                    + '<div class="col-4 col-sm-3 col-lg-2 border-gray-300 border-sm-right text-center"><span class="d-block font-alt letter-spacing-1 text-base-color text-uppercase title-large title-sm-extra-large title-lg-extra-large">%M</span><span class="d-block font-alt2 text-gray-700 text-medium text-md-large">Minutes</span></div>'
                    + '<div class="col-4 col-sm-3 col-lg-2 d-none d-sm-block text-center"><span class="d-block font-alt letter-spacing-1 text-base-color text-uppercase title-large title-sm-extra-large title-lg-extra-large">%S</span><span class="d-block font-alt2 text-gray-700 text-medium text-md-large">Seconds</span></div>'));
            });
        }
        
        
        /** Carousel */
        if ($.fn.flickity){
            
            /** Carousel - Love Story */
            var $carouselLoveStory = $('#carousel-love-story');
            carouselCustom($carouselLoveStory);
            
            var $flickityPageDots = $carouselLoveStory.find('.flickity-page-dots').children();
            $flickityPageDots.each(function($i){
                var num = ($i + 1 < 10) ? '0' + ($i + 1) : ($i + 1);
                $(this).html('<span class="page" data-index="' + $i + '"><span class="page-dots far fa-heart"></span><span class="page-number font-alt2 text-medium text-sm-extra-large">' + num + '</span></span>');
            });
            
            var $flickityPageNumber = $flickityPageDots.find('.page');
            $flickityPageNumber.on('click', function(){
                var index = $(this).data('index');
                $carouselLoveStory.flickity('select', index);
            });
            
            
            /** Carousel - Family */
            var $tabFamily = $('#tab-family'),
                $carouselFamily1 = $('#carousel-family-1') ;
        
            carouselCustom($carouselFamily1);
            
            $tabFamily.find('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                var $carousel = $('#carousel-' + $(this).attr('aria-controls'));
                if(!$carousel.data('flickity')){
                    carouselCustom($carousel);
                }
            });
        
            carouselCustom($carouselFamily1);
            
            
            /** Carousel - Bridesmaid & Groomsmen */
            var $carouselBridesmaid = $('#carousel-bridesmaid'),
                $carouselGroomsmen = $('#carousel-groomsmen');
        
            carouselCustom($carouselBridesmaid);
            carouselCustom($carouselGroomsmen);
        }
        
        
        /** Carousel Custom */
        function carouselCustom($elem){
            $elem.flickity({
                cellSelector: '.carousel-cell',
                cellAlign: 'left',
                contain: true,
                prevNextButtons: $elem.data('prev-next-buttons'),
                pageDots: $elem.data('page-dots'),
                draggable: $elem.data('draggable'),
                autoPlay: $elem.data('autoplay'),
                imagesLoaded: true,
                pauseAutoPlayOnHover: false,
                wrapAround: $elem.data('wrap-around')
            });
            
            if ($elem.data('autoplay')){
                var flkty = $elem.data('flickity');
                $elem.find('.flickity-prev-next-button').on('mouseleave', function(){ 
                    flkty.playPlayer(); 
                });
            }
        }
        
        
        /** Form - RSVP */
        var $formRSVP = $('#form-rsvp'),
            $btnFormRSVP = $('#btn-form-rsvp');
        
        $btnFormRSVP.on('click', function(e){
            e.preventDefault();
            $formRSVP.validate();
            if ($formRSVP.valid()){
                send_mail($formRSVP, $btnFormRSVP);
            }
        });
        
        // Send mail
        function send_mail($form, $btnForm){
            var defaultMessage = $btnForm.html(),
                sendingMessage = 'Loading...',
                errorMessage = 'Error Sending!',
                okMessage = 'Email Sent!';
            
            $btnForm.html(sendingMessage);
            
            $.ajax({
                url: $form.attr('action'),
                type: 'post',
                dataType: 'json',
                data: $form.serialize(),
                success: function(data){
                    if (data === true){
                        $btnForm.html(okMessage);
                        $form.find('input[type="text"], input[type="email"], select, textarea').val('');
                    }
                    else{
                        $btnForm.html(errorMessage);
                    }

                    setTimeout(function(){
                        $btnForm.html(defaultMessage);
                    }, 3000);
                },
                error: function(xhr, err){
                    $btnForm.html(errorMessage);

                    setTimeout(function(){
                        $btnForm.html(defaultMessage);
                    }, 3000);
                }
            });
        }
    });
})(jQuery);