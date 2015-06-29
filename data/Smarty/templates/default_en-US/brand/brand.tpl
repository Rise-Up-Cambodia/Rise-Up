<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/custom.js"></script>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/lb.js"></script>

<link rel="stylesheet" href="<!--{$TPL_URLPATH}-->css/style.css" type="text/css"/>



<div id="undercolumn_aboutus">
    <h2 class="title">Brand List</h2>
    <table class="brand"" border="none">

        <tr>

  <!--{foreach from=$arrResults item=arrResult name="brand"}-->


            <td> <img src="<!--{$TPL_URLPATH}-->img/brand/<!--{$arrResult.image_path}-->" class="picture" onclick="view(this.src)" /><br/><br/><span class="tname"><b><!--{$arrResult.name}--></b></span></td>






        <!--{/foreach}-->
        </tr>
    </table>
    <div class="overlay" id="ov" onclick="hide()"></div>
    <div class="viewer" id="viewer"></div>

</div>

