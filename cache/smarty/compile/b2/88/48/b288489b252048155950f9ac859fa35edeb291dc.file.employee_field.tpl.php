<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:53:27
         compiled from "C:\xampp\htdocs\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8400582c56c7ac5b81-41341523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b288489b252048155950f9ac859fa35edeb291dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1478499944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8400582c56c7ac5b81-41341523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c56c7befc13_30442139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c56c7befc13_30442139')) {function content_582c56c7befc13_30442139($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
