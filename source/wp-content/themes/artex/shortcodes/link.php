<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 2:08 PM
 */
function content_shortcode_link($atts, $content = null)
{
    $attributes = shortcode_atts( array(
        'url' => '#',
        'target' => '_self'
    ), $atts );
    $stringHtml = '';
    $stringHtml .= '<a href="' . $attributes['url'] . '" target="' . $attributes['target'] . '">';
    $stringHtml .= '<span class="link"><i class="fa fa-angle-right"></i>' . do_shortcode($content) . '</span>';
    $stringHtml .= '</a>';
    return $stringHtml;
}
add_shortcode( 'link', 'content_shortcode_link' );