<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 11:42 AM
 */
function content_shortcode_image($atts, $content = null)
{
    $stringHtml = '<figure>';
    if(isset($atts['src'])) {
        $stringHtml .= '<img src="' . $atts['src'] . '" alt="" />';
    }
    $stringHtml .= '<figcaption>' . do_shortcode($content) . '</figcaption></figure>';
    return $stringHtml;
}
add_shortcode( 'image', 'content_shortcode_image' );