<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 11:20 AM
 */
function content_shortcode_column($atts, $content = null)
{
    $attributes = shortcode_atts( array(
        'grid' => '1',
        'align' => 'left'
    ), $atts );
    $stringHtml = '';
    $style = ' style="text-align: ' . $attributes['align'] . ';" ';
    switch ($attributes['grid']) {
        case '1/2': {
            $stringHtml .= '<div class="col-sm-4"' . $style . '>' . do_shortcode($content) . '</div>';
            break;
        }

        case '1/3': {
            $stringHtml .= '<div class="col-3"' . $style . '>' . do_shortcode($content) . '</div>';
            break;
        }
        case '2/3': {
            $stringHtml .= '<div class="col-6"' . $style . '>' . do_shortcode($content) . '</div>';
            break;
        }

        case '1/4': {
            $stringHtml .= '<div class="col-sm-2"' . $style . '>' . do_shortcode($content) . '</div>';
            break;
        }
        case '2/4': {
            $stringHtml .= '<div class="col-sm-4"' . $style . '>' . do_shortcode($content) . '</div>';
            break;
        }
        case '3/4': {
            $stringHtml .= '<div class="col-sm-6"' . $style . '>' . do_shortcode($content) . '</div>';
            break;
        }

        case '1':
        case '2/2':
        case '3/3':
        case '4/4':
        default: {
            $stringHtml .= '<div class="col-sm-8"' . $style . '>' . do_shortcode($content) . '</div>';
            break;
        }
    }
    return $stringHtml;
}
add_shortcode( 'column', 'content_shortcode_column' );