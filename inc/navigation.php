<?php
/**
 * Orko Theme Page Navigation
 *
 * This file contains the functions for page navigation in the Orko theme
 *
 * @package Orko
 */


function orko_page_nav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged'))
    $current=1;
    $args['base']= str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total']= $max;
    $args['current']= $current;
    $args['prev_text']= 'Previous';
    $args['next_text']= 'Next';
    $total=1;
    if($max>1)
    echo'</pre><div class="wp_pagenav">';
    if($total==1 && $max>1)
    $pages='<p class="pages"> Page '. $current.'<span>of</span>'.$max.'</p>';
echo $pages.paginate_links($args);
if($max>1)
echo'</div><pre>';
}