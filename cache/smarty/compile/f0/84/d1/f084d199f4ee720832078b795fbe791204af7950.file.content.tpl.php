<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:53:11
         compiled from "C:\xampp\htdocs\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9934582c56b70dd7d4-73567639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f084d199f4ee720832078b795fbe791204af7950' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\themes\\default\\template\\content.tpl',
      1 => 1478499944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9934582c56b70dd7d4-73567639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c56b72043e0_86943474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c56b72043e0_86943474')) {function content_582c56b72043e0_86943474($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
