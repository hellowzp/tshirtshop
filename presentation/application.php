<?php
// Reference Smarty library
//require_once SMARTY_DIR . 'Smarty.class.php';
require_once 'Smarty/Smarty.class.php';

/* Class that extends Smarty, used to process and display Smarty
   files */
class Application extends Smarty
{
  // Class constructor
  public function __construct()
  {
    // Call Smarty's constructor
    //parent::Smarty();  
	parent::__construct(); // use php 5 style instead of the above style

    // Change the default template directories
    $this->template_dir = TEMPLATE_DIR;
    $this->compile_dir = COMPILE_DIR;
    $this->config_dir = CONFIG_DIR;
  }
}
?>
