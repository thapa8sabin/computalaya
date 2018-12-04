<?php
class Computalaya_Walker extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= sprintf( "\n<li class='nav-item' data-scrollto='%s' %s><a class='nav-link' href='%s'>%s</a></li>\n",
            '#'.strtolower($item->title),
            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
            $item->url,
            $item->title
        );
    }

}

class Social_Link_Walker extends Walker {
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= "<li><a href='".$item->url."'>";
        $output .= "<i class='icon-".strtolower($item->title)."'>";
        $output .= "</i></a></li>";
    }    
}


class Computalaya_Useful_Link extends Walker {
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $thing = explode('-', $item->url);

        // print_r($thing);
        // echo str_replace('http://', '', $thing[0]);

        $output .= sprintf( "\n<li class='%s' data-title='%s'><i class='%s'></i></li>\n",
            'on_change_page',
            str_replace('http://', '#', $thing[0]),
            'icon-'.$thing[1]
            // ( $item->object_id === get_the_ID() ) ? ' class="current"' : ''
            // '#'.strtolower($item->title)
        );
    }
}

