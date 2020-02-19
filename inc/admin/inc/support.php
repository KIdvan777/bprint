<?php
/*
@package bprint theme
*/
// Post Formats Callback Functions

function bprint_post_formats_callback($input){
    return $input;
}
function bprint_theme_options(){
    echo 'Activate and Deactivate specific Theme Support Options';
}
function bprint_post_formats(){
    $options = get_option('post_formats');
    $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
    $output = '';
    foreach($formats as $format){
        $checked = ( @$options[$format] == 1 ? 'checked' : '' );
        $output .= '<label><input type="checkbox" id="' .$format. '" name="post_formats['.$format.']" value="1" '.$checked.'/>'.$format.'</label><br>';
    }
    echo $output;
}
