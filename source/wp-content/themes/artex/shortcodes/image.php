<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 11:42 AM
 */
function content_shortcode_image($atts, $content = null)
{
    $attributes = shortcode_atts( array(
        'src' => '',
        'alt' => ''
    ), $atts );
    $stringHtml = '<figure>';
    if(!empty($attributes['src'])) {
        $stringHtml .= '<img src="' . $attributes['src'] . '" alt="' . $attributes['alt'] . '" />';
    }
    $stringHtml .= '<figcaption>' . do_shortcode($content) . '</figcaption></figure>';
    return $stringHtml;
}
add_shortcode( 'image', 'content_shortcode_image' );