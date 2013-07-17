jQuery(document).ready(function () {
	alert( "Works" );
  	jQuery(".view-entry .group-level-1 .view-grouping-content").hide();
    jQuery(".view-entry .group-level-1 .view-grouping-header h2 a").show();
  jQuery(".view-entry .group-level-1 .view-grouping-header h2 a").click(function(){
    jQuery(".view-entry .group-level-1 .view-grouping-content").slideToggle();
  });
});