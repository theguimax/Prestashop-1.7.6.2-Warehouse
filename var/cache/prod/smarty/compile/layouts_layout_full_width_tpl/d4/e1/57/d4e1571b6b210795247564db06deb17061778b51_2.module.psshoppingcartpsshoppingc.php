<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:48
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee84505266e9_10102825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e1571b6b210795247564db06deb17061778b51' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1575912384,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee84505266e9_10102825 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>

<?php }
}
