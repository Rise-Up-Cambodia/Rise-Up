<link rel="stylesheet" type="text/css" href="<!--{$TPL_URLPATH}-->css/brand.css"/>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/lb.js"></script>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/custom.js"></script>
<h2 class="title"><!--{$tpl_subtitle|h}--></h2>
<div id="undercolumn_aboutus">
   <!-- {$brand_id = $smarty.get.brand_id }-->
    <!--{foreach from=$arrResults item=arrResult name="recommend_products"}-->
             <!--{if $smarty.get.brand_id == $arrResult.brand_id}-->
          <div class="brand-logo">
              <a  href="<!--{$smarty.const.ROOT_URLPATH}-->brand/brand_detail.php?brand_id=<!--{$arrResult.brand_id}-->"><img src="<!--{$TPL_URLPATH}-->img/picture/<!--{$arrResult.image_path}-->" class="picture" id="pic_detail"/></a>
          </div>
    <table id="brand_dt_dtb">
        <tr>
            <th>Company Name</th>
            <td><!--{$arrResult.name}--></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><!--{$arrResult.email}--></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><!--{$arrResult.description}--></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><!--{$arrResult.address}--></td>
        </tr>
        <tr>
            <th>Website</th>
            <td><!--{$arrResult.website}--></td>
        </tr>
           <!--{/if}-->
    </table>
    <!--{/foreach}-->
</div>
<!--pop up image------>
<div class="overlay" id="ov" onclick="hide()"></div>
<div class="viewer" id="viewer"></div>

