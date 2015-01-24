$(function() {

      var headerHeight = $('header').height();

      // Initialize smoothscroll
      smoothScroll.init();

      // Slider in the header
      var slider = $('div#slider');

      slider.find('img').hide();
      slider.find('img').first().show();

      setInterval(doCarroussel, 5000);

      function doCarroussel() {
            slider.find('img').first().fadeOut().appendTo(slider);
            slider.find('img').first().fadeIn();
      }

      // Submenu
      $('nav#main-menu li a').on('click', function(e) {
            if ($(this).parent().find('.submenu').addClass('active').length > 0) {


                  e.preventDefault();
                  $(this).parent().addClass("hover");
            }
      });





      $('body:not(nav#main-menu>*)').on('click', function(e) {
            if ($('ul.submenu.active').length > 0 && !$(e.target).is('.submenu') && !$(e.target).is('nav#main-menu li.hover a') && !$(e.target).closest('.submenu').length) {
                  $('nav#main-menu li.hover').removeClass('hover');
            }
      });

      // Fancybox
      $('a.fancybox').fancybox({
            openSpeed: 'fast',
            closeSpeed: 'fast',
            prevSpeed: 'normal',
            nextSpeed: 'normal',
            prevEffect: 'fade',
            nextEffect: 'fade',
            closeClick: false,
            helpers: {
                  title: {
                        type: 'over'
                  }
            },
            beforeShow: function() {

                  console.log(this.title);


                  if (this.title) {
                        // New line
                        this.title += '<br />';

                  }




                  var setURL = URL + '/' + LANG + '?p=1157&item=' + this.element.context.rel;


                  console.log('UR', this.element.context.rel);


                  // Add tweet button
                  this.title += '<a href="' + setURL + '" class="intresse" data-count="none" data-url="' + setURL + '">Intresse in dit object?</a> ';

            },

            padding: 5
      });

    $('ul.contact-icons li.telephone a').on('click', function(e) {e.preventDefault()});

      $('.filter').on('click', function() {

            var id = $(this).attr('id');

          $('.filter').removeClass('active');

          $(this).addClass('active');

            console.log('id', id);

            // $('.antiek-filters div').removeClass('hide');

            if (id != 'all') {

                  $('.antiek-filters div').not('.' + id).fadeOut(200);

                  setTimeout(function() {
                        $('.' + id).fadeIn(200);


                        if ($('.' + id).length == 0) {
                              $('.error').fadeIn('slow');
                        } else {
                              $('.error').hide();
                        }

                  }, 200);
            } else {

                  $('.error').hide();

                  $('.antiek-filters div').fadeIn(200);
            }
      });


      console.log($('.hidden-image img').attr('src'));

      $('#step2').find('#input_8_17').val($('.hidden-image img').attr('src'));

      $('.hidden-image img').clone().appendTo('#step2');





        var conf = setInterval(function() {

            console.log($('.confirmation').text());

            if($('.confirmation').text() !== '') {

                setTimeout(function() {
                    $('.confirmation').slideUp('slow').text('').slideDown('slow');
                }, 5000);

                clearInterval(conf);
            }

        }, 1000);



});

