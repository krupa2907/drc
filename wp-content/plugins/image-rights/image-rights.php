<?php

/**
 * @package Image Rights
 * @author Christian Leuenberg <christian@l-net.biz>
 * @license GPLv3
 * @copyright 2021 by Christian Leuenberg
 */
/*
Plugin Name: Image Rights
Plugin URI: 
Description: Adds additional fields for setting image credits in the media library.
Author: Christian Leuenberg, L.net Web Solutions
Author URI: https://www.l-net.biz/
Version: 1.0
Text Domain: photocredits
Domain Path: /languages/
License: GPLv3

    Image Rights
    Copyright (C) 2021 Christian Leuenberg

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Load plugin textdomain
 *
 */
function pcr_load_textdomain()
{
    load_plugin_textdomain('photocredits', false, basename(dirname(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'pcr_load_textdomain');

/**
 * Load admin styles and scripts
 *
 */
function pcr_load_scripts()
{
    $plugin_url = plugin_dir_url(__FILE__);
    wp_enqueue_style('pcr_styles', $plugin_url . 'css/styles.css');
    wp_register_script('pcr_scripts', $plugin_url . 'js/scripts.min.js', array('jquery'));
    wp_enqueue_script('pcr_scripts');
}
add_action('admin_enqueue_scripts', 'pcr_load_scripts');




/**
 * Load Front styles and scripts
 */

function pcr_load_front_scripts()
{

    global $post;
    if (is_single() || is_page()) {
        $single_status = '1';
    } else {
        $single_status = '0';
    }
    $myfilecss = plugin_dir_url(__FILE__) . 'css/custom.css';
    $realpathcss = plugin_dir_path(__FILE__) . 'css/custom.css';
    wp_enqueue_style('pcr_front_styles', $myfilecss, array(), filemtime($realpathcss), 'all');

    $myfile = plugin_dir_url(__FILE__) . 'js/custom.js';
    $realpath = plugin_dir_path(__FILE__) . 'js/custom.js';
    $post_thumbnail_id = get_post_meta($post->ID, '_thumbnail_id', true);
    $pcr_photographer_name = get_post_meta($post_thumbnail_id, 'pcr_photographer_name', true);
    $pcr_photographer_platform = get_post_meta($post_thumbnail_id, 'pcr_photographer_platform', true);




    wp_enqueue_script('pcr-custom-js', $myfile, array('jquery'), filemtime($realpath), true);

    wp_localize_script(
        'pcr-custom-js',
        'pcr_frontend_ajax_object',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'pcr_photographer_name' => $pcr_photographer_name,
            'pcr_photographer_platform' => $pcr_photographer_platform,
            'single_status' => $single_status
        )
    );
}
add_action("wp_enqueue_scripts", "pcr_load_front_scripts");

/**
 * Add Photographer Name and Platform fields to media uploader
 *
 */
function pcr_attachment_field_credit($form_fields, $post)
{
    $form_fields['pcr-photographer-name'] = array(
        'label' => __('Photographer Name', 'photocredits'),
        'input' => 'text',
        'value' => get_post_meta($post->ID, 'pcr_photographer_name', true),
        'helps' => __('Provide name of photographer', 'photocredits'),
    );

    $form_fields['pcr-photographer-platform'] = array(
        'label' => __('Platform', 'photocredits'),
        'input' => 'text',
        'value' => get_post_meta($post->ID, 'pcr_photographer_platform', true),
        'helps' => __('Provide name of platform (e.g. Adobe Stock)', 'photocredits'),
    );

    return $form_fields;
}
add_filter('attachment_fields_to_edit', 'pcr_attachment_field_credit', 10, 2);

/**
 * Save values of Photographer Name and URL in media uploader
 *
 */
function pcr_attachment_field_credit_save($post, $attachment)
{
    if (isset($attachment['pcr-photographer-name'])) :
        update_post_meta($post['ID'], 'pcr_photographer_name', $attachment['pcr-photographer-name']);
    endif;

    if (isset($attachment['pcr-photographer-platform'])) :
        update_post_meta($post['ID'], 'pcr_photographer_platform', $attachment['pcr-photographer-platform']);
    endif;

    return $post;
}
add_filter('attachment_fields_to_save', 'pcr_attachment_field_credit_save', 10, 2);

/**
 * Function for querying media library
 *
 */
function pcr_get_media()
{
    // Query arguments
    $args = array(
        'post_type'         => 'attachment',
        'post_status'       => 'inherit',
        'post_mime_type'    => 'image',
        'meta_query'        => array(
            'relation'      => 'OR',
            array(
                'key'       => 'pcr_photographer_name',
                'value'     => array(''),
                'compare'   => 'NOT IN'
            ),
            array(
                'key'       => 'pcr_photographer_platform',
                'value'     => array(''),
                'compare'   => 'NOT IN'
            ),
        ),
        'posts_per_page'    => -1,
        'orderby'           => 'name',
    );

    // Query
    $query_images = new WP_Query($args);

    // Put desired information into output
    $images = array();
    foreach ($query_images->posts as $image) {
        $images[] = $image;
    }

    return $images;
}

/**
 * Shortcode for displaying photo credits
 *
 */
function pcr_shortcode_photo_credits($atts)
{
    // Attributes
    extract(shortcode_atts(array(
        'fields' => '',
    ), $atts));

    // init some vars
    $html = '';
    $the_images = pcr_get_media();

    // images found?
    if ($the_images) {

        $html .= '<table class="table photo-credits-table">';
        $html .= '<thead><tr><th style="width:25%;">' . __('Image', 'photocredits') . '</th><th>' . __('Image rights', 'photocredits') . '</th></tr></thead>';
        $html .= '<tbody>';

        // loop over images with our meta fields
        foreach ($the_images as $image) {

            // get meta information
            $meta_photographer      = get_post_meta($image->ID, 'pcr_photographer_name', true);
            $meta_platform          = get_post_meta($image->ID, 'pcr_photographer_platform', true);

            // puzzle the markup
            $html .= '<tr><td>';
            $html .= '<img src="' . wp_get_attachment_thumb_url($image->ID) . '" alt="' . $image->post_title . '" title="' . $image->post_title . '" class="image wp-image-' . $image->ID . ' attachment-thumbnail size-thumbnail img-thumbnail">';
            $html .= '</td><td>';
            $html .= '<p>';

            if (!empty($meta_photographer)) :
                $html .= __('Photographer', 'photocredits') . ': ' . $meta_photographer;
                $html .= '<br>';
            endif;

            if (!empty($meta_platform_defaults)) :
                $html .= __('Platform', 'photocredits') . ': ' . $meta_platform_defaults;
            elseif (!empty($meta_platform)) :
                $html .= __('Platform', 'photocredits') . ': ' . $meta_platform;
            endif;

            $html .= '</p>';
            $html .= '</td></tr>';
        }

        $html .= '</tbody></table>';
    }

    // output the html markup
    return $html;
}
add_shortcode('photo_credits', 'pcr_shortcode_photo_credits');







/**
 * 
 * Add class in post Featured images
 * $class name : pcr-featured-class
 * $function : pcr_add_class_featured_images
 *
 * */


if ( in_array('image-rights/image-rights.php', apply_filters('active_plugins', get_option('active_plugins'))) ) {

    function pcr_add_class_featured_images( $attr ) {
        remove_filter('wp_get_attachment_image_attributes', 'pcr_add_class_featured_images');
        $attr['class'] .= ' pcr-featured-class';
        return $attr;
    }

    add_filter('wp_get_attachment_image_attributes', 'pcr_add_class_featured_images',10);

    function add_custom_script()
    {
?>
        <script>
            (function(jQuery) {
                jQuery('.single .entry-content').find('img').each(function() {
                    jQuery(this).addClass(' pcr-content-class');
                });
            })(jQuery);
        </script>
<?php
    }
    add_action('wp_footer', 'add_custom_script');
}

// send custom attribute to content images
// add_filter(
//     'image_send_to_editor',
//     function ($html, $id, $caption, $title, $align, $url, $size, $alt) {
       
//         if ($id > 0) {
//             $photographer_name = get_post_meta($id, 'pcr_photographer_name', true);
//             $photographer_platform   = get_post_meta($id, 'pcr_photographer_platform',   true);
//             $data  = sprintf(' photographer_name="%s" ', esc_attr($photographer_name));
//             $data .= sprintf(' photographer_platform="%s" ',   esc_attr($photographer_platform));
//             $html = str_replace("<img src", "<img{$data}src", $html);
//         }
//         return $html;
        
//     },
//     10,
//     8
// );

function myplugin_img_tag_add_border_color( $filtered_image, $context, $attachment_id ) {


     //$img_id = $filtered_image['attrs']['id'];

    //get meta information
    $meta_photographer = get_post_meta($attachment_id, 'pcr_photographer_name', true);
    $meta_platform     = get_post_meta($attachment_id, 'pcr_photographer_platform', true);
    $featured_image = get_the_post_thumbnail_url(get_the_ID(),'medium');
    // init string
    $meta = $meta_photographer . ' | ' . $meta_platform;

    // remove pipe sign if only one meta field present
    if ( str_starts_with($meta, ' | ') || str_ends_with($meta, ' | ') ) :
        $meta = str_replace(' | ', '', $meta);
    endif;

    // add layer if meta present
    if ( !empty($meta) ) :
        //  if ( str_contains($featured_image) ) {
        //     $block_content = str_replace('</figcaption>', '</figcaption><span class="pcr_overlay_2">' . $meta . '</span>', $featured_image);
        //     $block_content = '<div class="pcr_content_wrap">' . $featured_image . '</div>';
        // } else {
        //     $block_content = '<div class="pcr_content_wrap">' . $featured_image . '<span class="pcr_overlay_2">' . $meta . '</span></div>';
        // }
        if ( str_contains($filtered_image, 'figcaption') ) {
            $filtered_image = str_replace('</figcaption>', '</figcaption><span class="pcr_overlay_2">' . $meta . '</span>', $filtered_image);
            $filtered_image = '<div class="pcr_content_wrap">' . $filtered_image . '</div>';
        } else {
            $filtered_image = '<div class="pcr_content_wrap">' . $filtered_image . '<span class="pcr_overlay_2">' . $meta . '</span></div>';
        }
    endif;

    // return the block content
    return $filtered_image;

  
}
add_filter( 'wp_content_img_tag', 'myplugin_img_tag_add_border_color', 15, 3 );
 
?>