jQuery(document).ready(function () {

(function($) {
    
  var allPanels = $('.group-level-1 .view-grouping-content').hide();
  var nestedPanels = $('.group-level-1 .view-grouping-content > .views-row').hide();
  
  $('.group-level-1 .view-grouping-header > h2').click(function() {
      $this = $(this);
      $target =  $this.parent().next();

      if(!$target.hasClass('active')){
         allPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown(function() {
//           $('body').animate({scrollTop:$target.offset().top-100},200);
         });
      } else {
        allPanels.removeClass('active').slideUp();
        $target.removeClass('active').slideUp();
      }
  });
    
  $('.group-level-1 .view-grouping-content > h3').click(function() {
      $this = $(this);
      $target =  $this.next();
      $evidence = $(this).next().children('.claim-evidence');
      
      if(!$target.hasClass('active')){
         nestedPanels.removeClass('active').slideUp();
         var enid = $evidence.attr('id');
         $.get("https://openintegrity.org/claim/"+enid+"/evidences", function(data) {
           $evidence.html($evidence.html() + data);
           $target.addClass('active').slideDown(function() {
             $('body').animate({scrollTop:$target.offset().top-100},200);
           });
         });
         window.location.hash = $this.attr('id');
      } else {
//        nestedPanels.removeClass('active').slideUp();
        $target.removeClass('active').slideUp(function() {
           $('body').animate({scrollTop:$target.offset().top-100},200);
         });
        window.location.hash = '';
      }
  });

  if ( window.location.hash ) {
      $(window.location.hash).parent().parent().children('.view-grouping-header').children('h2').click(); 
      $(window.location.hash).delay(0).click();
//      $(window.location.hash).click().parent().parent().children('.view-grouping-header').children('h2').click();
  }
    

})(jQuery);


});
