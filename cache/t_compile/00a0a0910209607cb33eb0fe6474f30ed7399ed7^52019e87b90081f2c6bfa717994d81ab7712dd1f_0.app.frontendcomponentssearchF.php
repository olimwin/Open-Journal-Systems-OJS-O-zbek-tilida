<?php
/* Smarty version 3.1.33, created on 2024-04-16 09:41:15
  from 'app:frontendcomponentssearchF' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_661e47bb310726_39428443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52019e87b90081f2c6bfa717994d81ab7712dd1f' => 
    array (
      0 => 'app:frontendcomponentssearchF',
      1 => 1575681927,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661e47bb310726_39428443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (!$_smarty_tpl->tpl_vars['currentJournal']->value || $_smarty_tpl->tpl_vars['currentJournal']->value->getData('publishingMode') != @constant('PUBLISHING_MODE_NONE')) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "searchFormUrl", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"search",'op'=>"search",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo parse_str(parse_url($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'searchFormUrl'),@constant('PHP_URL_QUERY')),$_smarty_tpl->tpl_vars['formUrlParameters']->value);?>

	<form class="pkp_search" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtok($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'searchFormUrl'),"?") ));?>
" method="get" role="search">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formUrlParameters']->value, 'paramValue', false, 'paramKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['paramKey']->value => $_smarty_tpl->tpl_vars['paramValue']->value) {
?>
			<input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paramKey']->value ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paramValue']->value ));?>
"/>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1086648385661e47bb30dbc1_76984107', 'searchQuerySimple');
?>


		<button type="submit">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>

		</button>
		<div class="search_controls" aria-hidden="true">
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"search",'op'=>"search"),$_smarty_tpl ) );?>
" class="headerSearchPrompt search_prompt" aria-hidden="true">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>

			</a>
			<a href="#" class="search_cancel headerSearchCancel" aria-hidden="true"></a>
			<span class="search_loading" aria-hidden="true"></span>
		</div>
	</form>
<?php }
}
/* {block 'searchQuerySimple'} */
class Block_1086648385661e47bb30dbc1_76984107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'searchQuerySimple' => 
  array (
    0 => 'Block_1086648385661e47bb30dbc1_76984107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<input name="query" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['searchQuery']->value ));?>
" type="text" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.searchQuery"),$_smarty_tpl ) ) ));?>
">
		<?php
}
}
/* {/block 'searchQuerySimple'} */
}