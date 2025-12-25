<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_secondary_navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0648171a92_72784672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '354229a56a0538068f1b3f21407ac2ce8a42edb5' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_secondary_navigation.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0648171a92_72784672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"top_navigation"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"infobox",'name'=>"infobox"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"buttons"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69395604694c06481272f9_36393719', "layout_secondary_navigation");
?>

<?php }
/* {block "layout_secondary_navigation_mobile_top_search"} */
class Block_672274640694c0648129166_97679826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="hidden-sm hidden-md hidden-lg top-mobile-search">
						<?php echo $_smarty_tpl->tpl_vars['TOP_SEARCH']->value;?>

					</div>
				<?php
}
}
/* {/block "layout_secondary_navigation_mobile_top_search"} */
/* {block "layout_secondary_navigation_mobile_top_search_if"} */
class Block_942795845694c0648128763_30701733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

			<?php if ($_smarty_tpl->tpl_vars['showTopSearch']->value && smarty_modifier_gm_get_conf('GM_QUICK_SEARCH') == 'true' && $_smarty_tpl->tpl_vars['hideSearchCol']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_672274640694c0648129166_97679826', "layout_secondary_navigation_mobile_top_search", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "layout_secondary_navigation_mobile_top_search_if"} */
/* {block "layout_secondary_navigation_content"} */
class Block_1328284840694c064812a1c6_51366890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['CONTENT_LINKS_DATA']->value) {?>
								<li class="dropdown navbar-topbar-item hidden-xs">
									<a href="#" class="dropdown-toggle" data-toggle-hover="dropdown">
										
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M25.2,24.46c-2,5.47-9.65,6.94-8.23-.15l1.67-8h3.5c-.81,4.28-1.39,6.89-2,9.88s3.19.79,4.06-1.7ZM19.45,14.31a2,2,0,0,1-.53-1.42,2.13,2.13,0,0,1,.58-1.42A2,2,0,0,1,21,10.89a1.85,1.85,0,0,1,1.39.58A1.91,1.91,0,0,1,23,12.89a1.88,1.88,0,0,1-.63,1.42,2,2,0,0,1-1.45.55A1.94,1.94,0,0,1,19.45,14.31Z"/><path d="M20,5.5A14.5,14.5,0,1,1,5.5,20,14.51,14.51,0,0,1,20,5.5M20,4A16,16,0,1,0,36,20,16,16,0,0,0,20,4Z"/></g></g></svg>
										
									</a>
									<ul id="secondaryNavigation" class="dropdown-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONTENT_LINKS_DATA']->value, 'content_item', false, NULL, 'cat_data', array (
));
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?>
											<li>
												<a title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['content_item']->value['NAME']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL'];?>
"
														<?php if ($_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'] && $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'] != '') {?>
													target="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'];?>
"
														<?php }?>>
													<?php echo $_smarty_tpl->tpl_vars['content_item']->value['NAME'];?>

												</a>
											</li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>

                                    <?php echo '<script'; ?>
 id="secondaryNavigation-menu-template" type="text/mustache">
                                        
                                            <ul id="secondaryNavigation" class="dropdown-menu">
                                                <li v-for="(item, index) in items">
                                                    <a href="javascript:;" :title="item.title" @click="goTo(item.content)">
                                                        {{item.title}}
                                                    </a>
                                                </li>
                                            </ul>
                                        
                                    <?php echo '</script'; ?>
>
								</li>
							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_content"} */
/* {block "layout_secondary_navigation_search_icon"} */
class Block_110472059694c064812d9c3_09607518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
															<g data-name="Ebene 2">
																<g data-name="Ebene 1">
																	<rect class="cls-1" width="40" height="40"/>
																	<path d="M33.34,31.74,25.49,23.9a10.73,10.73,0,1,0-1.59,1.59l7.84,7.85a.59.59,0,0,0,.8,0l.8-.8A.59.59,0,0,0,33.34,31.74ZM17.19,25.63a8.44,8.44,0,1,1,8.44-8.44A8.45,8.45,0,0,1,17.19,25.63Z"/>
																</g>
															</g>
														</svg>
													<?php
}
}
/* {/block "layout_secondary_navigation_search_icon"} */
/* {block "layout_secondary_navigation_search_icon_if"} */
class Block_22870043694c064812d517_04385053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110472059694c064812d9c3_09607518', "layout_secondary_navigation_search_icon", $this->tplIndex);
?>

												<?php }?>
											<?php
}
}
/* {/block "layout_secondary_navigation_search_icon_if"} */
/* {block "layout_secondary_navigation_desktop_top_search"} */
class Block_97276014694c064812cf77_98959204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<li class="navbar-topbar-item topbar-search hidden-xs">
										<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['buttons']->value['search'];?>
">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22870043694c064812d517_04385053', "layout_secondary_navigation_search_icon_if", $this->tplIndex);
?>

										</a>

										<ul class="level_2 dropdown-menu">
											<li class="search-dropdown">
												<?php echo $_smarty_tpl->tpl_vars['TOP_SEARCH']->value;?>

											</li>
										</ul>
									</li>
								<?php
}
}
/* {/block "layout_secondary_navigation_desktop_top_search"} */
/* {block "layout_secondary_navigation_desktop_top_search_if"} */
class Block_286784658694c064812c730_46748856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

							<?php if ($_smarty_tpl->tpl_vars['showTopSearch']->value && smarty_modifier_gm_get_conf('GM_QUICK_SEARCH') == 'true') {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97276014694c064812cf77_98959204', "layout_secondary_navigation_desktop_top_search", $this->tplIndex);
?>

							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_desktop_top_search_if"} */
/* {block "layout_secondary_navigation_admin_icon"} */
class Block_123763860694c06481311c1_57863892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<span class="fa fa-cogs"></span>
													<?php
}
}
/* {/block "layout_secondary_navigation_admin_icon"} */
/* {block "layout_secondary_navigation_admin_icon_if"} */
class Block_178072796694c0648130cc7_72925504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123763860694c06481311c1_57863892', "layout_secondary_navigation_admin_icon", $this->tplIndex);
?>

												<?php }?>
												<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['buttons']->value['click_here'];?>
</span>
											<?php
}
}
/* {/block "layout_secondary_navigation_admin_icon_if"} */
/* {block "layout_secondary_navigation_admin"} */
class Block_1622442572694c064812ed60_28428637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.crypt_link.php','function'=>'smarty_function_crypt_link',),));
?>

									<li class="navbar-topbar-item first gambio-admin">
										<a href="#" data-link_crypter-url="<?php echo smarty_function_crypt_link(array('link'=>$_smarty_tpl->tpl_vars['admin_url']->value,'crypt'=>'2'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['buttons']->value['click_here'];?>
">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178072796694c0648130cc7_72925504', "layout_secondary_navigation_admin_icon_if", $this->tplIndex);
?>

										</a>
									</li>
								<?php
}
}
/* {/block "layout_secondary_navigation_admin"} */
/* {block "layout_secondary_navigation_admin_if"} */
class Block_718858041694c064812e630_08494905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['customers_data']->value['ID'] == 0) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1622442572694c064812ed60_28428637', "layout_secondary_navigation_admin", $this->tplIndex);
?>

							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_admin_if"} */
/* {block "layout_secondary_navigation_edit_product_icon"} */
class Block_40278437694c0648135442_21592807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<span class="fa fa-pencil"></span>
													<?php
}
}
/* {/block "layout_secondary_navigation_edit_product_icon"} */
/* {block "layout_secondary_navigation_edit_product_icon_if"} */
class Block_1360163764694c0648134fa0_68525023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40278437694c0648135442_21592807', "layout_secondary_navigation_edit_product_icon", $this->tplIndex);
?>

												<?php }?>
											<?php
}
}
/* {/block "layout_secondary_navigation_edit_product_icon_if"} */
/* {block "layout_secondary_navigation_edit_product"} */
class Block_925767252694c0648134685_13908880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.crypt_link.php','function'=>'smarty_function_crypt_link',),));
?>

									<li class="navbar-topbar-item gambio-admin">
										<a href="#" data-link_crypter-url="<?php echo smarty_function_crypt_link(array('link'=>$_smarty_tpl->tpl_vars['edit_product_url']->value,'crypt'=>'2'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['buttons']->value['edit_product'];?>
">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1360163764694c0648134fa0_68525023', "layout_secondary_navigation_edit_product_icon_if", $this->tplIndex);
?>


											<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['buttons']->value['edit_product'];?>
</span>
										</a>
									</li>
								<?php
}
}
/* {/block "layout_secondary_navigation_edit_product"} */
/* {block "layout_secondary_navigation_edit_product_if"} */
class Block_819990625694c0648132072_37167657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.detect_page.php','function'=>'smarty_modifier_detect_page',),));
?>

							<?php if (smarty_modifier_detect_page('') == "ProductInfo" && $_smarty_tpl->tpl_vars['customers_data']->value['ID'] == 0) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_925767252694c0648134685_13908880', "layout_secondary_navigation_edit_product", $this->tplIndex);
?>

							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_edit_product_if"} */
/* {block "layout_secondary_navigation_edit_category_icon"} */
class Block_633562736694c064813aa69_33921051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<span class="fa fa-pencil"></span>
													<?php
}
}
/* {/block "layout_secondary_navigation_edit_category_icon"} */
/* {block "layout_secondary_navigation_edit_category_icon_if"} */
class Block_424975008694c064813a150_37903010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_633562736694c064813aa69_33921051', "layout_secondary_navigation_edit_category_icon", $this->tplIndex);
?>

												<?php }?>
											<?php
}
}
/* {/block "layout_secondary_navigation_edit_category_icon_if"} */
/* {block "layout_secondary_navigation_edit_category"} */
class Block_1345895863694c0648138de5_73098969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.crypt_link.php','function'=>'smarty_function_crypt_link',),));
?>

									<li class="navbar-topbar-item gambio-admin">
										<a href="#" data-link_crypter-url="<?php echo smarty_function_crypt_link(array('link'=>$_smarty_tpl->tpl_vars['edit_category_url']->value,'crypt'=>'2'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['buttons']->value['edit_category'];?>
">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_424975008694c064813a150_37903010', "layout_secondary_navigation_edit_category_icon_if", $this->tplIndex);
?>


											<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['buttons']->value['edit_category'];?>
</span>
										</a>
									</li>
								<?php
}
}
/* {/block "layout_secondary_navigation_edit_category"} */
/* {block "layout_secondary_navigation_edit_category_if"} */
class Block_308350875694c0648136307_70648690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.detect_page.php','function'=>'smarty_modifier_detect_page',),));
?>

							<?php if (smarty_modifier_detect_page('') == "Cat" && $_smarty_tpl->tpl_vars['customers_data']->value['ID'] == 0) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1345895863694c0648138de5_73098969', "layout_secondary_navigation_edit_category", $this->tplIndex);
?>

							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_edit_category_if"} */
/* {block "layout_secondary_navigation_edit_content_icon"} */
class Block_938461064694c064813d3a0_42617275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<span class="fa fa-pencil"></span>
													<?php
}
}
/* {/block "layout_secondary_navigation_edit_content_icon"} */
/* {block "layout_secondary_navigation_edit_content_icon_if"} */
class Block_782765745694c064813cfd0_20686897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_938461064694c064813d3a0_42617275', "layout_secondary_navigation_edit_content_icon", $this->tplIndex);
?>

												<?php }?>
											<?php
}
}
/* {/block "layout_secondary_navigation_edit_content_icon_if"} */
/* {block "layout_secondary_navigation_edit_content"} */
class Block_386009686694c064813c891_17172187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.crypt_link.php','function'=>'smarty_function_crypt_link',),));
?>

									<li class="navbar-topbar-item gambio-admin">
										<a href="#" data-link_crypter-url="<?php echo smarty_function_crypt_link(array('link'=>$_smarty_tpl->tpl_vars['edit_content_url']->value,'crypt'=>'2'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['buttons']->value['edit_content'];?>
">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_782765745694c064813cfd0_20686897', "layout_secondary_navigation_edit_content_icon_if", $this->tplIndex);
?>


											<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['buttons']->value['edit_content'];?>
</span>
										</a>
									</li>
								<?php
}
}
/* {/block "layout_secondary_navigation_edit_content"} */
/* {block "layout_secondary_navigation_edit_content_if"} */
class Block_1509606460694c064813ba94_18262837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.detect_page.php','function'=>'smarty_modifier_detect_page',),));
?>

							<?php if ((smarty_modifier_detect_page('') == "Content" || smarty_modifier_detect_page('') == "CallbackService") && $_smarty_tpl->tpl_vars['edit_content_url']->value && $_smarty_tpl->tpl_vars['customers_data']->value['ID'] == 0) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_386009686694c064813c891_17172187', "layout_secondary_navigation_edit_content", $this->tplIndex);
?>

							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_edit_content_if"} */
/* {block "layout_secondary_navigation_language_icon_desktop_image"} */
class Block_18460899694c06481420f4_48178530 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><polygon points="27.01 11.12 27.04 11.36 26.68 11.43 26.63 11.94 27.06 11.94 27.63 11.88 27.92 11.53 27.61 11.41 27.44 11.21 27.18 10.8 27.06 10.21 26.58 10.31 26.44 10.52 26.44 10.75 26.68 10.91 27.01 11.12"/><polygon points="26.6 11.31 26.62 10.99 26.34 10.87 25.94 10.96 25.65 11.44 25.65 11.74 25.99 11.74 26.6 11.31"/><path d="M18.47,12.66l-.09.22H18v.22h.1l0,.11.25,0,.16-.1.05-.21h.21l.08-.17-.19,0Z"/><polygon points="17.38 13.05 17.37 13.27 17.67 13.24 17.7 13.03 17.52 12.88 17.38 13.05"/><path d="M35.68,19.83a12.94,12.94,0,0,0-.07-1.39,15.83,15.83,0,0,0-1.06-4.35l-.12-.31a16,16,0,0,0-3-4.63l-.25-.26c-.24-.25-.48-.49-.73-.72a16,16,0,0,0-21.59.07,15.08,15.08,0,0,0-1.83,2,16,16,0,1,0,28.21,13.5c.08-.31.14-.62.2-.94a16.2,16.2,0,0,0,.25-2.8C35.69,19.94,35.68,19.89,35.68,19.83Zm-3-6.39.1-.1c.12.23.23.47.34.72H33l-.29,0Zm-2.31-2.79V9.93c.25.27.5.54.73.83l-.29.43h-1L29.73,11ZM11.06,8.87v0h.32l0-.1h.52V9l-.15.21h-.72v-.3Zm.51.72.35-.06s0,.32,0,.32l-.72.05-.14-.17Zm22.12,6.35H32.52l-.71-.53-.75.07v.46h-.24l-.26-.19-1.3-.33v-.84l-1.65.13L27.1,15h-.65l-.32,0-.8.44v.83l-1.62,1.17.14.51h.33l-.09.47-.23.09,0,1.24,1.41,1.6h.61l0-.1H27l.32-.29h.62l.34.34.93.1-.12,1.23,1,1.82-.54,1,0,.48.43.43v1.17l.56.76v1h.49a14.67,14.67,0,0,1-24.9-15V13.8l.52-.64c.18-.35.38-.68.59-1l0,.27-.61.74c-.19.35-.36.72-.52,1.09v.84l.61.29v1.16l.58,1,.48.08.06-.35-.56-.86-.11-.84h.33l.14.86.81,1.19L8.31,18l.51.79,1.29.31v-.2l.51.07,0,.37.4.07.62.17.88,1,1.12.09.11.91-.76.54,0,.81-.11.5,1.11,1.4.09.47s.4.11.45.11.9.65.9.65v2.51l.31.09-.21,1.16.51.68-.09,1.15.67,1.19.87.76.88,0,.08-.29-.64-.54,0-.27.11-.32,0-.34h-.44l-.22-.28.36-.35,0-.26-.4-.11,0-.25.58-.08.87-.42.29-.54.92-1.17-.21-.92L20,27l.84,0,.57-.45.18-1.76.63-.8.11-.52-.57-.18-.38-.62H20.09l-1-.39,0-.74L18.67,21l-.93,0-.53-.84-.48-.23,0,.26-.87.05-.32-.44-.9-.19-.74.86-1.18-.2-.08-1.32-.86-.14.35-.65-.1-.37-1.12.75-.71-.09-.25-.55.15-.57.39-.72.9-.45H13.1v.53l.63.29L13.67,16l.45-.45L15,15l.06-.42L16,13.6l1-.53L16.86,13l.65-.61.24.06.11.14.25-.28.06,0-.27,0-.28-.09v-.27l.15-.12h.32l.15.07.12.25.16,0v0h0L19,12l.07-.22.25.07v.24l-.24.16h0l0,.26.82.25h.19v-.36l-.65-.29,0-.17.54-.18,0-.52-.56-.34,0-.86-.77.37h-.28l.07-.65-1-.25L17,9.83v1l-.78.25-.31.65-.34.06v-.84l-.73-.1-.36-.24-.15-.53,1.31-.77.64-.2.06.43h.36l0-.22.37-.05V9.17l-.16-.07,0-.22.46,0,.27-.29,0,0h0l.09-.09,1-.12.43.36L18,9.28l1.42.33.19-.47h.62l.22-.42L20,8.61V8.09l-1.38-.61-.95.11-.54.28,0,.68-.56-.08-.09-.38.54-.49-1,0-.28.09L15.68,8l.37.06L16,8.39l-.62,0-.1.24-.9,0a2.22,2.22,0,0,0-.06-.51l.71,0,.54-.52-.3-.15-.39.38-.65,0-.39-.53H13L12.12,8h.79l.07.24-.2.19.88,0,.13.32-1,0-.05-.24-.62-.14-.33-.18h-.74A14.66,14.66,0,0,1,29.38,9l-.17.32-.68.26-.29.31.07.36.35,0,.21.53.6-.24.1.7h-.18l-.49-.07-.55.09-.53.75-.76.12-.11.65.32.07-.1.42-.75-.15-.69.15-.15.39.12.8.41.19h.68l.46,0,.14-.37.72-.93.47.1.47-.42.08.32,1.15.78-.14.19-.52,0,.2.28.32.07.37-.16V14l.17-.09-.13-.14-.77-.42-.2-.57h.64l.2.2.55.47,0,.57.57.61.21-.83.39-.22.08.68.38.42h.76a12.23,12.23,0,0,1,.4,1.16ZM12.42,11.27l.38-.18.35.08-.12.47-.38.12Zm2,1.1v.3h-.87l-.33-.09.08-.21.42-.18h.58v.18Zm.41.42v.29l-.22.14-.27,0v-.48Zm-.25-.12v-.35l.3.28Zm.14.7v.29l-.21.21h-.47l.08-.32.22,0,0-.11Zm-1.16-.58h.48l-.62.87-.26-.14.06-.37Zm2,.48v.29h-.46L15,13.37v-.26h0Zm-.43-.39.13-.14.23.14-.18.15Zm18.79,3.8,0-.06c0,.09,0,.17.05.25Z"/><path d="M6.18,13.8v.45c.16-.37.33-.74.52-1.09Z"/></g></g></svg>
													<?php
}
}
/* {/block "layout_secondary_navigation_language_icon_desktop_image"} */
/* {block "layout_secondary_navigation_language_icon_desktop_code"} */
class Block_1495462956694c0648141d18_80075313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<span class="language-code hidden-xs">
												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18460899694c06481420f4_48178530', "layout_secondary_navigation_language_icon_desktop_image", $this->tplIndex);
?>

												<?php }?>
												<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['language_code']->value;?>
</span>
											</span>
												<?php
}
}
/* {/block "layout_secondary_navigation_language_icon_desktop_code"} */
/* {block "layout_secondary_navigation_language_icon_mobile_image"} */
class Block_1994305259694c0648143926_32031286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<span class="fa fa-globe"></span>
													<?php
}
}
/* {/block "layout_secondary_navigation_language_icon_mobile_image"} */
/* {block "layout_secondary_navigation_language_icon_mobile_label"} */
class Block_1180292186694c0648143e48_34684074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="topbar-label">&nbsp;<?php echo $_smarty_tpl->tpl_vars['general']->value['MENU_TOP_LANGUAGE_LABEL'];?>
</span><?php
}
}
/* {/block "layout_secondary_navigation_language_icon_mobile_label"} */
/* {block "layout_secondary_navigation_language_icon_mobile"} */
class Block_1807503462694c0648143356_79420526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<span class="visible-xs-block">
												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1994305259694c0648143926_32031286', "layout_secondary_navigation_language_icon_mobile_image", $this->tplIndex);
?>

												<?php }?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1180292186694c0648143e48_34684074', "layout_secondary_navigation_language_icon_mobile_label", $this->tplIndex);
?>

											</span>
												<?php
}
}
/* {/block "layout_secondary_navigation_language_icon_mobile"} */
/* {block "layout_secondary_navigation_language_icon"} */
class Block_2044123981694c0648141ad1_34161527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<a href="#" class="dropdown-toggle" data-toggle-hover="dropdown">

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1495462956694c0648141d18_80075313', "layout_secondary_navigation_language_icon_desktop_code", $this->tplIndex);
?>


												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1807503462694c0648143356_79420526', "layout_secondary_navigation_language_icon_mobile", $this->tplIndex);
?>

											</a>
										<?php
}
}
/* {/block "layout_secondary_navigation_language_icon"} */
/* {block "layout_secondary_navigation_currency_icon"} */
class Block_1536380517694c06481451a7_91951019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><polygon points="27.01 11.12 27.04 11.36 26.68 11.43 26.63 11.94 27.06 11.94 27.63 11.88 27.92 11.53 27.61 11.41 27.44 11.21 27.18 10.8 27.06 10.21 26.58 10.31 26.44 10.52 26.44 10.75 26.68 10.91 27.01 11.12"/><polygon points="26.6 11.31 26.62 10.99 26.34 10.87 25.94 10.96 25.65 11.44 25.65 11.74 25.99 11.74 26.6 11.31"/><path d="M18.47,12.66l-.09.22H18v.22h.1l0,.11.25,0,.16-.1.05-.21h.21l.08-.17-.19,0Z"/><polygon points="17.38 13.05 17.37 13.27 17.67 13.24 17.7 13.03 17.52 12.88 17.38 13.05"/><path d="M35.68,19.83a12.94,12.94,0,0,0-.07-1.39,15.83,15.83,0,0,0-1.06-4.35l-.12-.31a16,16,0,0,0-3-4.63l-.25-.26c-.24-.25-.48-.49-.73-.72a16,16,0,0,0-21.59.07,15.08,15.08,0,0,0-1.83,2,16,16,0,1,0,28.21,13.5c.08-.31.14-.62.2-.94a16.2,16.2,0,0,0,.25-2.8C35.69,19.94,35.68,19.89,35.68,19.83Zm-3-6.39.1-.1c.12.23.23.47.34.72H33l-.29,0Zm-2.31-2.79V9.93c.25.27.5.54.73.83l-.29.43h-1L29.73,11ZM11.06,8.87v0h.32l0-.1h.52V9l-.15.21h-.72v-.3Zm.51.72.35-.06s0,.32,0,.32l-.72.05-.14-.17Zm22.12,6.35H32.52l-.71-.53-.75.07v.46h-.24l-.26-.19-1.3-.33v-.84l-1.65.13L27.1,15h-.65l-.32,0-.8.44v.83l-1.62,1.17.14.51h.33l-.09.47-.23.09,0,1.24,1.41,1.6h.61l0-.1H27l.32-.29h.62l.34.34.93.1-.12,1.23,1,1.82-.54,1,0,.48.43.43v1.17l.56.76v1h.49a14.67,14.67,0,0,1-24.9-15V13.8l.52-.64c.18-.35.38-.68.59-1l0,.27-.61.74c-.19.35-.36.72-.52,1.09v.84l.61.29v1.16l.58,1,.48.08.06-.35-.56-.86-.11-.84h.33l.14.86.81,1.19L8.31,18l.51.79,1.29.31v-.2l.51.07,0,.37.4.07.62.17.88,1,1.12.09.11.91-.76.54,0,.81-.11.5,1.11,1.4.09.47s.4.11.45.11.9.65.9.65v2.51l.31.09-.21,1.16.51.68-.09,1.15.67,1.19.87.76.88,0,.08-.29-.64-.54,0-.27.11-.32,0-.34h-.44l-.22-.28.36-.35,0-.26-.4-.11,0-.25.58-.08.87-.42.29-.54.92-1.17-.21-.92L20,27l.84,0,.57-.45.18-1.76.63-.8.11-.52-.57-.18-.38-.62H20.09l-1-.39,0-.74L18.67,21l-.93,0-.53-.84-.48-.23,0,.26-.87.05-.32-.44-.9-.19-.74.86-1.18-.2-.08-1.32-.86-.14.35-.65-.1-.37-1.12.75-.71-.09-.25-.55.15-.57.39-.72.9-.45H13.1v.53l.63.29L13.67,16l.45-.45L15,15l.06-.42L16,13.6l1-.53L16.86,13l.65-.61.24.06.11.14.25-.28.06,0-.27,0-.28-.09v-.27l.15-.12h.32l.15.07.12.25.16,0v0h0L19,12l.07-.22.25.07v.24l-.24.16h0l0,.26.82.25h.19v-.36l-.65-.29,0-.17.54-.18,0-.52-.56-.34,0-.86-.77.37h-.28l.07-.65-1-.25L17,9.83v1l-.78.25-.31.65-.34.06v-.84l-.73-.1-.36-.24-.15-.53,1.31-.77.64-.2.06.43h.36l0-.22.37-.05V9.17l-.16-.07,0-.22.46,0,.27-.29,0,0h0l.09-.09,1-.12.43.36L18,9.28l1.42.33.19-.47h.62l.22-.42L20,8.61V8.09l-1.38-.61-.95.11-.54.28,0,.68-.56-.08-.09-.38.54-.49-1,0-.28.09L15.68,8l.37.06L16,8.39l-.62,0-.1.24-.9,0a2.22,2.22,0,0,0-.06-.51l.71,0,.54-.52-.3-.15-.39.38-.65,0-.39-.53H13L12.12,8h.79l.07.24-.2.19.88,0,.13.32-1,0-.05-.24-.62-.14-.33-.18h-.74A14.66,14.66,0,0,1,29.38,9l-.17.32-.68.26-.29.31.07.36.35,0,.21.53.6-.24.1.7h-.18l-.49-.07-.55.09-.53.75-.76.12-.11.65.32.07-.1.42-.75-.15-.69.15-.15.39.12.8.41.19h.68l.46,0,.14-.37.72-.93.47.1.47-.42.08.32,1.15.78-.14.19-.52,0,.2.28.32.07.37-.16V14l.17-.09-.13-.14-.77-.42-.2-.57h.64l.2.2.55.47,0,.57.57.61.21-.83.39-.22.08.68.38.42h.76a12.23,12.23,0,0,1,.4,1.16ZM12.42,11.27l.38-.18.35.08-.12.47-.38.12Zm2,1.1v.3h-.87l-.33-.09.08-.21.42-.18h.58v.18Zm.41.42v.29l-.22.14-.27,0v-.48Zm-.25-.12v-.35l.3.28Zm.14.7v.29l-.21.21h-.47l.08-.32.22,0,0-.11Zm-1.16-.58h.48l-.62.87-.26-.14.06-.37Zm2,.48v.29h-.46L15,13.37v-.26h0Zm-.43-.39.13-.14.23.14-.18.15Zm18.79,3.8,0-.06c0,.09,0,.17.05.25Z"/><path d="M6.18,13.8v.45c.16-.37.33-.74.52-1.09Z"/></g></g></svg>
														<?php
}
}
/* {/block "layout_secondary_navigation_currency_icon"} */
/* {block "layout_secondary_navigation_currency_icon_if"} */
class Block_1186590619694c0648144db6_96956986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1536380517694c06481451a7_91951019', "layout_secondary_navigation_currency_icon", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "layout_secondary_navigation_currency_icon_if"} */
/* {block "layout_secondary_navigation_currency_desktop"} */
class Block_863767274694c0648144b88_30027325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<span class="language-code hidden-xs">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1186590619694c0648144db6_96956986', "layout_secondary_navigation_currency_icon_if", $this->tplIndex);
?>


												<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['content_data']->value['CURRENT_CURRENCY'];?>
</span>
											</span>
												<?php
}
}
/* {/block "layout_secondary_navigation_currency_desktop"} */
/* {block "layout_secondary_navigation_currency_mobile"} */
class Block_1629911230694c0648145c65_35619579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<span class="visible-xs-block">
												<span class="topbar-label">&nbsp;<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_currency'];?>
</span>
											</span>
												<?php
}
}
/* {/block "layout_secondary_navigation_currency_mobile"} */
/* {block "layout_secondary_navigation_currency"} */
class Block_1996559903694c0648144953_78099159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<a href="#" class="dropdown-toggle" data-toggle-hover="dropdown">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_863767274694c0648144b88_30027325', "layout_secondary_navigation_currency_desktop", $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1629911230694c0648145c65_35619579', "layout_secondary_navigation_currency_mobile", $this->tplIndex);
?>

											</a>
										<?php
}
}
/* {/block "layout_secondary_navigation_currency"} */
/* {block "layout_secondary_navigation_country_desktop_icon"} */
class Block_419431955694c0648146d80_02186362 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><polygon points="27.01 11.12 27.04 11.36 26.68 11.43 26.63 11.94 27.06 11.94 27.63 11.88 27.92 11.53 27.61 11.41 27.44 11.21 27.18 10.8 27.06 10.21 26.58 10.31 26.44 10.52 26.44 10.75 26.68 10.91 27.01 11.12"/><polygon points="26.6 11.31 26.62 10.99 26.34 10.87 25.94 10.96 25.65 11.44 25.65 11.74 25.99 11.74 26.6 11.31"/><path d="M18.47,12.66l-.09.22H18v.22h.1l0,.11.25,0,.16-.1.05-.21h.21l.08-.17-.19,0Z"/><polygon points="17.38 13.05 17.37 13.27 17.67 13.24 17.7 13.03 17.52 12.88 17.38 13.05"/><path d="M35.68,19.83a12.94,12.94,0,0,0-.07-1.39,15.83,15.83,0,0,0-1.06-4.35l-.12-.31a16,16,0,0,0-3-4.63l-.25-.26c-.24-.25-.48-.49-.73-.72a16,16,0,0,0-21.59.07,15.08,15.08,0,0,0-1.83,2,16,16,0,1,0,28.21,13.5c.08-.31.14-.62.2-.94a16.2,16.2,0,0,0,.25-2.8C35.69,19.94,35.68,19.89,35.68,19.83Zm-3-6.39.1-.1c.12.23.23.47.34.72H33l-.29,0Zm-2.31-2.79V9.93c.25.27.5.54.73.83l-.29.43h-1L29.73,11ZM11.06,8.87v0h.32l0-.1h.52V9l-.15.21h-.72v-.3Zm.51.72.35-.06s0,.32,0,.32l-.72.05-.14-.17Zm22.12,6.35H32.52l-.71-.53-.75.07v.46h-.24l-.26-.19-1.3-.33v-.84l-1.65.13L27.1,15h-.65l-.32,0-.8.44v.83l-1.62,1.17.14.51h.33l-.09.47-.23.09,0,1.24,1.41,1.6h.61l0-.1H27l.32-.29h.62l.34.34.93.1-.12,1.23,1,1.82-.54,1,0,.48.43.43v1.17l.56.76v1h.49a14.67,14.67,0,0,1-24.9-15V13.8l.52-.64c.18-.35.38-.68.59-1l0,.27-.61.74c-.19.35-.36.72-.52,1.09v.84l.61.29v1.16l.58,1,.48.08.06-.35-.56-.86-.11-.84h.33l.14.86.81,1.19L8.31,18l.51.79,1.29.31v-.2l.51.07,0,.37.4.07.62.17.88,1,1.12.09.11.91-.76.54,0,.81-.11.5,1.11,1.4.09.47s.4.11.45.11.9.65.9.65v2.51l.31.09-.21,1.16.51.68-.09,1.15.67,1.19.87.76.88,0,.08-.29-.64-.54,0-.27.11-.32,0-.34h-.44l-.22-.28.36-.35,0-.26-.4-.11,0-.25.58-.08.87-.42.29-.54.92-1.17-.21-.92L20,27l.84,0,.57-.45.18-1.76.63-.8.11-.52-.57-.18-.38-.62H20.09l-1-.39,0-.74L18.67,21l-.93,0-.53-.84-.48-.23,0,.26-.87.05-.32-.44-.9-.19-.74.86-1.18-.2-.08-1.32-.86-.14.35-.65-.1-.37-1.12.75-.71-.09-.25-.55.15-.57.39-.72.9-.45H13.1v.53l.63.29L13.67,16l.45-.45L15,15l.06-.42L16,13.6l1-.53L16.86,13l.65-.61.24.06.11.14.25-.28.06,0-.27,0-.28-.09v-.27l.15-.12h.32l.15.07.12.25.16,0v0h0L19,12l.07-.22.25.07v.24l-.24.16h0l0,.26.82.25h.19v-.36l-.65-.29,0-.17.54-.18,0-.52-.56-.34,0-.86-.77.37h-.28l.07-.65-1-.25L17,9.83v1l-.78.25-.31.65-.34.06v-.84l-.73-.1-.36-.24-.15-.53,1.31-.77.64-.2.06.43h.36l0-.22.37-.05V9.17l-.16-.07,0-.22.46,0,.27-.29,0,0h0l.09-.09,1-.12.43.36L18,9.28l1.42.33.19-.47h.62l.22-.42L20,8.61V8.09l-1.38-.61-.95.11-.54.28,0,.68-.56-.08-.09-.38.54-.49-1,0-.28.09L15.68,8l.37.06L16,8.39l-.62,0-.1.24-.9,0a2.22,2.22,0,0,0-.06-.51l.71,0,.54-.52-.3-.15-.39.38-.65,0-.39-.53H13L12.12,8h.79l.07.24-.2.19.88,0,.13.32-1,0-.05-.24-.62-.14-.33-.18h-.74A14.66,14.66,0,0,1,29.38,9l-.17.32-.68.26-.29.31.07.36.35,0,.21.53.6-.24.1.7h-.18l-.49-.07-.55.09-.53.75-.76.12-.11.65.32.07-.1.42-.75-.15-.69.15-.15.39.12.8.41.19h.68l.46,0,.14-.37.72-.93.47.1.47-.42.08.32,1.15.78-.14.19-.52,0,.2.28.32.07.37-.16V14l.17-.09-.13-.14-.77-.42-.2-.57h.64l.2.2.55.47,0,.57.57.61.21-.83.39-.22.08.68.38.42h.76a12.23,12.23,0,0,1,.4,1.16ZM12.42,11.27l.38-.18.35.08-.12.47-.38.12Zm2,1.1v.3h-.87l-.33-.09.08-.21.42-.18h.58v.18Zm.41.42v.29l-.22.14-.27,0v-.48Zm-.25-.12v-.35l.3.28Zm.14.7v.29l-.21.21h-.47l.08-.32.22,0,0-.11Zm-1.16-.58h.48l-.62.87-.26-.14.06-.37Zm2,.48v.29h-.46L15,13.37v-.26h0Zm-.43-.39.13-.14.23.14-.18.15Zm18.79,3.8,0-.06c0,.09,0,.17.05.25Z"/><path d="M6.18,13.8v.45c.16-.37.33-.74.52-1.09Z"/></g></g></svg>
														<?php
}
}
/* {/block "layout_secondary_navigation_country_desktop_icon"} */
/* {block "layout_secondary_navigation_country_desktop_icon_if"} */
class Block_261181130694c06481469b9_48633742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_419431955694c0648146d80_02186362', "layout_secondary_navigation_country_desktop_icon", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "layout_secondary_navigation_country_desktop_icon_if"} */
/* {block "layout_secondary_navigation_country_desktop"} */
class Block_1480945438694c0648146787_24609839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<span class="hidden-xs">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261181130694c06481469b9_48633742', "layout_secondary_navigation_country_desktop_icon_if", $this->tplIndex);
?>


												<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['content_data']->value['SELECTED_COUNTRY'];?>
</span>
											</span>
												<?php
}
}
/* {/block "layout_secondary_navigation_country_desktop"} */
/* {block "layout_secondary_navigation_country_mobile"} */
class Block_52762132694c0648147808_56419211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<span class="visible-xs-block">
												<span class="topbar-label">&nbsp;<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_country'];?>
</span>
											</span>
												<?php
}
}
/* {/block "layout_secondary_navigation_country_mobile"} */
/* {block "layout_secondary_navigation_country"} */
class Block_1675408789694c0648146547_23724768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<a href="#" class="dropdown-toggle" data-toggle-hover="dropdown">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1480945438694c0648146787_24609839', "layout_secondary_navigation_country_desktop", $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52762132694c0648147808_56419211', "layout_secondary_navigation_country_mobile", $this->tplIndex);
?>

											</a>
										<?php
}
}
/* {/block "layout_secondary_navigation_country"} */
/* {block "layout_secondary_navigation_language_icon_if"} */
class Block_417854608694c0648141656_22413592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ($_smarty_tpl->tpl_vars['LANGUAGE_ICON']->value) {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2044123981694c0648141ad1_34161527', "layout_secondary_navigation_language_icon", $this->tplIndex);
?>

									<?php } elseif ($_smarty_tpl->tpl_vars['SHOW_TOP_CURRENCY_SELECTION']->value) {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1996559903694c0648144953_78099159', "layout_secondary_navigation_currency", $this->tplIndex);
?>

									<?php } elseif ($_smarty_tpl->tpl_vars['SHOW_TOP_COUNTRY_SELECTION']->value) {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1675408789694c0648146547_23724768', "layout_secondary_navigation_country", $this->tplIndex);
?>

									<?php }?>
								<?php
}
}
/* {/block "layout_secondary_navigation_language_icon_if"} */
/* {block "layout_secondary_navigation_form_icon"} */
class Block_1445793562694c0648149dc9_30607883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<div class="form-group">
																<label for="language-select"><?php echo $_smarty_tpl->tpl_vars['txt']->value['title_language'];?>
</label>
																<?php echo $_smarty_tpl->tpl_vars['LANGUAGES_DROPDOWN']->value;?>

															</div>
														<?php
}
}
/* {/block "layout_secondary_navigation_form_icon"} */
/* {block "layout_secondary_navigation_form_icon_if"} */
class Block_1215355224694c0648149987_24485797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['LANGUAGE_ICON']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445793562694c0648149dc9_30607883', "layout_secondary_navigation_form_icon", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "layout_secondary_navigation_form_icon_if"} */
/* {block "layout_secondary_navigation_form_currency"} */
class Block_485415067694c064814aab8_02265939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<div class="form-group">
																<label for="currencies-select"><?php echo $_smarty_tpl->tpl_vars['txt']->value['title_currency'];?>
</label>
																<?php echo $_smarty_tpl->tpl_vars['CURRENCIES_DROPDOWN']->value;?>

															</div>
														<?php
}
}
/* {/block "layout_secondary_navigation_form_currency"} */
/* {block "layout_secondary_navigation_form_currency_if"} */
class Block_1083117579694c064814a6e2_91215298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['SHOW_TOP_CURRENCY_SELECTION']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485415067694c064814aab8_02265939', "layout_secondary_navigation_form_currency", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "layout_secondary_navigation_form_currency_if"} */
/* {block "layout_secondary_navigation_form_country"} */
class Block_1533030173694c064814b743_35562101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<div class="form-group">
																<label for="countries-select"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['txt']->value['title_country'], ENT_QUOTES, 'UTF-8', true);?>
</label>
																<?php echo $_smarty_tpl->tpl_vars['COUNTRIES_DROPDOWN']->value;?>

															</div>
														<?php
}
}
/* {/block "layout_secondary_navigation_form_country"} */
/* {block "layout_secondary_navigation_form_country_if"} */
class Block_1228321662694c064814b347_70231097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['SHOW_TOP_COUNTRY_SELECTION']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1533030173694c064814b743_35562101', "layout_secondary_navigation_form_country", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "layout_secondary_navigation_form_country_if"} */
/* {block "layout_secondary_navigation_form_submit"} */
class Block_1256823002694c064814c2b7_93246880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<div class="dropdown-footer row">
														<input type="submit" class="btn btn-primary btn-block" value="<?php echo $_smarty_tpl->tpl_vars['buttons']->value['save'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['buttons']->value['save'];?>
" />
													</div>
												<?php
}
}
/* {/block "layout_secondary_navigation_form_submit"} */
/* {block "layout_secondary_navigation_form"} */
class Block_752460671694c06481483d6_94432212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.page_url.php','function'=>'smarty_function_page_url',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.url_param_to_hidden_fields.php','function'=>'smarty_function_url_param_to_hidden_fields',),));
?>

											<form action="<?php echo smarty_function_page_url(array(),$_smarty_tpl);?>
" method="POST" class="form-horizontal">

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1215355224694c0648149987_24485797', "layout_secondary_navigation_form_icon_if", $this->tplIndex);
?>


												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1083117579694c064814a6e2_91215298', "layout_secondary_navigation_form_currency_if", $this->tplIndex);
?>


												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1228321662694c064814b347_70231097', "layout_secondary_navigation_form_country_if", $this->tplIndex);
?>


												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1256823002694c064814c2b7_93246880', "layout_secondary_navigation_form_submit", $this->tplIndex);
?>


												<?php echo smarty_function_url_param_to_hidden_fields(array(),$_smarty_tpl);?>


											</form>
										<?php
}
}
/* {/block "layout_secondary_navigation_form"} */
/* {block "layout_secondary_navigation_account_name_icon"} */
class Block_667601388694c0648153939_14063698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<span class="language-code hidden-xs">
															<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M30.21,24.43a15,15,0,0,0-5.68-3.56,8.64,8.64,0,1,0-9.78,0,15,15,0,0,0-5.68,3.56A14.87,14.87,0,0,0,4.7,35H7a12.61,12.61,0,0,1,25.22,0h2.34A14.88,14.88,0,0,0,30.21,24.43ZM19.64,20.06A6.31,6.31,0,1,1,26,13.75,6.31,6.31,0,0,1,19.64,20.06Z"/></g></g></svg>
														</span>
															<span class="visible-xs-inline">
															<span class="fa fa-user-o"></span>
														</span>
														<?php
}
}
/* {/block "layout_secondary_navigation_account_name_icon"} */
/* {block "layout_secondary_navigation_account_name_icon_if"} */
class Block_1896910754694c0648152f88_74787644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<!-- layout_secondary_navigation_account_name_icon inside -->
													<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_667601388694c0648153939_14063698', "layout_secondary_navigation_account_name_icon", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "layout_secondary_navigation_account_name_icon_if"} */
/* {block "layout_secondary_navigation_account_name"} */
class Block_545707533694c0648151c42_00135840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<a href="<?php echo $_smarty_tpl->tpl_vars['ACCOUNT_URL']->value;?>
" class="dropdown-toggle" data-toggle-hover="dropdown" title="<?php echo $_smarty_tpl->tpl_vars['customers_data']->value['FIRST_NAME'];?>
 <?php echo $_smarty_tpl->tpl_vars['customers_data']->value['LAST_NAME'];?>
">
												<!-- layout_secondary_navigation_account_name_icon outside "a" tag -->
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1896910754694c0648152f88_74787644', "layout_secondary_navigation_account_name_icon_if", $this->tplIndex);
?>


												<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['customers_data']->value['FIRST_NAME'];?>
 <?php echo $_smarty_tpl->tpl_vars['customers_data']->value['LAST_NAME'];?>
</span>
												</a>
											<?php
}
}
/* {/block "layout_secondary_navigation_account_name"} */
/* {block "layout_secondary_navigation_account_dropdown_group"} */
class Block_814676960694c0648156dc7_13930752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.page_url.php','function'=>'smarty_function_page_url',),));
?>

																<li>
																	<?php if ($_smarty_tpl->tpl_vars['customers_data']->value['SHOW_ARROW']) {?>
																		<a title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_customers_data'];?>
" href="<?php echo smarty_function_page_url(array(),$_smarty_tpl);?>
#">
																			<?php echo $_smarty_tpl->tpl_vars['infobox']->value['group'];?>
: <?php echo $_smarty_tpl->tpl_vars['customers_data']->value['GROUP'];?>

																		</a>
																	<?php } else { ?>
																		<span class="disabled">
																	<?php echo $_smarty_tpl->tpl_vars['infobox']->value['group'];?>
: <?php echo $_smarty_tpl->tpl_vars['customers_data']->value['GROUP'];?>

																</span>
																	<?php }?>
																</li>
															<?php
}
}
/* {/block "layout_secondary_navigation_account_dropdown_group"} */
/* {block "layout_secondary_navigation_account_dropdown_group_if"} */
class Block_2082001280694c0648155f30_32085771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ($_smarty_tpl->tpl_vars['customers_data']->value['PUBLIC'] == '1') {?>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_814676960694c0648156dc7_13930752', "layout_secondary_navigation_account_dropdown_group", $this->tplIndex);
?>

														<?php }?>
													<?php
}
}
/* {/block "layout_secondary_navigation_account_dropdown_group_if"} */
/* {block "layout_secondary_navigation_account_dropdown_account"} */
class Block_1969978405694c064815a609_96339358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<li>
															<a href="<?php echo $_smarty_tpl->tpl_vars['ACCOUNT_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['button_account'];?>
">
																<?php echo $_smarty_tpl->tpl_vars['txt']->value['button_account'];?>

															</a>
														</li>
													<?php
}
}
/* {/block "layout_secondary_navigation_account_dropdown_account"} */
/* {block "layout_secondary_navigation_account_dropdown_login"} */
class Block_344729309694c064815c4f7_81626747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.page_url.php','function'=>'smarty_function_page_url',),));
?>

																<li class="divider"></li>
																<li class="login-off-item">
																	<a title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_login'];?>
" href="<?php echo smarty_function_page_url(array(),$_smarty_tpl);?>
#">
																		<?php echo $_smarty_tpl->tpl_vars['txt']->value['button_login'];?>

																	</a>
																</li>
															<?php
}
}
/* {/block "layout_secondary_navigation_account_dropdown_login"} */
/* {block "layout_secondary_navigation_account_dropdown_logout"} */
class Block_928771581694c064815dcc4_02854733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<li class="login-off-item">
																	<a title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_logoff'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['LOGOFF_URL']->value;?>
">

																		<?php echo $_smarty_tpl->tpl_vars['txt']->value['button_logoff'];?>

																	</a>
																</li>
															<?php
}
}
/* {/block "layout_secondary_navigation_account_dropdown_logout"} */
/* {block "layout_secondary_navigation_account_dropdown_login_if"} */
class Block_2143194956694c064815bb27_49307389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if (!$_smarty_tpl->tpl_vars['ACCOUNT_URL']->value) {?>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_344729309694c064815c4f7_81626747', "layout_secondary_navigation_account_dropdown_login", $this->tplIndex);
?>

														<?php } else { ?>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_928771581694c064815dcc4_02854733', "layout_secondary_navigation_account_dropdown_logout", $this->tplIndex);
?>

														<?php }?>
													<?php
}
}
/* {/block "layout_secondary_navigation_account_dropdown_login_if"} */
/* {block "layout_secondary_navigation_account_dropdown"} */
class Block_1031296838694c0648155984_44501183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<ul class="dropdown-menu">

													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2082001280694c0648155f30_32085771', "layout_secondary_navigation_account_dropdown_group_if", $this->tplIndex);
?>


													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1969978405694c064815a609_96339358', "layout_secondary_navigation_account_dropdown_account", $this->tplIndex);
?>


													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2143194956694c064815bb27_49307389', "layout_secondary_navigation_account_dropdown_login_if", $this->tplIndex);
?>

												</ul>
											<?php
}
}
/* {/block "layout_secondary_navigation_account_dropdown"} */
/* {block "layout_secondary_navigation_account"} */
class Block_1362922276694c064814ffc1_39845803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li class="dropdown navbar-topbar-item<?php if (mb_strtolower((string) $_smarty_tpl->tpl_vars['customers_data']->value['GROUP'], 'UTF-8') !== 'admin' && !$_smarty_tpl->tpl_vars['LANGUAGE_ICON']->value && !$_smarty_tpl->tpl_vars['SHOW_TOP_CURRENCY_SELECTION']->value && !$_smarty_tpl->tpl_vars['SHOW_TOP_COUNTRY_SELECTION']->value) {?> first<?php }?>">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_545707533694c0648151c42_00135840', "layout_secondary_navigation_account_name", $this->tplIndex);
?>


											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1031296838694c0648155984_44501183', "layout_secondary_navigation_account_dropdown", $this->tplIndex);
?>


										</li>
									<?php
}
}
/* {/block "layout_secondary_navigation_account"} */
/* {block "layout_secondary_navigation_login_dropdown_icon"} */
class Block_1636224441694c0648162af3_79352616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<span class="language-code hidden-xs">
														<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M30.21,24.43a15,15,0,0,0-5.68-3.56,8.64,8.64,0,1,0-9.78,0,15,15,0,0,0-5.68,3.56A14.87,14.87,0,0,0,4.7,35H7a12.61,12.61,0,0,1,25.22,0h2.34A14.88,14.88,0,0,0,30.21,24.43ZM19.64,20.06A6.31,6.31,0,1,1,26,13.75,6.31,6.31,0,0,1,19.64,20.06Z"/></g></g></svg>
													</span>
															<span class="visible-xs-inline">
														<span class="fa fa-user-o"></span>
													</span>
														<?php
}
}
/* {/block "layout_secondary_navigation_login_dropdown_icon"} */
/* {block "layout_secondary_navigation_login_dropdown_icon_if"} */
class Block_621410970694c06481621a0_27056823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1636224441694c0648162af3_79352616', "layout_secondary_navigation_login_dropdown_icon", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "layout_secondary_navigation_login_dropdown_icon_if"} */
/* {block "layout_secondary_navigation_login_dropdown"} */
class Block_2047605999694c064815ffd0_44943867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.page_url.php','function'=>'smarty_function_page_url',),));
?>

										<li class="dropdown navbar-topbar-item<?php if (mb_strtolower((string) $_smarty_tpl->tpl_vars['customers_data']->value['GROUP'], 'UTF-8') !== 'admin' && !$_smarty_tpl->tpl_vars['LANGUAGE_ICON']->value && !$_smarty_tpl->tpl_vars['SHOW_TOP_CURRENCY_SELECTION']->value && !$_smarty_tpl->tpl_vars['SHOW_TOP_COUNTRY_SELECTION']->value) {?> first<?php }?>">
											<a title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_login'];?>
" href="<?php echo smarty_function_page_url(array(),$_smarty_tpl);?>
#" class="dropdown-toggle" data-toggle-hover="dropdown">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_621410970694c06481621a0_27056823', "layout_secondary_navigation_login_dropdown_icon_if", $this->tplIndex);
?>


												<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['txt']->value['button_login'];?>
</span>
											</a>
											<?php echo $_smarty_tpl->tpl_vars['LOGIN_DROPDOWN']->value;?>

										</li>
									<?php
}
}
/* {/block "layout_secondary_navigation_login_dropdown"} */
/* {block "layout_secondary_navigation_account_if"} */
class Block_1467892007694c064814f143_06377048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['hideTopbar']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['ACCOUNT_URL']->value) {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1362922276694c064814ffc1_39845803', "layout_secondary_navigation_account", $this->tplIndex);
?>

								<?php } else { ?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2047605999694c064815ffd0_44943867', "layout_secondary_navigation_login_dropdown", $this->tplIndex);
?>

								<?php }?>
							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_account_if"} */
/* {block "layout_secondary_navigation_wishlist_icon"} */
class Block_1105977569694c0648166be4_91100140 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<span class="language-code hidden-xs">
													<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M19.19,36a1.16,1.16,0,0,0,1.62,0l12.7-12.61A10,10,0,0,0,20,8.7,10,10,0,0,0,6.5,23.42ZM8.12,10.91a7.6,7.6,0,0,1,5.49-2.26A7.46,7.46,0,0,1,19,10.88l0,0,.18.18a1.15,1.15,0,0,0,1.63,0l.18-.18A7.7,7.7,0,0,1,31.89,21.79L20,33.58,8.12,21.79A7.74,7.74,0,0,1,8.12,10.91Z"/></g></g></svg>
												</span>
														<span class="visible-xs-inline">
													<span class="fa fa-heart-o"></span>
												</span>
													<?php
}
}
/* {/block "layout_secondary_navigation_wishlist_icon"} */
/* {block "layout_secondary_navigation_wishlist_icon_if"} */
class Block_1436105282694c06481662e8_93797923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1105977569694c0648166be4_91100140', "layout_secondary_navigation_wishlist_icon", $this->tplIndex);
?>

												<?php }?>
											<?php
}
}
/* {/block "layout_secondary_navigation_wishlist_icon_if"} */
/* {block "layout_secondary_navigation_wishlist"} */
class Block_1558346213694c06481655c1_92609021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<li class="navbar-topbar-item">
										<a href="<?php echo $_smarty_tpl->tpl_vars['WISHLIST_URL']->value;?>
" class="dropdown-toggle" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_wish_list'];?>
">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436105282694c06481662e8_93797923', "layout_secondary_navigation_wishlist_icon_if", $this->tplIndex);
?>


											<span class="topbar-label"><?php echo $_smarty_tpl->tpl_vars['txt']->value['button_wish_list'];?>
</span>
										</a>
									</li>
								<?php
}
}
/* {/block "layout_secondary_navigation_wishlist"} */
/* {block "layout_secondary_navigation_wishlist_if"} */
class Block_1511717212694c0648164cb6_66232615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['WISHLIST_URL']->value) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1558346213694c06481655c1_92609021', "layout_secondary_navigation_wishlist", $this->tplIndex);
?>

							<?php }?>
						<?php
}
}
/* {/block "layout_secondary_navigation_wishlist_if"} */
/* {block "index_outer_wrapper_header_inside_shopping_cart"} */
class Block_999301329694c0648169a83_77170108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M31,13.66a1.08,1.08,0,0,0-1.07-1H26.08V11.28a6.31,6.31,0,0,0-12.62,0v1.36H9.27a1,1,0,0,0-1,1L5.21,32A3.8,3.8,0,0,0,9,35.8H30.19A3.8,3.8,0,0,0,34,31.94Zm-15.42-1V11.28a4.2,4.2,0,0,1,8.39,0v1.35Zm-1.06,5.59a1.05,1.05,0,0,0,1.06-1.06v-2.4H24v2.4a1.06,1.06,0,0,0,2.12,0v-2.4h2.84L31.86,32a1.68,1.68,0,0,1-1.67,1.68H9a1.67,1.67,0,0,1-1.68-1.61l2.94-17.31h3.19v2.4A1.06,1.06,0,0,0,14.51,18.22Z"/></g></g></svg>
									<?php
}
}
/* {/block "index_outer_wrapper_header_inside_shopping_cart"} */
/* {block "index_outer_wrapper_header_inside_shopping_cart_if"} */
class Block_1506911802694c0648169146_07282454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<!-- layout_header_SECONDARY_NAVIGATION.html malibu -->
								<?php if ($_smarty_tpl->tpl_vars['showTopNavIcons']->value) {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_999301329694c0648169a83_77170108', "index_outer_wrapper_header_inside_shopping_cart", $this->tplIndex);
?>

								<?php }?>
							<?php
}
}
/* {/block "index_outer_wrapper_header_inside_shopping_cart_if"} */
/* {block "layout_header_cart_basket_total"} */
class Block_1629086675694c064816ae71_60988449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['TOTAL']->value;
}
}
/* {/block "layout_header_cart_basket_total"} */
/* {block "layout_header_cart_products_count"} */
class Block_945485735694c064816b793_13484927 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['showProductsCount']->value == 'true') {?>
									<span class="cart-products-count edge<?php if ($_smarty_tpl->tpl_vars['PRODUCTS']->value == 0) {?> hidden<?php }?>">
										<?php echo $_smarty_tpl->tpl_vars['PRODUCTS']->value;?>

									</span>
								<?php } else { ?>
									<span class="cart-products-count edge<?php if ($_smarty_tpl->tpl_vars['productsCount']->value == 0) {?> hidden<?php }?>">
										<?php echo $_smarty_tpl->tpl_vars['productsCount']->value;?>

									</span>
								<?php }?>
							<?php
}
}
/* {/block "layout_header_cart_products_count"} */
/* {block "layout_secondary_navigation_content_link"} */
class Block_209649681694c064816e254_65578966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<li class="navbar-topbar-item visible-xs">
							<a title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['content_item']->value['NAME']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL'];?>
"
									<?php if ($_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'] && $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'] != '') {?>
								target="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'];?>
"
									<?php }?>>
								<span class="fa fa-arrow-circle-right"></span>
								&nbsp;<?php echo $_smarty_tpl->tpl_vars['content_item']->value['NAME'];?>

							</a>
						</li>
					<?php
}
}
/* {/block "layout_secondary_navigation_content_link"} */
/* {block "layout_secondary_navigation_nav"} */
class Block_1445078729694c0648129d86_29923833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.page_url.php','function'=>'smarty_function_page_url',),));
?>

				<nav class="navbar-inverse"  data-gambio-widget="menu link_crypter" data-menu-switch-element-position="false" data-menu-events='{"desktop": ["click"], "mobile": ["click"]}' data-menu-ignore-class="dropdown-menu">
					<ul class="nav navbar-nav">

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1328284840694c064812a1c6_51366890', "layout_secondary_navigation_content", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_286784658694c064812c730_46748856', "layout_secondary_navigation_desktop_top_search_if", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718858041694c064812e630_08494905', "layout_secondary_navigation_admin_if", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_819990625694c0648132072_37167657', "layout_secondary_navigation_edit_product_if", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308350875694c0648136307_70648690', "layout_secondary_navigation_edit_category_if", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1509606460694c064813ba94_18262837', "layout_secondary_navigation_edit_content_if", $this->tplIndex);
?>


						<?php if ($_smarty_tpl->tpl_vars['hideTopbar']->value && ($_smarty_tpl->tpl_vars['LANGUAGE_ICON']->value || $_smarty_tpl->tpl_vars['SHOW_TOP_CURRENCY_SELECTION']->value || $_smarty_tpl->tpl_vars['SHOW_TOP_COUNTRY_SELECTION']->value)) {?>
							<li class="dropdown navbar-topbar-item<?php if (mb_strtolower((string) $_smarty_tpl->tpl_vars['customers_data']->value['GROUP'], 'UTF-8') !== 'admin') {?> first<?php }?>">

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_417854608694c0648141656_22413592', "layout_secondary_navigation_language_icon_if", $this->tplIndex);
?>


								<ul class="level_2 dropdown-menu">
									<li>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_752460671694c06481483d6_94432212', "layout_secondary_navigation_form", $this->tplIndex);
?>

									</li>
								</ul>
							</li>
						<?php }?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1467892007694c064814f143_06377048', "layout_secondary_navigation_account_if", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1511717212694c0648164cb6_66232615', "layout_secondary_navigation_wishlist_if", $this->tplIndex);
?>


						<li class="dropdown navbar-topbar-item topbar-cart" data-gambio-widget="cart_dropdown">
						<a
								title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['button_cart'];?>
"
								class="dropdown-toggle"
								href="<?php echo smarty_function_page_url(array(),$_smarty_tpl);?>
#"
	                            data-toggle="cart"
						>
						<span class="cart-info-wrapper">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1506911802694c0648169146_07282454', "index_outer_wrapper_header_inside_shopping_cart_if", $this->tplIndex);
?>


							<span class="topbar-label">
								<?php echo $_smarty_tpl->tpl_vars['box_cart']->value['heading_cart'];?>
<br />
								<span class="products">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1629086675694c064816ae71_60988449', "layout_header_cart_basket_total", $this->tplIndex);
?>

								</span>
							</span>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_945485735694c064816b793_13484927', "layout_header_cart_products_count", $this->tplIndex);
?>

						</span>
						</a>

				</li>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONTENT_LINKS_DATA']->value, 'content_item', false, NULL, 'cat_data', array (
));
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209649681694c064816e254_65578966', "layout_secondary_navigation_content_link", $this->tplIndex);
?>

				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</ul>
		</nav>
				<?php
}
}
/* {/block "layout_secondary_navigation_nav"} */
/* {block "layout_secondary_navigation_navbar"} */
class Block_1861104877694c0648129ab5_01755404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="navbar-topbar">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445078729694c0648129d86_29923833', "layout_secondary_navigation_nav", $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block "layout_secondary_navigation_navbar"} */
/* {block "layout_secondary_navigation"} */
class Block_69395604694c06481272f9_36393719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_secondary_navigation' => 
  array (
    0 => 'Block_69395604694c06481272f9_36393719',
  ),
  'layout_secondary_navigation_mobile_top_search_if' => 
  array (
    0 => 'Block_942795845694c0648128763_30701733',
  ),
  'layout_secondary_navigation_mobile_top_search' => 
  array (
    0 => 'Block_672274640694c0648129166_97679826',
  ),
  'layout_secondary_navigation_navbar' => 
  array (
    0 => 'Block_1861104877694c0648129ab5_01755404',
  ),
  'layout_secondary_navigation_nav' => 
  array (
    0 => 'Block_1445078729694c0648129d86_29923833',
  ),
  'layout_secondary_navigation_content' => 
  array (
    0 => 'Block_1328284840694c064812a1c6_51366890',
  ),
  'layout_secondary_navigation_desktop_top_search_if' => 
  array (
    0 => 'Block_286784658694c064812c730_46748856',
  ),
  'layout_secondary_navigation_desktop_top_search' => 
  array (
    0 => 'Block_97276014694c064812cf77_98959204',
  ),
  'layout_secondary_navigation_search_icon_if' => 
  array (
    0 => 'Block_22870043694c064812d517_04385053',
  ),
  'layout_secondary_navigation_search_icon' => 
  array (
    0 => 'Block_110472059694c064812d9c3_09607518',
  ),
  'layout_secondary_navigation_admin_if' => 
  array (
    0 => 'Block_718858041694c064812e630_08494905',
  ),
  'layout_secondary_navigation_admin' => 
  array (
    0 => 'Block_1622442572694c064812ed60_28428637',
  ),
  'layout_secondary_navigation_admin_icon_if' => 
  array (
    0 => 'Block_178072796694c0648130cc7_72925504',
  ),
  'layout_secondary_navigation_admin_icon' => 
  array (
    0 => 'Block_123763860694c06481311c1_57863892',
  ),
  'layout_secondary_navigation_edit_product_if' => 
  array (
    0 => 'Block_819990625694c0648132072_37167657',
  ),
  'layout_secondary_navigation_edit_product' => 
  array (
    0 => 'Block_925767252694c0648134685_13908880',
  ),
  'layout_secondary_navigation_edit_product_icon_if' => 
  array (
    0 => 'Block_1360163764694c0648134fa0_68525023',
  ),
  'layout_secondary_navigation_edit_product_icon' => 
  array (
    0 => 'Block_40278437694c0648135442_21592807',
  ),
  'layout_secondary_navigation_edit_category_if' => 
  array (
    0 => 'Block_308350875694c0648136307_70648690',
  ),
  'layout_secondary_navigation_edit_category' => 
  array (
    0 => 'Block_1345895863694c0648138de5_73098969',
  ),
  'layout_secondary_navigation_edit_category_icon_if' => 
  array (
    0 => 'Block_424975008694c064813a150_37903010',
  ),
  'layout_secondary_navigation_edit_category_icon' => 
  array (
    0 => 'Block_633562736694c064813aa69_33921051',
  ),
  'layout_secondary_navigation_edit_content_if' => 
  array (
    0 => 'Block_1509606460694c064813ba94_18262837',
  ),
  'layout_secondary_navigation_edit_content' => 
  array (
    0 => 'Block_386009686694c064813c891_17172187',
  ),
  'layout_secondary_navigation_edit_content_icon_if' => 
  array (
    0 => 'Block_782765745694c064813cfd0_20686897',
  ),
  'layout_secondary_navigation_edit_content_icon' => 
  array (
    0 => 'Block_938461064694c064813d3a0_42617275',
  ),
  'layout_secondary_navigation_language_icon_if' => 
  array (
    0 => 'Block_417854608694c0648141656_22413592',
  ),
  'layout_secondary_navigation_language_icon' => 
  array (
    0 => 'Block_2044123981694c0648141ad1_34161527',
  ),
  'layout_secondary_navigation_language_icon_desktop_code' => 
  array (
    0 => 'Block_1495462956694c0648141d18_80075313',
  ),
  'layout_secondary_navigation_language_icon_desktop_image' => 
  array (
    0 => 'Block_18460899694c06481420f4_48178530',
  ),
  'layout_secondary_navigation_language_icon_mobile' => 
  array (
    0 => 'Block_1807503462694c0648143356_79420526',
  ),
  'layout_secondary_navigation_language_icon_mobile_image' => 
  array (
    0 => 'Block_1994305259694c0648143926_32031286',
  ),
  'layout_secondary_navigation_language_icon_mobile_label' => 
  array (
    0 => 'Block_1180292186694c0648143e48_34684074',
  ),
  'layout_secondary_navigation_currency' => 
  array (
    0 => 'Block_1996559903694c0648144953_78099159',
  ),
  'layout_secondary_navigation_currency_desktop' => 
  array (
    0 => 'Block_863767274694c0648144b88_30027325',
  ),
  'layout_secondary_navigation_currency_icon_if' => 
  array (
    0 => 'Block_1186590619694c0648144db6_96956986',
  ),
  'layout_secondary_navigation_currency_icon' => 
  array (
    0 => 'Block_1536380517694c06481451a7_91951019',
  ),
  'layout_secondary_navigation_currency_mobile' => 
  array (
    0 => 'Block_1629911230694c0648145c65_35619579',
  ),
  'layout_secondary_navigation_country' => 
  array (
    0 => 'Block_1675408789694c0648146547_23724768',
  ),
  'layout_secondary_navigation_country_desktop' => 
  array (
    0 => 'Block_1480945438694c0648146787_24609839',
  ),
  'layout_secondary_navigation_country_desktop_icon_if' => 
  array (
    0 => 'Block_261181130694c06481469b9_48633742',
  ),
  'layout_secondary_navigation_country_desktop_icon' => 
  array (
    0 => 'Block_419431955694c0648146d80_02186362',
  ),
  'layout_secondary_navigation_country_mobile' => 
  array (
    0 => 'Block_52762132694c0648147808_56419211',
  ),
  'layout_secondary_navigation_form' => 
  array (
    0 => 'Block_752460671694c06481483d6_94432212',
  ),
  'layout_secondary_navigation_form_icon_if' => 
  array (
    0 => 'Block_1215355224694c0648149987_24485797',
  ),
  'layout_secondary_navigation_form_icon' => 
  array (
    0 => 'Block_1445793562694c0648149dc9_30607883',
  ),
  'layout_secondary_navigation_form_currency_if' => 
  array (
    0 => 'Block_1083117579694c064814a6e2_91215298',
  ),
  'layout_secondary_navigation_form_currency' => 
  array (
    0 => 'Block_485415067694c064814aab8_02265939',
  ),
  'layout_secondary_navigation_form_country_if' => 
  array (
    0 => 'Block_1228321662694c064814b347_70231097',
  ),
  'layout_secondary_navigation_form_country' => 
  array (
    0 => 'Block_1533030173694c064814b743_35562101',
  ),
  'layout_secondary_navigation_form_submit' => 
  array (
    0 => 'Block_1256823002694c064814c2b7_93246880',
  ),
  'layout_secondary_navigation_account_if' => 
  array (
    0 => 'Block_1467892007694c064814f143_06377048',
  ),
  'layout_secondary_navigation_account' => 
  array (
    0 => 'Block_1362922276694c064814ffc1_39845803',
  ),
  'layout_secondary_navigation_account_name' => 
  array (
    0 => 'Block_545707533694c0648151c42_00135840',
  ),
  'layout_secondary_navigation_account_name_icon_if' => 
  array (
    0 => 'Block_1896910754694c0648152f88_74787644',
  ),
  'layout_secondary_navigation_account_name_icon' => 
  array (
    0 => 'Block_667601388694c0648153939_14063698',
  ),
  'layout_secondary_navigation_account_dropdown' => 
  array (
    0 => 'Block_1031296838694c0648155984_44501183',
  ),
  'layout_secondary_navigation_account_dropdown_group_if' => 
  array (
    0 => 'Block_2082001280694c0648155f30_32085771',
  ),
  'layout_secondary_navigation_account_dropdown_group' => 
  array (
    0 => 'Block_814676960694c0648156dc7_13930752',
  ),
  'layout_secondary_navigation_account_dropdown_account' => 
  array (
    0 => 'Block_1969978405694c064815a609_96339358',
  ),
  'layout_secondary_navigation_account_dropdown_login_if' => 
  array (
    0 => 'Block_2143194956694c064815bb27_49307389',
  ),
  'layout_secondary_navigation_account_dropdown_login' => 
  array (
    0 => 'Block_344729309694c064815c4f7_81626747',
  ),
  'layout_secondary_navigation_account_dropdown_logout' => 
  array (
    0 => 'Block_928771581694c064815dcc4_02854733',
  ),
  'layout_secondary_navigation_login_dropdown' => 
  array (
    0 => 'Block_2047605999694c064815ffd0_44943867',
  ),
  'layout_secondary_navigation_login_dropdown_icon_if' => 
  array (
    0 => 'Block_621410970694c06481621a0_27056823',
  ),
  'layout_secondary_navigation_login_dropdown_icon' => 
  array (
    0 => 'Block_1636224441694c0648162af3_79352616',
  ),
  'layout_secondary_navigation_wishlist_if' => 
  array (
    0 => 'Block_1511717212694c0648164cb6_66232615',
  ),
  'layout_secondary_navigation_wishlist' => 
  array (
    0 => 'Block_1558346213694c06481655c1_92609021',
  ),
  'layout_secondary_navigation_wishlist_icon_if' => 
  array (
    0 => 'Block_1436105282694c06481662e8_93797923',
  ),
  'layout_secondary_navigation_wishlist_icon' => 
  array (
    0 => 'Block_1105977569694c0648166be4_91100140',
  ),
  'index_outer_wrapper_header_inside_shopping_cart_if' => 
  array (
    0 => 'Block_1506911802694c0648169146_07282454',
  ),
  'index_outer_wrapper_header_inside_shopping_cart' => 
  array (
    0 => 'Block_999301329694c0648169a83_77170108',
  ),
  'layout_header_cart_basket_total' => 
  array (
    0 => 'Block_1629086675694c064816ae71_60988449',
  ),
  'layout_header_cart_products_count' => 
  array (
    0 => 'Block_945485735694c064816b793_13484927',
  ),
  'layout_secondary_navigation_content_link' => 
  array (
    0 => 'Block_209649681694c064816e254_65578966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

	<div id="topbar-container">
		<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-show-search-top-nav"),$_smarty_tpl);
$_prefixVariable16 = ob_get_clean();
$_smarty_tpl->_assignInScope('showTopSearch', $_prefixVariable16);?>
		<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-search-col"),$_smarty_tpl);
$_prefixVariable17 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideSearchCol', $_prefixVariable17);?>
		<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-navbar-topbar-show-icons"),$_smarty_tpl);
$_prefixVariable18 = ob_get_clean();
$_smarty_tpl->_assignInScope('showTopNavIcons', $_prefixVariable18);?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942795845694c0648128763_30701733', "layout_secondary_navigation_mobile_top_search_if", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1861104877694c0648129ab5_01755404', "layout_secondary_navigation_navbar", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "layout_secondary_navigation"} */
}
