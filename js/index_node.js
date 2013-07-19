jQuery(document).ready(function () {

(function($) {
    
  var allPanels = $('.group-level-1 .view-grouping-content').hide();
  var nestedPanels = $('.group-level-1 .view-grouping-content .views-row').hide();
    
  $('.group-level-1 .view-grouping-header > h2').click(function() {
      $this = $(this);
      $target =  $this.parent().next();

      if(!$target.hasClass('active')){
         allPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown();
      }
      
    return false;
  });
    
  $('.group-level-1 .view-grouping-content > h3').click(function() {
      $this = $(this);
      $target =  $this.parent().next();

      if(!$target.hasClass('active')){
         nestedPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown();
      }
      
    return false;
  });

})(jQuery);


});
