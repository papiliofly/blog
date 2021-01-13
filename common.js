console.clear();
function MobileTopBar__init() {
  $('.mobile-top-bar__btn-toggle-side-bar').click(function() {
    let $this = $(this);
    
    if ( $this.hasClass('active') ) {
      $this.removeClass('active');
      $('.mobile-side-bar').removeClass('active');
    }
    else {
      $this.addClass('active');
      $('.mobile-side-bar').addClass('active');
    }
  });
}

MobileTopBar__init();


const $cursor = $('.cursor');
const $cursorSahdow = $('.cursor-shadow');

$(window).mousemove(function(e) {
  $cursor.css({
    top:e.clientY,
    left:e.clientX
  });
  
  $cursorSahdow.css({
    top:e.clientY,
    left:e.clientX
  });
});