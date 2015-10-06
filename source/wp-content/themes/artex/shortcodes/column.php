<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 11:20 AM
 */
function content_shortcode_column($atts, $content = null)
{
    $stringHtml = '';
    $style = '';
    if(isset($atts['align'])) {
        $style = ' style="text-align: ' . $atts['align'] . ';" ';
    }
    if(isset($atts['grid'])) {
        $grid = $atts['grid'];
        if($grid == '1') {
            $stringHtml .= '<div class="col-sm-8"' . $style . '>' . do_shortcode($content) . '</div>';
        }

        if($grid == '1/2') {
            $stringHtml .= '<div class="col-sm-4"' . $style . '>' . do_shortcode($content) . '</div>';
        }

        if($grid == '1/3') {
            $stringHtml .= '<div class="col-3"' . $style . '>' . do_shortcode($content) . '</div>';
        }
        if($grid == '2/3') {
            $stringHtml .= '<div class="col-6"' . $style . '>' . do_shortcode($content) . '</div>';
        }

        if($grid == '1/4') {
            $stringHtml .= '<div class="col-sm-2"' . $style . '>' . do_shortcode($content) . '</div>';
        }
        if($grid == '2/4') {
            $stringHtml .= '<div class="col-sm-4"' . $style . '>' . do_shortcode($content) . '</div>';
        }
        if($grid == '3/4') {
            $stringHtml .= '<div class="col-sm-6"' . $style . '>' . do_shortcode($content) . '</div>';
        }
    }
    return $stringHtml;
}
add_shortcode( 'column', 'content_shortcode_column' );