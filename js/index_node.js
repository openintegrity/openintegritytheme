jQuery(document).ready(function () {

(function($) {
    
  var allPanels = $('.group-level-1 .view-grouping-content');
  var nestedPanels = $('.group-level-1 .view-grouping-content > .views-row');
  
  $('.group-level-1 .view-grouping-header > h2').click(function() {
      $this = $(this);
      $target =  $this.parent().next();

      if(!$target.hasClass('active')){
         allPanels.removeClass('active').slideUp();
         nestedPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown(function() {
           $this.parents('.view-content').find('.claim-evidence').empty();
         });
      } else {
        allPanels.removeClass('active').slideUp();
        nestedPanels.removeClass('active').slideUp();
        $target.removeClass('active').slideUp(function() {
          $this.parents('.view-content').find('.claim-evidence').empty();
	});
      }
  });
    
  $('.group-level-1 .view-grouping-content > h3').click(function() {
      $this = $(this);
      $target =  $this.next();
      $evidence = $(this).next().children('.claim-evidence');
      
      if(!$target.hasClass('active')){
         nestedPanels.removeClass('active').slideUp();
         var enid = $evidence.attr('id');
         $.get("/claim/"+enid+"/evidences", function(data) {
           $evidence.html(data);

           
           $target.addClass('active').slideDown(function() {
//             $('body').animate({scrollTop:$target.offset().top-100},200);
           });
         });
         window.location.hash = 'panel-' + $this.attr('id');
      } else {
//        nestedPanels.removeClass('active').slideUp();
        $target.removeClass('active').slideUp(function() {
//           $('body').animate({scrollTop:$target.offset().top-100},200);
	     $this.parents('.view-content').find('.claim-evidence').empty();
         });
//        window.location.hash = '';
      }
  });

  var h = window.location.hash.replace('panel-', '');

  if ( h ) {
      $(h).parent().parent().children('.view-grouping-header').children('h2').click();
      $(h).delay(0).click();
      setTimeout(function() {
       $('body,html').animate({scrollTop:$(h).offset().top}, 200)
      }, 200);
  }
    

})(jQuery);


});
