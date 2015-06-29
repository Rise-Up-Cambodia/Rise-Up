
<h2 class="title"><!--{$tpl_subtitle|h}--></h2>
<div id="undercolumn_aboutus">
    <table>
        <tr>
            <!--{$i = 0}-->
            <!--{foreach from=$arrResults item=arrResult name="recommend_products"}-->
            <td class="brand-logo"> <a  href="<!--{$smarty.const.ROOT_URLPATH}-->products/detail.php?product_id=<!--{$arrResult.product_id}-->"><img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrResult.main_list_image}-->" alt="<!--{$arrProduct.name|h}-->" class="picture" /></a>
                <h3 class="brand-name"><!--{$arrResult.name}--></h3></a></td>
            <!--{/foreach}-->
        </tr>
    </table>
</div>
<!--pop up image------>
<div class="overlay" id="ov" onclick="hide()"></div>
<div class="viewer" id="viewer"></div>

