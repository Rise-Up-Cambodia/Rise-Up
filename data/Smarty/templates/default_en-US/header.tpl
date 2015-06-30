<!--▼HEADER-->
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/custom.js"></script>
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
                <a href="<!--{$smarty.const.TOP_URLPATH}-->"><img src="<!--{$TPL_URLPATH}-->img/common/logo.png" alt="<!--{$arrSiteInfo.shop_name|h}-->" /><span><!--{$arrSiteInfo.shop_name|h}-->/<!--{$tpl_title|h}--></span></a>
            </h1>
        </div>
        <div class="search_div">
            <!--検索フォーム-->
            <form name="search_form" method="get" action="<!--{$smarty.const.ROOT_URLPATH}-->products/list.php">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <table class="search-box" border="none">
               <tr>
                   <td> <input type="text" class="search-input" name="name" placeholder="Search Product" class="box140" maxlength="50" value="<!--{$smarty.get.name|h}-->" /></td>
                       <td class="col-button-search">     <p class="btn">     <button class="bt02" id="button-search" name="search"></button></td>

               </tr>
                </div>
                </table>
            </form>
        </div>
        
            <div id="header_navi">
                <ul> <br/><br/> <br/><br/> <br/><br/>
                    <!--{*<a href="<!--{$smarty.const.HTTPS_URL}-->mypage/login.php">MY page</a>*}
                    {*</li>*}-->
                    <li class="entry" id="active" >
                        <a href="<!--{$smarty.const.ROOT_URLPATH}-->">Home</a>
                    </li>
                    <li class="view_basket"  id="active" >
                        <a href="<!--{$smarty.const.HTTPS_URL}-->products/list.php">Products</a>
                    </li>
                    <li class="view_basket"  id="active" >
                        <a href="<!--{$smarty.const.HTTPS_URL}-->brand/brand.php">Brands</a>
                    </li>
                    <li class="view_basket"  id="active">
                        <a href="<!--{$smarty.const.HTTPS_URL}-->products/popular.php">Popular Product</a>
                    </li>
                    <li class="view_basket"  id="active" >
                        <a href="<!--{$smarty.const.HTTPS_URL}-->mypage/login.php">User Profile</a>
                    </li>
                </ul>
				<div id="cart_view">

				</div>
            </div>
        </div>
    </div>
</div>

