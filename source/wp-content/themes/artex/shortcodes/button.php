<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 12:50 PM
 */
function content_shortcode_button($atts, $content = null)
{
    $stringHtml = '';
    if(isset($atts['url'])) {
        $target = isset($atts['target']) ? $atts['target'] : '_self';
        $stringHtml .= '<a href="' . $atts['url'] . '" target="' . $target . '">';
    }
    $stringHtml .= '<span class="button">' . do_shortcode($content) . '</span>';
    if(isset($atts['url'])) {
        $stringHtml .= '</a>';
    }
    return $stringHtml;
}
add_shortcode( 'button', 'content_shortcode_button' );