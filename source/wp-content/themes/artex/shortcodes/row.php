<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 11:19 AM
 */
function content_shortcode_row($atts, $content = null)
{
    return '<div class="row">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'content_shortcode_row' );