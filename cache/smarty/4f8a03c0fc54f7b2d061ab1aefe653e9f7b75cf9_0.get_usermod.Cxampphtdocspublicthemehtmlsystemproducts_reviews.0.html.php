<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproducts_reviews.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b822ac2_95486721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8a03c0fc54f7b2d061ab1aefe653e9f7b75cf9' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproducts_reviews.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b822ac2_95486721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"reviews"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1083167766694d6d5b7e5034_60543614', "products_reviews");
}
/* {block "products_reviews_title"} */
class Block_501265687694d6d5b7f8be6_71740201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<h2 class="product-review-heading"><?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_reviews'];?>
</h2>
					<?php
}
}
/* {/block "products_reviews_title"} */
/* {block "products_reviews_title_if"} */
class Block_272867787694d6d5b7f79d8_25080509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['showAsTab']->value !== 'true') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_501265687694d6d5b7f8be6_71740201', "products_reviews_title", $this->tplIndex);
?>

				<?php }?>
			<?php
}
}
/* {/block "products_reviews_title_if"} */
/* {block "products_reviews_item_rating"} */
class Block_605636415694d6d5b7fcb59_63857732 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="rating-stars rating-stars-<?php echo $_smarty_tpl->tpl_vars['module_data']->value['RATING_CLEAN']*10;?>
">
										<span class="gm-star"></span>
										<span class="gm-star"></span>
										<span class="gm-star"></span>
										<span class="gm-star"></span>
										<span class="gm-star"></span>
										<div class="rating-stars-mask">
											<div class="rating-stars-inside">
												<span class="gm-star"></span>
												<span class="gm-star"></span>
												<span class="gm-star"></span>
												<span class="gm-star"></span>
												<span class="gm-star"></span>
											</div>
										</div>
									</div>
								<?php
}
}
/* {/block "products_reviews_item_rating"} */
/* {block "products_reviews_item_author"} */
class Block_2001309190694d6d5b7fedd7_70426988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<span>
												<span>
													<?php echo $_smarty_tpl->tpl_vars['module_data']->value['AUTHOR'];?>
,
												</span>
											</span>
										<?php
}
}
/* {/block "products_reviews_item_author"} */
/* {block "products_reviews_item_date"} */
class Block_1509277942694d6d5b8005a8_11419425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<span>
												<?php echo $_smarty_tpl->tpl_vars['module_data']->value['DATE'];?>

											</span>
										<?php
}
}
/* {/block "products_reviews_item_date"} */
/* {block "products_reviews_item_author_date"} */
class Block_511900936694d6d5b7fe627_25430960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="rating-caption">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2001309190694d6d5b7fedd7_70426988', "products_reviews_item_author", $this->tplIndex);
?>

										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1509277942694d6d5b8005a8_11419425', "products_reviews_item_date", $this->tplIndex);
?>

									</div>
								<?php
}
}
/* {/block "products_reviews_item_author_date"} */
/* {block "products_reviews_item_comment_review"} */
class Block_434098686694d6d5b802618_20691047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_review.php','function'=>'smarty_function_product_review',),));
?>

												<?php echo smarty_function_product_review(array('long'=>$_smarty_tpl->tpl_vars['module_data']->value['TEXT'],'short'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['module_data']->value['TEXT'],150,''),'link'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['module_data']->value['LINK'])."\" class=\"btn btn-default pull-right more-text-link\" title=\"".((string)$_smarty_tpl->tpl_vars['txt']->value['text_reviews_link'])."\">".((string)$_smarty_tpl->tpl_vars['txt']->value['text_reviews_link'])."</a>",'out-remainder'=>'review_remainder','out-link'=>'review_link'),$_smarty_tpl);?>

											<?php
}
}
/* {/block "products_reviews_item_comment_review"} */
/* {block "products_reviews_item_comment_text"} */
class Block_1572638883694d6d5b80ead4_55128611 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<span class="more-text-split">
													<?php echo $_smarty_tpl->tpl_vars['module_data']->value['TEXT'];?>

												</span>
												<span class="more-text-full hide">
													<?php echo $_smarty_tpl->tpl_vars['review_remainder']->value;?>

												</span>
											<?php
}
}
/* {/block "products_reviews_item_comment_text"} */
/* {block "products_reviews_item_comment_link"} */
class Block_2103853304694d6d5b810586_21027999 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<br />
												<?php echo $_smarty_tpl->tpl_vars['review_link']->value;?>

											<?php
}
}
/* {/block "products_reviews_item_comment_link"} */
/* {block "products_reviews_item_comment"} */
class Block_1426824285694d6d5b801e74_76755263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="rating-comment">
										<div class="more-text-container">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_434098686694d6d5b802618_20691047', "products_reviews_item_comment_review", $this->tplIndex);
?>

											
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1572638883694d6d5b80ead4_55128611', "products_reviews_item_comment_text", $this->tplIndex);
?>

											
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2103853304694d6d5b810586_21027999', "products_reviews_item_comment_link", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "products_reviews_item_comment"} */
/* {block "products_reviews_item"} */
class Block_660869445694d6d5b7fc390_37734268 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<li class="rating-item list-group-item clearfix">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_605636415694d6d5b7fcb59_63857732', "products_reviews_item_rating", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_511900936694d6d5b7fe627_25430960', "products_reviews_item_author_date", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426824285694d6d5b801e74_76755263', "products_reviews_item_comment", $this->tplIndex);
?>

							</li>
						<?php
}
}
/* {/block "products_reviews_item"} */
/* {block "products_reviews_list"} */
class Block_1540264965694d6d5b7fac77_20430127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<ul class="list-group">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_content']->value, 'module_data', false, 'key', 'aussen', array (
));
$_smarty_tpl->tpl_vars['module_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module_data']->value) {
$_smarty_tpl->tpl_vars['module_data']->do_else = false;
?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_660869445694d6d5b7fc390_37734268', "products_reviews_item", $this->tplIndex);
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			<?php
}
}
/* {/block "products_reviews_list"} */
/* {block "products_reviews_no_reviews_title"} */
class Block_976403619694d6d5b814819_30118433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['showAsTab']->value !== 'true') {?>
					<h2><?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_reviews'];?>
</h2>
				<?php }?>
			<?php
}
}
/* {/block "products_reviews_no_reviews_title"} */
/* {block "products_reviews_no_reviews_text"} */
class Block_472708752694d6d5b816971_56297700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<p class="no-rating-hint"><?php echo $_smarty_tpl->tpl_vars['txt']->value['no_reviews'];?>
</p>
			<?php
}
}
/* {/block "products_reviews_no_reviews_text"} */
/* {block "products_reviews_not_allowed_title"} */
class Block_503252459694d6d5b8184d4_58256097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['showAsTab']->value !== 'true') {?>
					<h2><?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_reviews'];?>
</h2>
				<?php }?>
			<?php
}
}
/* {/block "products_reviews_not_allowed_title"} */
/* {block "products_reviews_not_allowed_text"} */
class Block_482196212694d6d5b81a561_02121496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<p><?php echo $_smarty_tpl->tpl_vars['txt']->value['reading_not_allowed'];?>
</p>
			<?php
}
}
/* {/block "products_reviews_not_allowed_text"} */
/* {block "products_reviews_buttons_submit"} */
class Block_1473907016694d6d5b81d201_41079192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<a class="btn btn-primary btn-block" href="<?php echo $_smarty_tpl->tpl_vars['BUTTON_LINK']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['button']->value['your_opinion'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['button']->value['your_opinion'];?>

							</a>
						<?php
}
}
/* {/block "products_reviews_buttons_submit"} */
/* {block "products_reviews_buttons"} */
class Block_400692425694d6d5b81ca43_42743830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="row">
					<div class="col-xs-6 col-xs-offset-6 col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 text-right">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1473907016694d6d5b81d201_41079192', "products_reviews_buttons_submit", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "products_reviews_buttons"} */
/* {block "products_reviews_login_hint"} */
class Block_1270387739694d6d5b8205a1_50377740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<p class="no-login-hint"><?php echo $_smarty_tpl->tpl_vars['txt']->value['no_login_hint'];?>
 <a href="login.php"><?php echo $_smarty_tpl->tpl_vars['txt']->value['login'];?>
</a></p>
			<?php
}
}
/* {/block "products_reviews_login_hint"} */
/* {block "products_reviews"} */
class Block_1083167766694d6d5b7e5034_60543614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products_reviews' => 
  array (
    0 => 'Block_1083167766694d6d5b7e5034_60543614',
  ),
  'products_reviews_title_if' => 
  array (
    0 => 'Block_272867787694d6d5b7f79d8_25080509',
  ),
  'products_reviews_title' => 
  array (
    0 => 'Block_501265687694d6d5b7f8be6_71740201',
  ),
  'products_reviews_list' => 
  array (
    0 => 'Block_1540264965694d6d5b7fac77_20430127',
  ),
  'products_reviews_item' => 
  array (
    0 => 'Block_660869445694d6d5b7fc390_37734268',
  ),
  'products_reviews_item_rating' => 
  array (
    0 => 'Block_605636415694d6d5b7fcb59_63857732',
  ),
  'products_reviews_item_author_date' => 
  array (
    0 => 'Block_511900936694d6d5b7fe627_25430960',
  ),
  'products_reviews_item_author' => 
  array (
    0 => 'Block_2001309190694d6d5b7fedd7_70426988',
  ),
  'products_reviews_item_date' => 
  array (
    0 => 'Block_1509277942694d6d5b8005a8_11419425',
  ),
  'products_reviews_item_comment' => 
  array (
    0 => 'Block_1426824285694d6d5b801e74_76755263',
  ),
  'products_reviews_item_comment_review' => 
  array (
    0 => 'Block_434098686694d6d5b802618_20691047',
  ),
  'products_reviews_item_comment_text' => 
  array (
    0 => 'Block_1572638883694d6d5b80ead4_55128611',
  ),
  'products_reviews_item_comment_link' => 
  array (
    0 => 'Block_2103853304694d6d5b810586_21027999',
  ),
  'products_reviews_no_reviews_title' => 
  array (
    0 => 'Block_976403619694d6d5b814819_30118433',
  ),
  'products_reviews_no_reviews_text' => 
  array (
    0 => 'Block_472708752694d6d5b816971_56297700',
  ),
  'products_reviews_not_allowed_title' => 
  array (
    0 => 'Block_503252459694d6d5b8184d4_58256097',
  ),
  'products_reviews_not_allowed_text' => 
  array (
    0 => 'Block_482196212694d6d5b81a561_02121496',
  ),
  'products_reviews_buttons' => 
  array (
    0 => 'Block_400692425694d6d5b81ca43_42743830',
  ),
  'products_reviews_buttons_submit' => 
  array (
    0 => 'Block_1473907016694d6d5b81d201_41079192',
  ),
  'products_reviews_login_hint' => 
  array (
    0 => 'Block_1270387739694d6d5b8205a1_50377740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<div data-gambio-widget="more_text">
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['module_content']->value) > 0 && $_SESSION['customers_status']['customers_status_read_reviews'] === '1') {?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_272867787694d6d5b7f79d8_25080509', "products_reviews_title_if", $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1540264965694d6d5b7fac77_20430127', "products_reviews_list", $this->tplIndex);
?>

		<?php } elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['module_content']->value) <= 0 && $_SESSION['customers_status']['customers_status_read_reviews'] === '1') {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_976403619694d6d5b814819_30118433', "products_reviews_no_reviews_title", $this->tplIndex);
?>

	
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_472708752694d6d5b816971_56297700', "products_reviews_no_reviews_text", $this->tplIndex);
?>

		<?php } else { ?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_503252459694d6d5b8184d4_58256097', "products_reviews_not_allowed_title", $this->tplIndex);
?>

	
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_482196212694d6d5b81a561_02121496', "products_reviews_not_allowed_text", $this->tplIndex);
?>

		<?php }?>
	
		<?php if ($_SESSION['customers_status']['customers_status_write_reviews'] === '1') {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_400692425694d6d5b81ca43_42743830', "products_reviews_buttons", $this->tplIndex);
?>

		<?php } elseif ($_SESSION['customers_status']['customers_status_id'] === '1') {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270387739694d6d5b8205a1_50377740', "products_reviews_login_hint", $this->tplIndex);
?>

		<?php }?>
	</div>
<?php
}
}
/* {/block "products_reviews"} */
}
