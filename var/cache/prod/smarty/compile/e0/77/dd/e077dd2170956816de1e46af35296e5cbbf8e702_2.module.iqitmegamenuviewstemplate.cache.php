<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:48
  from 'module:iqitmegamenuviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee845050b165_04727250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e077dd2170956816de1e46af35296e5cbbf8e702' => 
    array (
      0 => 'module:iqitmegamenuviewstemplate',
      1 => 1575912383,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee845050b165_04727250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mobile_links' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/e0/77/dd/e077dd2170956816de1e46af35296e5cbbf8e702_2.module.iqitmegamenuviewstemplate.cache.php',
    'uid' => 'e077dd2170956816de1e46af35296e5cbbf8e702',
    'call_name' => 'smarty_template_function_mobile_links_5001191415dee84504fc5a6_62368525',
  ),
));
$_smarty_tpl->compiled->nocache_hash = '5001191415dee84504fc5a6_62368525';
?>




<?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
	<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobile_links', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value,'first'=>true), false);?>

<?php }
}
/* smarty_template_function_mobile_links_5001191415dee84504fc5a6_62368525 */
if (!function_exists('smarty_template_function_mobile_links_5001191415dee84504fc5a6_62368525')) {
function smarty_template_function_mobile_links_5001191415dee84504fc5a6_62368525(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'first'=>false), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
if (!$_smarty_tpl->tpl_vars['first']->value) {?><ul><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
if (isset($_smarty_tpl->tpl_vars['node']->value['title'])) {?><li><?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])) {?><span class="mm-expand"><i class="fa fa-angle-down expand-icon" aria-hidden="true"></i><i class="fa fa-angle-up close-icon" aria-hidden="true"></i></span><?php }?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['href'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a><?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobile_links', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'first'=>false), false);
}?></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->tpl_vars['first']->value) {?></ul><?php }
}
}}
/*/ smarty_template_function_mobile_links_5001191415dee84504fc5a6_62368525 */
}
