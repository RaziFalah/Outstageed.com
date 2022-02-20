
 /* jQuery Pre loader
  -----------------------------------------------*/
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets    
});


$(document).ready(function() {

  /* Home Slideshow Vegas
  -----------------------------------------------*/
  $(function() {
    $('body').vegas({
        slides: [
            { src: 'images/1.png' },
            { src: 'images/2.png' },
            { src: 'images/3.png' },
            { src: 'images/4.png' },
            { src: 'images/5.png' },
            { src: 'images/6.png' },
            { src: 'images/7.png' },
            { src: 'images/8.png' },
            { src: 'images/9.png' },
            { src: 'images/11.png' },
            { src: 'images/12.png' },
            { src: 'images/13.png' },
            { src: 'images/14.png' },
            { src: 'images/15.png' },
            { src: 'images/16.png' },
            { src: 'images/17.png' },
            { src: 'images/18.png' },
            { src: 'images/19.png' },
            { src: 'images/20.png' },
            { src: 'images/1.png' }
        ],
        timer: false,
        transition: [ 'zoomOut', ]
    });
  });


   /* Back top
  -----------------------------------------------*/
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
        });   
        // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })
      

  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();

  });

