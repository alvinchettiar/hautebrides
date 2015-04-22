jQuery(document).ready(function($) {
 
    $('#sticky-sidebar').stickyMojo({footerID: '#footer', contentID: '#main'});
 // Back to Top

$("#back-top").hide(); 

// fade in #back-top

  $(function () {

    $(window).scroll(function () {

      if ($(this).scrollTop() > 400) { 

        $('#back-top').fadeIn();

      } else {

        $('#back-top').fadeOut();

      }

    })    });

// Backto Top 

    $('#back-top a').click(function () {

      $('body,html').animate({

        scrollTop: 0

      }, 400); 

      return false; 

    });

	
$(".posts").perfectScrollbar({
  wheelPropagation: true,
  minScrollbarLength: 1
});


// Mobile Menu Starts

$('<select />').appendTo('#mobile-menu');

$('<option />', {

    'selected': 'selected',

    'value'   : '',

    'text'    : 'Navigate...'

}).appendTo('#mobile-menu select');

$('.menu-primary li a').each(function() {

    var el = $(this);

    if(el.parents('.sub-menu ').length) {

        $('<option />', {

            'value': el.attr('href'),

            'text':  '-' + el.text()

        }).appendTo('nav select'); 

    } else {

        $('<option />', {

            'value': el.attr('href'),

            'text': el.text()

        }).appendTo('nav select');

    }

});

$('#mobile-menu select').change(function() { 

    window.location = $(this).find('option:selected').val();

});

// Mobile Menu Ends

// Header Drop Down For Social, Trending, Search and Navigate

  $("#social-dropdown > li > a").click(function (e) { // binding onclick

        if ($(this).parent().hasClass('selected')) {

            $("#social-dropdown .selected div div").slideUp(30); // hiding popups

            $("#social-dropdown .selected").removeClass("selected");

        } else {

            $("#social-dropdown .selected div div").slideUp(30); // hiding popups

            $("#social-dropdown .selected").removeClass("selected");



            if ($(this).next(".subs").length) {

                $(this).parent().addClass("selected"); // display popup

                $(this).next(".subs").children().slideDown(30); 

            }

        }

        e.stopPropagation();

    }); 

    $("#closemenu, #closemenu1, #closemenu2, #closemenu3").click(function () { // binding onclick to body

        $("#social-dropdown .selected div div").slideUp(100); // hiding popups

        $("#social-dropdown .selected").removeClass("selected");

    })

     

// Header Drop Down For Social, Trending, Search and Navigate

  $("#nav1 > li > a").click(function (e) { // binding onclick

        if ($(this).parent().hasClass('selected')) {

            $("#nav1 .selected div div").slideUp(70); // hiding popups

            $("#nav1 .selected").removeClass("selected");

        } else {

            $("#nav1 .selected div div").slideUp(70); // hiding popups

            $("#nav1 .selected").removeClass("selected");



            if ($(this).next(".subs").length) {

                $(this).parent().addClass("selected"); // display popup

                $(this).next(".subs").children().slideDown(70);

            }

        }

        e.stopPropagation();

    }); 

    $("#closemenu, #closemenu1, #closemenu2, #closemenu3").click(function () { // binding onclick to body

        $("#nav1 .selected div div").slideUp(70); // hiding popups

        $("#nav1 .selected").removeClass("selected");

    })



 }); 