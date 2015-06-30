<?php /* Smarty version 3.1.27, created on 2015-06-30 17:24:24
         compiled from "D:\my_documents\engineering_files\WebApp\tshirtshop\presentation\templates\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:111975592b4a8bf45d2_56807861%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3305306d8722733b68bb7c44a469638d33ad51ab' => 
    array (
      0 => 'D:\\my_documents\\engineering_files\\WebApp\\tshirtshop\\presentation\\templates\\welcome.tpl',
      1 => 1409839689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111975592b4a8bf45d2_56807861',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5592b4a8c1f559_52106510',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5592b4a8c1f559_52106510')) {
function content_5592b4a8c1f559_52106510 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '111975592b4a8bf45d2_56807861';
?>

<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, "site.conf", null, 'local');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html> 
<head> 
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 
</head> 
<body> 
<p> 
Hi, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
. Welcome to the wonderful world of Smarty. 
</p> 
</body> 
</html><?php }
}
?>