<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:48
  from 'module:iqitcookielawviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee845062ab89_66846372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7588a77287e3c02dfc5dfe6fd3a17abf03f7e2e' => 
    array (
      0 => 'module:iqitcookielawviewstemplat',
      1 => 1575912383,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee845062ab89_66846372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '11727899105dee8450629078_65732829';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15037454115dee8450629835_80677405', 'iqitcookielaw');
?>

<?php }
/* {block 'iqitcookielaw'} */
class Block_15037454115dee8450629835_80677405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitcookielaw' => 
  array (
    0 => 'Block_15037454115dee8450629835_80677405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="iqitcookielaw" class="p-3">
<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>


<button class="btn btn-primary" id="iqitcookielaw-accept"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept','mod'=>'iqitcookielaw'),$_smarty_tpl ) );?>
</button>
</div>
<?php
}
}
/* {/block 'iqitcookielaw'} */
}
