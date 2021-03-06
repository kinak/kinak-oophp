<?php 
/**
 * This is a kinak pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kinak variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
$kinak['stylesheets'][]        = 'css/slideshow.css';
$kinak['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the kinak container.
$kinak['title'] = "Slideshow för att testa JavaScript i kinak";

$kinak['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg", "me-2.jpg", "me-4.jpg", "me-6.jpg"]'>
<img src='img/me/me-6.jpg' alt='Me'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur kinak fungerar tillsammans med JavaScript.</p>
EOD;


// Finally, leave it all to the rendering phase of kinak.
include(kinak_THEME_PATH);