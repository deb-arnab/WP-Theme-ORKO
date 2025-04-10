<?php
/**
 * Orko Theme Excerpt
 *
 * This file contains the functions to customize the excerpt length and more text
 *
 * @package Orko
 */

function orko_excerpt(){
    return '...<br><br><a class="read_more" href="'.get_permalink() . '">' . 'Read More <i class="fa fa-arrow-right"></i>' . '</a>';
}
add_filter('excerpt_more', 'orko_excerpt');

function orko_excerpt_length(){
    return 40; // Set the excerpt length to 40 words
}
add_filter('excerpt_length', 'orko_excerpt_length', 999);