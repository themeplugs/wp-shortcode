
function shortcode($attributes){
    $default = array(
        'page_id' => 'xxx',
        'color'=>'#fac'
    );
    $shrotcode_attributes = shortcode_atts($default,$attributes);
    return sprintf('<html></html>',
        $shrotcode_attributes['xxx'],
        $shrotcode_attributes['color']
    );

}

add_shortcode("x","shortcode");

// call shortcode 

do_shortcode("[x]");
