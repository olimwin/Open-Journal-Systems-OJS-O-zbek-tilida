<?php
/* Smarty version 3.1.33, created on 2024-04-16 09:41:06
  from 'app:formselect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_661e47b24687e5_44125149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd497c7999738533b7ffc32443e4d97e4ea34b71' => 
    array (
      0 => 'app:formselect.tpl',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661e47b24687e5_44125149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\praktika\\ojs-3.1.2-4\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<div<?php if ($_smarty_tpl->tpl_vars['FBV_layoutInfo']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['FBV_layoutInfo']->value;?>
"<?php }?>>
<select <?php echo $_smarty_tpl->tpl_vars['FBV_selectParams']->value;
if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['FBV_class']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?> required aria-required="true"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['FBV_defaultValue']->value !== null) {?>
		<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_defaultValue']->value ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_defaultLabel']->value ));?>
</option>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_options_translate'][0], array( array('options'=>$_smarty_tpl->tpl_vars['FBV_from']->value,'selected'=>$_smarty_tpl->tpl_vars['FBV_selected']->value),$_smarty_tpl ) );
} else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['FBV_from']->value,'selected'=>$_smarty_tpl->tpl_vars['FBV_selected']->value),$_smarty_tpl);
}?>
</select>

<?php if ($_smarty_tpl->tpl_vars['FBV_label_content']->value) {?>
	<span><?php echo $_smarty_tpl->tpl_vars['FBV_label_content']->value;?>
</span>
<?php }?>
</div>
<?php }
}
