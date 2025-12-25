<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemmodal.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647ef1864_68523414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fd7e8538ff0c4833caf85bc973aea15c6760d59' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemmodal.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647ef1864_68523414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1043446587694c0647ef11d4_55328187', "modal");
}
/* {block "modal"} */
class Block_1043446587694c0647ef11d4_55328187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_1043446587694c0647ef11d4_55328187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="display: none;">
	
		
	
			<div id="magnific_wrapper">
				<div class="modal-dialog">
					<div class="modal-content">
						{{#title}}
						<div class="modal-header">
							<span class="modal-title">{{title}}</span>
						</div>
						{{/title}}
		
						<div class="modal-body">
							{{{items.src}}}
						</div>
		
						{{#showButtons}}
						<div class="modal-footer">
							{{#buttons}}
							<button type="button" id="button_{{index}}_{{uid}}" data-index="{{index}}" class="btn {{class}}" >{{name}}</button>
							{{/buttons}}
						</div>
						{{/showButtons}}
					</div>
				</div>
			</div>
		
		
			<div id="modal_prompt">
				<div>
					{{#content}}
					<div class="icon">&nbsp;</div>
					<p>{{.}}</p>
					{{/content}}
					<form name="prompt" action="#">
						<input type="text" name="input" value="{{value}}" autocomplete="off" />
					</form>
				</div>
			</div>
		
			<div id="modal_alert">
				<div class="white-popup">
					{{#content}}
					<div class="icon">&nbsp;</div>
					<p>{{{.}}}</p>
					{{/content}}
				</div>
			</div>
	
		
		
	</div>
<?php
}
}
/* {/block "modal"} */
}
