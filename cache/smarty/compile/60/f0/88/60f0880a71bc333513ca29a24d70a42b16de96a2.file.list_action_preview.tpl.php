<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:54:34
         compiled from "C:\xampp\htdocs\admin\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5419582c570a28bd78-74568009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f0880a71bc333513ca29a24d70a42b16de96a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1478499944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5419582c570a28bd78-74568009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c570a413c46_69095247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c570a413c46_69095247')) {function content_582c570a413c46_69095247($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
