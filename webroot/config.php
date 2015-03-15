<?php

error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

define('kinak_INSTALL_PATH', __DIR__ . '/..');
define('kinak_THEME_PATH', kinak_INSTALL_PATH . '/theme/render.php');

include(kinak_INSTALL_PATH . '/src/bootstrap.php');

session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

$kinak = array();

$kinak['lang']         = 'sv';
$kinak['title_append'] = ' | kinak webbtemplate';

$kinak['header'] = <<<EOD
<img class='sitelogo' src='img/kinak.png' alt='kinak Logo'/>
<span class='sitetitle'>kinak webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$kinak['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright: Hannes Öhman &reg; | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a> | <a href='https://github.com/kinak/kinak-oophp'>GitHub</a></span></footer>
EOD;

/**
 * Theme related settings.
 *
 */
//$kinak['stylesheet'] = 'css/style.css';
$kinak['stylesheets'] = array('css/style.css');
$kinak['favicon']    = 'favicon.png';

/**
 * Settings for JavaScript.
 *
 */
$kinak['modernizr'] = 'js/modernizr.js';
$kinak['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$kinak['jquery'] = null; // To disable jQuery
$kinak['javascript_include'] = array();
//$kinak['javascript_include'] = array('js/main.js'); // To add extra javascript files


/**
 * Google analytics.
 *
 */
$kinak['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics