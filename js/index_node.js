jQuery(document).ready(function () {

//  	jQuery(".view-entry .group-level-1 .view-grouping-content").hide();
//    jQuery(".view-entry .group-level-1 .view-grouping-header").show();
//  jQuery(".view-entry .group-level-1 .view-grouping-header").click(function(){
//    jQuery(".view-entry .group-level-1 .view-grouping-content").slideToggle();
//  });

 //   jQuery('.group-level-1 .view-grouping-content').hide();
 //   jQuery('.group-level-1 .view-grouping-header').click(function() {
 //       jQuery(this).next('div:hidden').slideDown('fast').siblings('div:visible').slideUp('fast');
 //   });

(function($) {
    
  var allPanels = $('.group-level-1 .view-grouping-content').hide();
    
  $('.group-level-1 .view-grouping-header > h2').click(function() {
      $this = $(this);
      $target =  $this.parent().next();

      if(!$target.hasClass('active')){
         allPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown();
      }
      
    return false;
  });

  var allPanels2 = $('.group-level-1 .views-row').hide();
    
  $('.group-level-1 .view-grouping-content > h3').click(function() {
      $this2 = $(this);
      $target2 =  $this2.parent().next();

      if(!$target2.hasClass('active')){
         allPanels2.removeClass('active').slideUp();
         $target2.addClass('active').slideDown();
      }
      
    return false;
  });

})(jQuery);


});
