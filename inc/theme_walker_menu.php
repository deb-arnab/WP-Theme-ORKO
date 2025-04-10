<?php
/**
 * Custom Walker for Orko Theme (Bootstrap-compatible)
 */

class Orko_Walker_Nav_Menu extends Walker_Nav_Menu {

    // Start level <ul>
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $submenu_class = ($depth > 0) ? 'dropdown-menu' : 'dropdown-menu';
        $output .= "\n$indent<ul class=\"$submenu_class\">\n";
    }

    // Start element <li> and <a>
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $has_children = in_array('menu-item-has-children', $classes);
        $dropdown_class = ($has_children && $depth === 0) ? 'dropdown' : '';
        $submenu_class = ($has_children && $depth > 0) ? 'dropdown-submenu' : '';

        $classes[] = ($has_children) ? (($depth === 0) ? 'dropdown' : 'dropdown-submenu') : '';

        $class_names = join(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target)     ? $item->target     : '';
        $atts['rel']    = !empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = !empty($item->url)        ? $item->url        : '';

        $atts['class'] = 'nav-link';
        if ($has_children && $depth === 0) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = esc_html($title);

        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
