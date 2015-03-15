<?php 
/**
 * This is a kinak pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kinak variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the kinak container.
$kinak['title'] = "404";
$kinak['header'] = "";
$kinak['main'] = "This is a kinak 404. Document is not here.";
$kinak['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of kinak.
include(kinak_THEME_PATH);