<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:48
  from 'module:iqitcompareviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee845046a861_33767392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7b42a5e4e0a5166bfca3e9be0e40e49bcdd454f' => 
    array (
      0 => 'module:iqitcompareviewstemplates',
      1 => 1575912383,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee845046a861_33767392 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="d-inline-block">
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitcompare','controller'=>'comparator'),$_smarty_tpl ) );?>
">
        <i class="fa fa-random" aria-hidden="true"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
 (<span
                    id="iqitcompare-nb"></span>)</span>
    </a>
</div>
<?php }
}
