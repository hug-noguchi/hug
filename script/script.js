
(function($) {
    $(function() {
        var $header = $('header');
        // Nav Fixed
        // Nav Toggle Button
        $('#nav-toggle,#menu a').click(function(){
            $header.toggleClass('open');
        });
    
    });
})(jQuery);

$(function() {
  var $win = $(window),
      $header = $('header'),
      animationClass = 'is-animation';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > 100 ) {
      $header.addClass(animationClass);
    } else {
      $header.removeClass(animationClass);
    }
  });
});

// $(function () {
// var headerHight = $('header').outerHeight();
//  $('a[href^=#]').click(function(){
//      var href= $(this).attr("href");
//        var target = $(href == "#" || href == "" ? 'html' : href);
//         var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
//      $("html, body").animate({scrollTop:position}, 550, "swing");
//         return false;
//    });
// });


var headerHeight = $('header').outerHeight();
var urlHash = location.hash;
if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
        var target = $(urlHash);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({scrollTop:position}, 550, "swing");
    });
}
$('a[href^="#"]').click(function() {
    var href= $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 550, "swing"); 
    return false;  
});


$(function() {
  $('.view_up').on('inview', function(event, isInView) {
    if (isInView) {
    //表示領域に入った時
      $(this).addClass('fadeInUp');
    } 
  });
  $('.sp_view_up').on('inview', function(event, isInView) {
    if (isInView) {
    //表示領域に入った時
      $(this).addClass('sp_fadeInUp');
    } 
  });

  $('.view_left').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('fadeInLeft');
    }
  });
  $('.pc_view_left').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('pc_fadeInLeft');
    }
  });
  $('.pc_view_right').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('pc_fadeInRight');
    }
  });


});


