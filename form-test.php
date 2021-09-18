<?php
/**
 * Plugin Name: Form Plugin For Monster Group Test.
 * Description: This submit a contact form though an Ajax call.
 **/

function form_test_plugin()
{
    /* Create a string variable to hold the content */ 
    $content = '';
    $content .= '<h2>Let’s get in touch!</h2>';

    //$content .= '<form method="post" action"" >';

    $content .= '<label for="your_name">Enter your name</label>';
    $content .= '<input type="text" name="your_name" id="your_name" placeholder="Enter your name" required />';
    
    $content .= '<label for="your_email">Enter your email</label>';
    $content .= '<input type="email" name="your_email" id="your_email" placeholder="Enter your email" required />';
    
    $content .= '<label for="phone">Enter your phone number</label>';
    $content .= '<input type="tel" name="phone" id="phone_number" placeholder="Enter your number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />';
    
    /* Create a dropdown for services */
    $content .= '<form action="/action_page.php">
                    <label for="service">Choose a service</label>
                    <select name="service" id="service">
                        <optgroup label="Services">
                            <option value="electricity">Electricity</option>
                            <option value="internet">Internet</option> 
                            <option value="solar">Solar</option>
                        </optgroup>
                    </select>
                </form>';

    //$content .= '<input type="text" name="service" placeholder="" required />';

    $content .= '<label for="your_comments">Questions or comments </label>';
    $content .= '<textarea name="your_comments" id="your_comments" placeholder="Enter your comments"> </textarea>';
    
    $content .= '<input type="submit" name="form_test_submit" id="form_test_submit" onclick="submit_contact_form()" value="Submit Your Information" >';
        
    return $content;
}
add_shortcode('contacting_form','form_test_plugin');

function form_add_javascript() 
{
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php 
}
add_action('wp_footer','form_add_javascript');

?>