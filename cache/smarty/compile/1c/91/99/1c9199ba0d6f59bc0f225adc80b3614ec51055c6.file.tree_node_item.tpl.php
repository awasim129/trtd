<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:54:51
         compiled from "C:\xampp\htdocs\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16258582c571b93e7d2-17090106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9199ba0d6f59bc0f225adc80b3614ec51055c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1478499944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16258582c571b93e7d2-17090106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c571c805102_54998303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c571c805102_54998303')) {function content_582c571c805102_54998303($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
