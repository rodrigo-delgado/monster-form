<?php

/* Plugin Name: Form Plugin For Monster Group Test */

function form_test_plugin()
{
    $content = '';
    $content .= 'Contatct Us';

    return $content;
}
add_shortcode('contacting_form','form_test_plugin');


?>