jQuery(document).ready(function () {

(function($) {
    
  var allPanels = $('.group-level-1 .view-grouping-content').hide();
  var nestedPanels = $('.group-level-1 .view-grouping-content > .views-row').hide();
    
  $('.group-level-1 .view-grouping-header > .accordion-title').click(function() {
      $this = $(this);
      $target =  $this.parent().next();

      if(!$target.hasClass('active')){
         allPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown();
      }
      
    return false;
  });
    
  $('.group-level-1 .view-grouping-content > .nested-title').click(function() {
      $this = $(this);
      $target =  $this.next();

      if(!$target.hasClass('active')){
         nestedPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown();
      }
      
    return false;
  });

})(jQuery);


});
