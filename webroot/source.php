<?php 
/**
 * This is a kinak pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kinak variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$kinak['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the kinak container.
$kinak['title'] = "Visa källkod";

$kinak['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of kinak.
include(kinak_THEME_PATH);