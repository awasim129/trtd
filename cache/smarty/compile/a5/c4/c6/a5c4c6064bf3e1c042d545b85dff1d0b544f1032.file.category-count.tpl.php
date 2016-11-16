<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:53:16
         compiled from "C:\xampp\htdocs\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9457582c56bc5dcfb2-41081308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5c4c6064bf3e1c042d545b85dff1d0b544f1032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1478499946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9457582c56bc5dcfb2-41081308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c56bc60cb19_01374644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c56bc60cb19_01374644')) {function content_582c56bc60cb19_01374644($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
