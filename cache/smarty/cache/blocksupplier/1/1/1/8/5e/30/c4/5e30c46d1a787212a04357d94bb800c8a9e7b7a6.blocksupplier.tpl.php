<?php /*%%SmartyHeaderCode:56532602456fd14b9f3a909-67119415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e30c46d1a787212a04357d94bb800c8a9e7b7a6' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1459425809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56532602456fd14b9f3a909-67119415',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fd15fe959698_59379221',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fd15fe959698_59379221')) {function content_56fd15fe959698_59379221($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost:8888/prestashop/en/supplier" title="Suppliers">
					Suppliers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost:8888/prestashop/en/1__fashion-supplier" 
					title="More about Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">All suppliers</option>
													<option value="http://localhost:8888/prestashop/en/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
