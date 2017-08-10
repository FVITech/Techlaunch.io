jQuery(function($){

  selectAccurateHero();
  $(window).on('resize', function(){
    selectAccurateHero();
  });



  function selectAccurateHero(){
    if(isMobile()){
      $('#hero .hero-wrapper img').attr('src', 'images/heroMobile.jpg');
    } else {
      $('#hero .hero-wrapper img').attr('src', 'images/hero.jpg');
    }
  }

});


function isDesktop(){
  return window.matchMedia("(min-width: 992px)").matches;
}

function isMobile(){
  return window.matchMedia("(max-width: 767px)").matches;
}
