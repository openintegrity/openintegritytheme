jQuery(document).ready(function () {

//  	jQuery(".view-entry .group-level-1 .view-grouping-content").hide();
//    jQuery(".view-entry .group-level-1 .view-grouping-header").show();
//  jQuery(".view-entry .group-level-1 .view-grouping-header").click(function(){
//    jQuery(".view-entry .group-level-1 .view-grouping-content").slideToggle();
//  });


    jQuery('.group-level-1 .view-grouping-content').hide();

    jQuery('.group-level-1 .view-grouping-header').click(function() {
        jQuery(this).next('div:hidden').slideDown('fast').siblings('div:visible').slideUp('fast');
    });




});