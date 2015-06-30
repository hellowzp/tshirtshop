<?php
// Include utility files
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';

// Set the error handler
ErrorHandler::SetHandler();

// Load the application page template
require_once PRESENTATION_DIR . 'application.php';

// Load Smarty template file
$application = new Application();

$smarty = new Smarty; 
$smarty->template_dir = TEMPLATE_DIR;
$smarty->compile_dir = COMPILE_DIR;
$smarty->config_dir = CONFIG_DIR;

// Assign two Smarty variables 
$smarty->assign("name", "Jason Gilmore"); 
$smarty->assign("title", "Smarty Rocks!"); 

// Display the page
//$application->display('store_front.tpl');

$smarty->display('welcome.tpl');

?>
