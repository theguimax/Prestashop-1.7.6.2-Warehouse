<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:48
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee8450491865_37379722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '235e3f5ee59d64225af247fb2228e65cd3fe7fb0' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1575912384,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
  ),
),false)) {
function content_5dee8450491865_37379722 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ps-shoppingcart-wrapper">
    <div id="ps-shoppingcart"
         class="header-cart-default ps-shoppingcart <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style'] == "floating") {?>dropdown<?php } else { ?>side-cart<?php }?>">
        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>

<?php }
}
