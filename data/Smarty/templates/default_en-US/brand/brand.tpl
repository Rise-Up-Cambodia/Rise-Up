<link rel="stylesheet" type="text/css" href="<!--{$TPL_URLPATH}-->css/brand.css"/>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/lb.js"></script>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/custom.js"></script>
<h2 class="title"><!--{$tpl_subtitle|h}--></h2>
<div id="undercolumn_aboutus">
    <table>
        <tr>
            <!--{$i = 0}-->
    <!--{foreach from=$arrResults item=arrResult name="recommend_products"}-->
            <td class="brand-logo"> <a  href="<!--{$smarty.const.ROOT_URLPATH}-->brand/brand_detail.php?brand_id=<!--{$arrResult.brand_id}-->"><img src="../upload/brand/<!--{$arrResult.image_path}-->" class="picture" id="pic"/>
            <h3 class="brand-name"><!--{$arrResult.name}--></h3></a></td>
    <!--{/foreach}-->
        </tr>
    </table>
</div>
<!--pop up image------>
<div class="overlay" id="ov" onclick="hide()"></div>
<div class="viewer" id="viewer"></div>

