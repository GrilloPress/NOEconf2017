<?php
/**
 * sth Bootstrap Nav Walker and Custom Active Class
 *
 * @package sth
 */

function wp_bootstrap_main_nav() {
  // Display the WordPress menu if available
  wp_nav_menu( 
    array( 
      'menu' => 'main_nav', /* menu name */
      'menu_class' => 'nav navbar-nav',
      'theme_location' => 'main_nav', /* where in the theme it's assigned */
      'container' => 'false', /* container class */
      'fallback_cb' => 'wp_bootstrap_main_nav_fallback', /* menu fallback */
      'walker' => new Bootstrap_walker()
    )
  );
}

// Menu output mods
class Bootstrap_walker extends Walker_Nav_Menu{
  function start_el(&$output, $object, $depth = 0, $args = Array(), $current_object_id = 0){
	 global $wp_query;
	 $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
	 $class_names = $value = '';
	
		// If the item has children, add the dropdown class for bootstrap
		if ( $args->has_children ) {
			$class_names = "dropdown ";
		}
	
		$classes = empty( $object->classes ) ? array() : (array) $object->classes;
		
		$class_names .= join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';
       
   	$output .= $indent . '<li id="menu-item-'. $object->ID . '"' . $value . $class_names .'>';
   	$attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
   	$attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
   	$attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
   	$attributes .= ! empty( $object->url )        ? ' href="'   . esc_attr( $object->url        ) .'"' : '';
   	// if the item has children add these two attributes to the anchor tag
   	if ( $args->has_children ) {
		  $attributes .= ' class="dropdown-toggle" data-toggle="dropdown"';
    }
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before .apply_filters( 'the_title', $object->title, $object->ID );
    $item_output .= $args->link_after;
    // if the item has children add the caret just before closing the anchor tag
    if ( $args->has_children ) {
    	$item_output .= '<b class="caret"></b></a>';
    }
    else {
    	$item_output .= '</a>';
    }
    $item_output .= $args->after;
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $object, $depth, $args );
  } // end start_el function
        
  function start_lvl(&$output, $depth = 0, $args = Array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
      
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
    $id_field = $this->db_fields['id'];
    if ( is_object( $args[0] ) ) {
        $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
    }
    return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
  }        
}


function wp_bootstrap_add_active_class($classes, $item) {
	if( $item->menu_item_parent == 0 && in_array('current-menu-item', $classes) ) {
    $classes[] = "active";
	}
  
  return $classes;
}
// Add Twitter Bootstrap's standard 'active' class name to the active nav link item
add_filter('nav_menu_css_class', 'wp_bootstrap_add_active_class', 10, 2 );
