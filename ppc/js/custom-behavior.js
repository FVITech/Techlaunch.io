jQuery(function($){

  $('#header .phone-wrapper').on('click', function(){
    if(isDesktop()){
      location.href = $('#header .phone-wrapper a').attr('href');
    }
  });


  var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
  var animatedNumbers = false;

  animateStaticsNumbers();
  $(window).on('scroll', function(){
    animateStaticsNumbers()
  });


  function animateStaticsNumbers(){

    var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
    if(navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1) || isFirefox){
      // IE 5-11
      $('#statics .statics-block').css('opacity', '1');
      $('#statics #statics-salary').text('66,130');
      $('#statics #statics-job').text('148,500');
      $('#statics #statics-annual').text('27');
    }
    else {
      if(document.body.scrollTop >= ($('#statics').offset().top - $(window).height() + 100) && !animatedNumbers){
        $('#statics .statics-block').css('opacity', '1');

        $('#statics-salary').animateNumber({ number: 66130, numberStep: comma_separator_number_step, easing: 'easeOutExpo' }, 2000);
        $('#statics-job').animateNumber({ number: 148500, numberStep: comma_separator_number_step, easing: 'easeOutExpo' }, 2000);
        $('#statics-annual').animateNumber({ number: 27, numberStep: comma_separator_number_step, easing: 'easeOutExpo' }, 2000);

        animatedNumbers = true;
      }
    }
  }


  $('#expect .enroll-form-wrapper input').on('change', function(){
    if($(this).val().length === 0 || !$(this).val().trim()){
      $(this).removeClass('not-empty');
    } else {
      $(this).addClass('not-empty');
    }
  });

  $('#federal-aid input').on('change', function(){
    if($(this).val().length === 0 || !$(this).val().trim()){
      $(this).removeClass('not-empty');
    } else {
      $(this).addClass('not-empty');
    }
  });

  $('#expect .enroll-form-wrapper input[type="number"]').bind('keyup mouseup', function () {
    if($(this).val().length === 0 || !$(this).val().trim()){
      $(this).removeClass('not-empty');
    } else {
      $(this).addClass('not-empty');
    }
  });

  $('#federal-aid input[type="number"]').bind('keyup mouseup', function () {
    if($(this).val().length === 0 || !$(this).val().trim()){
      $(this).removeClass('not-empty');
    } else {
      $(this).addClass('not-empty');
    }
  });


  $('#learnTabs').easyResponsiveTabs({
    tabidentify: 'vert',
    activetab_bg: '#FFFFFF',
    inactive_bg: '#DCDCDC'
  });


  function learnHeroHandling(){
    if(isTablet()){
      $('#learn .learnHero').attr('src', 'images/learnHeroTablet.jpg');
    } else {
      if(!isMobile()){
        $('#learn .learnHero').attr('src', 'images/learnHero.jpg');
      }
    }
  }

  learnHeroHandling();
  $(window).on('resize', function(){
    learnHeroHandling();
    resetActiveTab();
    graduateAlignment();
    adjustBootcampHeight();
  });


  function resetActiveTab(){
    if(isDesktop()){
      var activeTab = $('#learn .resp-tab-active').length;
      if(activeTab <= 1){
        $('#learn .resp-tabs-list li:first-child').addClass('resp-tab-active');
        $('#learn .resp-tabs-container h2:first-child').addClass('resp-tab-active');
        $('#learn .resp-tabs-container h2.resp-tab-active').next().addClass('resp-tab-content-active');
      }
    }
  }

  graduateAlignment();
  function graduateAlignment(){
    if(isDesktop()){
      var modelMarginLeft = $('.model-container').css('margin-left');
      modelMarginLeft = parseInt(modelMarginLeft);
      modelMarginLeft += 15;
      $('#graduate .content-wrapper').css('padding-left', modelMarginLeft + 'px');
      $('#graduate .content-wrapper').css('height', $('#graduate .image-wrapper').css('height'));
    } else {
      $('#graduate .content-wrapper').css('padding-left', '30px');
      $('#graduate .content-wrapper').css('padding-right', '30px');
      $('#graduate .content-wrapper').css('height', 'auto');
    }
  }


  adjustBootcampHeight();
  function adjustBootcampHeight(){
    var rowHeight = $('#bootcamp .row').css('height');
    if(isDesktop()){
      $('#bootcamp .col-content-text').css('height', rowHeight);
    } else {
      $('#bootcamp .col-content-text').css('height', 'auto');
    }
  }



  $("form").submit(function(e) {
    console.log('hello');
    var ref = $(this).find("[required]");
    $(ref).each(function(){
        if ( $(this).val() == '' )
        {
          alert("Required field should not be blank.");
          $(this).focus();
          e.preventDefault();
          return false;
        }
    }); return true;
  });


});


function isDesktop(){
  return window.matchMedia("(min-width: 992px)").matches;
}

function isTablet(){
  return window.matchMedia("(max-width: 991px)").matches;
}

function isMobile(){
  return window.matchMedia("(max-width: 767px)").matches;
}
