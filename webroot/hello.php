<?php 
/**
 * This is a kinak pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kinak variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the kinak container.
$kinak['title'] = "Hello";

$kinak['header'] = <<<EOD
<img class='sitelogo' src='img/kinak.png' alt='kinak Logo'/>
<span class='sitetitle'>kinak webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$kinak['main'] = <<<EOD
<h1>Hej Världen!</h1>
<p>Detta är en exempelsida som visar hur kinak ser ut och fungerar.</p>
EOD;

$kinak['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright: Hannes Öhman &reg; | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a> | <a href='https://github.com/kinak/kinak-wt'>GitHub</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of kinak.
include(kinak_THEME_PATH);