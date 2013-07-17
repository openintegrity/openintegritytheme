jQuery(document).ready(function () {

//  	jQuery(".view-entry .group-level-1 .view-grouping-content").hide();
//    jQuery(".view-entry .group-level-1 .view-grouping-header").show();
//  jQuery(".view-entry .group-level-1 .view-grouping-header").click(function(){
//    jQuery(".view-entry .group-level-1 .view-grouping-content").slideToggle();
//  });


    jQuery('.view-entry .group-level-1 .view-grouping-content').hide();

    jQuery('.view-entry .group-level-1 .view-grouping-header').click(function() {
        jQuery(this).next('.view-entry div:hidden').slideDown('fast').siblings('div:visible').slideUp('fast');
    });




});