jQuery('document').ready(function () {
    var photographername = pcr_frontend_ajax_object.pcr_photographer_name;
    var pcr_photographer_platform = pcr_frontend_ajax_object.pcr_photographer_platform;

    var single_status = pcr_frontend_ajax_object.single_status;
    if (single_status == '1') {
        if (photographername && pcr_photographer_platform) {
            jQuery("img.pcr-featured-class").wrap("<div class='pcr_featured_wrap'>");
            jQuery("<span class='pcr-overlay'></span>").insertAfter('img.pcr-featured-class');
            jQuery(".pcr-overlay").html(photographername + ' ' + '|' + ' ' + pcr_photographer_platform);
        }
        else if (photographername) {
            jQuery("img.pcr-featured-class").wrap("<div class='pcr_featured_wrap'>");
            jQuery("<span class='pcr-overlay'></span>").insertAfter('img.pcr-featured-class');
            jQuery(".pcr-overlay").html(photographername);
        }
        else if (pcr_photographer_platform) {
            jQuery("img.pcr-featured-class").wrap("<div class='pcr_featured_wrap'>");
            jQuery("<span class='pcr-overlay'></span>").insertAfter('img.pcr-featured-class');
            jQuery(".pcr-overlay").html(pcr_photographer_platform);
        }
    }
    // jQuery('img').each(function () {
    //     var p_name = jQuery(this).attr('photographer_name');
    //     var p_plat = jQuery(this).attr('photographer_platform');

    //     if (p_name && p_plat) {
    //         jQuery(this).wrap("<div class='pcr_content_wrap'>");
    //         jQuery("<span class='pcr_content_overlay'></span>").insertAfter(this);
    //         jQuery(this).siblings(".pcr_content_overlay").html(p_name + ' ' + '|' + ' ' + p_plat);
    //     }
    //     else if (p_name) {
    //         jQuery(this).wrap("<div class='pcr_content_wrap'>");
    //         jQuery("<span class='pcr_content_overlay'></span>").insertAfter(this);
    //         jQuery(this).siblings(".pcr_content_overlay").html(p_name);
    //     }
    //     else if (p_plat) {
    //         jQuery(this).wrap("<div class='pcr_content_wrap'>");
    //         jQuery("<span class='pcr_content_overlay'></span>").insertAfter(this);
    //         jQuery(this).siblings(".pcr_content_overlay").html(p_plat);
    //     }


    // });
});

