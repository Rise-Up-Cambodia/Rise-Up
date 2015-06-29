<?php /* Smarty version 2.6.26, created on 2015-06-28 12:38:26
         compiled from C:%5Cwamp%5Cwww%5CRise-Up-Shop%5Chtml/../data/Smarty/templates/default_en-US/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/header.tpl', 2, false),array('modifier', 'h', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/header.tpl', 46, false),array('modifier', 'number_format', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/header.tpl', 86, false),array('modifier', 'default', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/header.tpl', 86, false),)), $this); ?>
<!--▼HEADER-->
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/custom.js"></script>
<script>
window.onload=function(){
	$title = document.title;
	
	if($title.indexOf('All products')>0)
	{
		$("li a:contains('Products')").css("background","#f0433f");
		$("li a:contains('Products')").css("color","#fff");
		$("li a:contains('Home')").css("background","none");
		$("li a:contains('Home')").css("color","#f0433f");
	}
	else if($title.indexOf('Our Brands')>0)
	{
		$("li a:contains('Brands')").css("background","#f0433f");
		$("li a:contains('Brands')").css("color","#fff");
		$("li a:contains('Home')").css("background","none");
		$("li a:contains('Home')").css("color","#f0433f");
	}
	else if($title.indexOf('Popular Products')>0)
	{
		$("li a:contains('Popular Product')").css("background","#f0433f");
		$("li a:contains('Popular Product')").css("color","#fff");
		$("li a:contains('Home')").css("background","none");
		$("li a:contains('Home')").css("color","#f0433f");
	}
	else if($title.indexOf('MY page')>0)
	{
		$("li a:contains('User Profile')").css("background","#f0433f");
		$("li a:contains('User Profile')").css("color","#fff");
		$("li a:contains('Home')").css("background","none");
		$("li a:contains('Home')").css("color","#f0433f");
	}
	else
	{
		$("li a:contains('Home')").css("background","#f0433f");
	}
	
}
</script>
<div id="header_wrap">
    <div id="header" class="clearfix">
        <div id="logo_area">
            <h1>
                <a href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/logo.png" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" /><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</span></a>
            </h1>
        </div>
        <div class="search_div">
            <!--検索フォーム-->
            <form name="search_form" method="get" action="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php">
                <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                <table class="search-box" border="none">
               <tr>
                   <td> <input type="text" class="search-input" name="name" placeholder="Search Product" class="box140" maxlength="50" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" /></td>
                       <td class="col-button-search">     <p class="btn">     <button class="bt02" id="button-search" name="search"></button></td>

               </tr>
                </div>
                </table>
            </form>
        </div>
        
            <div id="header_navi">
                <ul> <br/><br/> <br/><br/> <br/><br/>
                                        <li class="entry" id="active" >
                        <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">Home</a>
                    </li>
                    <li class="view_basket"  id="active" >
                        <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php">Products</a>
                    </li>
                    <li class="view_basket"  id="active" >
                        <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
brand/brand.php">Brands</a>
                    </li>
                    <li class="view_basket"  id="active">
                        <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/popular.php">Popular Product</a>
                    </li>
                    <li class="view_basket"  id="active" >
                        <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage/login.php">User Profile</a>
                    </li>
                </ul>
				<div id="cart_view">	
						<p class="item"><a class="btn-viewcart" href="<?php echo ((is_array($_tmp=@CART_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">View cart</a>
						Items in cart:<span class="attention"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCartList']['0']['TotalQuantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</span></p>
				</div>
            </div>
        </div>
    </div>
</div>
