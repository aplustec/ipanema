/*
    Document   : style
    Created on : March 01, 2012
    Author     : alixira.com
    Description: jQuery plugins initialization
*/


$(document).ready(function() {
    
    //superfish
    $("ul.sf-menu").superfish({
        animation:   {
            height:"show"
        },
        speed: "slow",
        autoArrows: true,
        dropShadows: false
    });
    
    //Amazing Swing slider
    if ($("#amazingSwing").length > 0){//check if dom element exists
        $("#amazingSwing").cycle({
            fx: "scrollRight",
            easing: "easeInOutExpo", //easeOutQuad
            before: cycleBefore,
            after: cycleAfter,
            speed: 950,
            timeout: 7500,
            cleartypeNoBg: true,
            pager: "#cycleSliderNav"
        });
        $("#amazingSwingToggle").bind("click", function() {
            if ($(this).attr("class") == "play") {
                $(this).attr("class", "pause");
                $("#amazingSwing").cycle("resume", true);
                return false;
            } else {
                $(this).attr("class", "play");
                $("#amazingSwing").cycle("pause");
                return false;
            }
        });
    }
    function cycleBefore(currSlideElement, nextSlideElement, options, forwardFlag) {
        $(nextSlideElement).find("#amazingSwing .amazing_swing_image_1").css({
            "display": "none",
            "left": "-1240px"
        });
        $(nextSlideElement).find(".amazing_swing_image_2").css({
            "display": "none",
            "right": "-1240px"
        });
        $(nextSlideElement).find(".amazing_swing_title").css({
            "display": "none",
            "left": "-1240px"
        });
        $(nextSlideElement).find(".amazing_swing_text").css({
            "display": "none",
            "right": "-1240px"
        });
    }
    function cycleAfter(currSlideElement, nextSlideElement, options, forwardFlag) {
        $(this).find("#amazingSwing .amazing_swing_image_1").css({
            "display": "block"
        }).delay(50).animate({
            "left": "10px",
            "opacity": 1
        }, 700);
        $(this).find(".amazing_swing_image_2").css({
            "display": "block"
        }).delay(150).animate({
            "right": "10px",
            "opacity": 1
        }, 700);
        $(this).find(".amazing_swing_title").css({
            "display": "block"
        }).delay(550).animate({
            "left": "10px",
            "opacity": 1
        }, 500);
        $(this).find(".amazing_swing_text").css({
            "display": "block"
        }).delay(700).animate({
            "right": "10px",
            "opacity": 1
        }, 600);
    }

    //nivoSlider
    $('#slider').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 5000, //5000 How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel: true, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav: true, // Use left & right arrows
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        captionOpacity: 1, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
    

    //form elements focus
    $('.form_input').blur( function() {
        $(this).removeClass('form_focus');
    }).focus( function() {
        $(this).addClass('form_focus');
    });
    $('.footer_email').blur( function() {
        $(this).removeClass('footer_email_focus');
    }).focus( function() {
        $(this).addClass('footer_email_focus');
    });

    //alixira rollover
    $("div.image_container").imageHover();
    $("a[rel^='iconHover']").iconHover();
    $("div.paragraph_hover").paragraphHover();
    $("a.button_with_image").imageButtonHover();

    //prettyPhoto
    $().prettyPhoto({
        theme: 'light_rounded'
    });
    
    //services slider
    var servicesSliderElements = $('#servicesSliderElements').bxSlider({
        controls: false,
        auto: false,
        easing: "easeInOutCirc",
        displaySlideQty: 4,
        moveSlideQty: 4,
        autoHover: true,
        speed: 2500,
        pause: 12000
    });
    $("#services_slider_prev").click(function(){
        servicesSliderElements.goToPreviousSlide();
        return false;
    });

    $("#services_slider_next").click(function(){
        servicesSliderElements.goToNextSlide();
        return false;
    });
    
    //offers slider
    var offersSliderElements = $('#offersSliderElements').bxSlider({
        controls: false,
        auto: false,
        easing: "easeInOutCirc",
        displaySlideQty: 2,
        moveSlideQty: 2,
        autoHover: true,
        speed: 2500,
        pause: 18000
    });
    $("#offers_slider_prev").click(function(){
        offersSliderElements.goToPreviousSlide();
        return false;
    });
    $("#offers_slider_next").click(function(){
        offersSliderElements.goToNextSlide();
        return false;
    });
    
    //testimonials
    var pageSliderText = $("#pageSliderText").bxSlider({
        controls: false,
        auto: true,
        mode: "vertical",
        autoHover: true,
        speed: 1500,
        pause: 12000
    });

    //accordions
    $("#accordion1,#accordion2,#accordion3").accordion({
        header: "h3",
        autoHeight: false,
        active: false
    });

    //tabs
    $("#tabs1,#tabs2,#tabs3").tabs({
        fx: {
            opacity: 'toggle'
        }
    });

    //masonry layout
    var $layoutContainer = $("#layoutContainer");
    $layoutContainer.masonry({
    
        singleMode: true,
        itemSelector: ".layout_item:not(.invis)",
        animate: true,
        animationOptions: {
            duration: 600,
            queue: false
        }
    });
    $("#layoutFilter a").click(function(){
        var filteredType = ($(this).attr("href")).substr(1);
        $("#layoutFilter").children().each(function(){
            if($(this).hasClass("black_1")){
                if($(this).attr("href") != "#"+filteredType){
                    $(this).removeClass("black_1");
                    $(this).toggleClass("grey_3");
                }
            }else{
                if($(this).attr("href") == "#"+filteredType){
                    $(this).removeClass("grey_3");
                    $(this).toggleClass("black_1");
                }
            }
        });
        if(filteredType == "all"){
            $layoutContainer.children(".invis").toggleClass("invis").fadeIn(600);
        }else{
            $layoutContainer.children().not("."+filteredType+"").not(".invis").toggleClass("invis").fadeOut(600);
            $layoutContainer.children("."+filteredType).each(function(){
                if($(this).hasClass("invis")){
                    $(this).toggleClass("invis").fadeIn(600);
                }
            });
        }
        $layoutContainer.masonry();
    });

    $('#layoutContainer2').masonry({
        itemSelector: '.layout_item',
        columnWidth: 200
    });

    //contact form
    $("#sendButton").click(function(){
        $(this).parents('form').submit();
        return false;
    });
    $("#commentForm").validate({
        errorPlacement: function(error, element) {
            error.appendTo(element.prev());
        },
        submitHandler: function(form) {
            ajaxSendForm(form);
            return false;
        }
    });
    
    //scroll to top
    jQuery('#scrollToTop').click(function () {
        if (!jQuery.browser.opera) {
            jQuery('body').animate({
                scrollTop: 0
            }, {
                queue: false,
                duration: 1000
            })
        }
        jQuery('html').animate({
            scrollTop: 0
        }, {
            queue: false,
            duration: 1000
        });
        return false
    });
    
    //tweet box
    $(".home_tweets_box_text").tweet({
        username: "envato",
        join_text: "auto",
        avatar_size: 0,
        count: 10,
        auto_join_text_default: "we said,",
        auto_join_text_ed: "we",
        auto_join_text_ing: "we were",
        auto_join_text_reply: "we replied to",
        auto_join_text_url: "we were checking out",
        loading_text: "loading tweets..."
    }).ajaxStop(function(){
        $(".home_tweets_box_text").vTicker({
            speed: 500,
            pause: 10000,
            showItems: 1,
            animation: "fade",
            mousePause: true,
            height: 44,
            direction: "up"
        });
    });
    
    //tabSlideOut FOR STYLE VARIATIONS
    $(".style_variations_slide_out").tabSlideOut({
        tabHandle: ".style_variations_tab",                     //class of the element that will become your tab
        pathToTabImage: "images/style_variations_tab.png", //path to the image for the tab //Optionally can be set using css
        imageHeight: "172px",                     //height of tab image           //Optionally can be set using css
        imageWidth: "38px",                       //width of tab image            //Optionally can be set using css
        tabLocation: "left",                      //side of screen where tab lives, top, right, bottom, or left
        speed: 300,                               //speed of animation
        action: "click",                          //options: 'click' or 'hover', action to trigger animation
        topPos: "10px",                          //position from the top/ use if tabLocation is left or right
        leftPos: "20px",                          //position from left/ use if tabLocation is bottom or top
        fixedPosition: true                      //options: true makes it stick(fixed position) on scroll
    });
});



function ajaxSendForm(form) {
    var $ = jQuery;

    $("#loader").fadeIn();

    var formData = $(form).serialize(),
    note = $("#note");

    $.ajax({
        type: "POST",
        url: "send-mail.html",	// The path to "send-mail.html"
        data: formData,
        success: function(response) {
            if ( note.height() ) {
                note.fadeIn("fast", function() {
                    $(this).hide();
                });
            } else {
                note.hide();
            }

            $("#loadingGraphic").fadeOut("fast", function() {
                if (response.indexOf("success") != -1) {
                    if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) <= 8) {
                        $("#sendingButtonAndLoader").css("display","none");
                    } else {
                        $("#sendingButtonAndLoader").animate({
                            "opacity": 0,
                            "height": "0px"
                        },"fast");
                    }
                }

                result = "";
                c = "";
                if (response === "success") {
                    result = "Your message has been sent. Thank you!";
                    c = "success";
                } else {
                    result = response;
                    c = "error";
                }

                note.removeClass("success").removeClass("error").text("");
                var i = setInterval(function() {
                    if ( !note.is(":visible") ) {
                        note.html(result).addClass(c).slideDown("fast");
                        clearInterval(i);
                    }
                }, 40);
            });
        }
    });

    return false;
}