<?php
/**
 * Bootstrapping functions, essential and needed for kinak to work together with some common helpers. 
 *
 */
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "kinak: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = kinak_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');


/*
* dump($_SERVER);
*/

function dump($array) {
echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}

/* <?=dump($_SERVER)?> */ 

?>
