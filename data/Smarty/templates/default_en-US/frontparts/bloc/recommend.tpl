<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2012 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *}-->
<h2 class="title">New Products</h2>

<!--▼検索条件-->
<!--{if $tpl_subtitle == "Search results"}-->
<ul class="pagecond_area">
    <li><strong>Product category:</strong><!--{$arrSearch.category|h}--></li>
    <!--{if $arrSearch.maker|strlen >= 1}--><li><strong>Manufacturer:</strong><!--{$arrSearch.maker|h}--></li><!--{/if}-->
    <li><strong>Product name:</strong><!--{$arrSearch.name|h}--></li>
</ul>

<!--{/if}-->
<div class="block_body clearfix">
    <table class="table-item">
        <tr>
            <!--{foreach from=$arrProducts item=arrProduct name=arrProducts}-->

            <!--{if $smarty.foreach.arrProducts.first}-->
            <!--▼件数-->
        <div>
            There are <span class="attention"><!--{$tpl_linemax}--></span> products.
        </div>
        <!--▲件数-->

        <!--▼ページナビ(上部)-->
        <form name="page_navi_top" id="page_navi_top" action="?">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
        </form>
        <!--▲ページナビ(上部)-->
        <!--{/if}-->

        <!--{assign var=id value=$arrProduct.product_id}-->
        <!--{assign var=arrErr value=$arrProduct.arrErr}-->
        <!--▼商品-->
        <form name="product_form<!--{$id|h}-->" action="?" onsubmit="return false;">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <td class="product-item">   <div class="product_item clearfix">
                    <a name="product<!--{$id|h}-->"></a>
                    <div class="listphoto">
                        <!--★画像★-->
                        <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
                            <img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->" alt="<!--{$arrProduct.name|h}-->" class="picture" /></a>
                    </div>

                    <div class="listrightbloc">
                        <!--▼商品ステータス-->

                        <!--▲商品ステータス-->

                        <!--★商品名★-->
                        <h3>
                            <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|h}--></a>
                        </h3>
                        <!--★価格★-->
                        <div class="pricebox sale_price">
                            <!--{$smarty.const.SALE_PRICE_TITLE}--> (tax included):
                    <span class="price">
                        &#036;
                        <span id="price02_default_<!--{$id}-->"><!--{strip}-->
                            <!--{if $arrProduct.price02_min_inctax == $arrProduct.price02_max_inctax}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}-->
                            <!--{else}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}--> - <!--{$arrProduct.price02_max_inctax|number_format}-->
                            <!--{/if}-->
                        </span><span id="price02_dynamic_<!--{$id}-->"></span><!--{/strip}-->
                        </span>
                        </div>

                        <!--★コメント★-->
                        <!--      {*<div class="listcomment"><!--{$arrProduct.main_list_comment|h|nl2br}--></div>*}-->

                        <!--★商品詳細を見る★-->
                        <div class="detail_btn">
                            <!--{assign var=name value="detail`$id`"}-->
                            <a class="bt02" href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">View product details</a>
                        </div>
                        <!--▼買い物かご-->
                        <input type="hidden" name="product_id" value="<!--{$id|h}-->" />
                        <input type="hidden" name="product_class_id" id="product_class_id<!--{$id|h}-->" value="<!--{$tpl_product_class_id[$id]}-->" />
                        <div class="cart_area clearfix">
                            <!--{if $tpl_stock_find[$id]}-->
                            <div class="cartin clearfix">
                                <div class="quantity">
                                    Quantity:<input type="text" name="quantity" class="box" value="<!--{$arrProduct.quantity|default:1|h}-->" maxlength="<!--{$smarty.const.INT_LEN}-->" style="<!--{$arrErr.quantity|sfGetErrorColor}-->" />
                                    <!--{if $arrErr.quantity != ""}-->
                                    <br /><span class="attention"><!--{$arrErr.quantity}--></span>
                                    <!--{/if}-->
                                </div>
                                <div class="cartin_btn">
                                    <!--★カゴに入れる★-->
                                    <div id="cartbtn_default_<!--{$id}-->">
                                        <button class="bt03" id="place-cart" title="Place in Cart"onclick="fnInCart(this.form); return false;"></button>
                                    </div>
                                    <div class="attention" id="cartbtn_dynamic_<!--{$id}-->"></div>
                                </div>
                            </div>
                            <!--{else}-->
                            <div class="cartbtn attention">This product is currently sold out. We apologize for the inconvenience.</div>
                            <!--{/if}-->
                        </div>
                        <!--▲買い物かご-->
                    </div>
                </div>

        </form>

</div>
</td>   <!--▲商品-->



<!--{foreachelse}-->
<!--{include file="frontparts/search_zero.tpl"}-->
<!--{/foreach}-->
</tr>
</table>
<!--{if $smarty.foreach.arrProducts.last}-->
<!--▼ページナビ(下部)-->
<form name="page_navi_bottom" id="page_navi_bottom" action="?">
    <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
    <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
</form>
<!--▲ページナビ(下部)-->
<!--{/if}-->





</div>

<!-- End New Product-->
<!-- Popular Product -->

<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2012 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *}-->

<script type="text/javascript" src="<!--{$smarty.const.ROOT_URLPATH}-->js/products.js"></script>
<script type="text/javascript">//<![CDATA[
    function fnSetClassCategories(form, classcat_id2_selected) {
        var $form = $(form);
        var product_id = $form.find('input[name=product_id]').val();
        var $sele1 = $form.find('select[name=classcategory_id1]');
        var $sele2 = $form.find('select[name=classcategory_id2]');
        setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
    }
    // 並び順を変更
    function fnChangeOrderby(orderby) {
        fnSetVal('orderby', orderby);
        fnSetVal('pageno', 1);
        fnSubmit();
    }
    // 表示件数を変更
    function fnChangeDispNumber(dispNumber) {
        fnSetVal('disp_number', dispNumber);
        fnSetVal('pageno', 1);
        fnSubmit();
    }
    // カゴに入れる
    function fnInCart(productForm) {
        var searchForm = $("#form1");
        var cartForm = $(productForm);
        // 検索条件を引き継ぐ
        var hiddenValues = ['mode','category_id','maker_id','name','orderby','disp_number','pageno','rnd'];
        $.each(hiddenValues, function(){
            // 商品別のフォームに検索条件の値があれば上書き
            if (cartForm.has('input[name='+this+']').length != 0) {
                cartForm.find('input[name='+this+']').val(searchForm.find('input[name='+this+']').val());
            }
            // なければ追加
            else {
                cartForm.append($('<input type="hidden" />').attr("name", this).val(searchForm.find('input[name='+this+']').val()));
            }
        });
        // 商品別のフォームを送信
        cartForm.submit();
    }
    //]]></script>

<div id="undercolumn">
    <form name="form1" id="form1" method="get" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="<!--{$mode|h}-->" />
        <!--{* ▼検索条件 *}-->
        <input type="hidden" name="category_id" value="<!--{$arrSearchData.category_id|h}-->" />
        <input type="hidden" name="maker_id" value="<!--{$arrSearchData.maker_id|h}-->" />
        <input type="hidden" name="name" value="<!--{$arrSearchData.name|h}-->" />
        <!--{* ▲検索条件 *}-->
        <!--{* ▼ページナビ関連 *}-->
        <input type="hidden" name="orderby" value="<!--{$orderby|h}-->" />
        <input type="hidden" name="disp_number" value="<!--{$disp_number|h}-->" />
        <input type="hidden" name="pageno" value="<!--{$tpl_pageno|h}-->" />
        <!--{* ▲ページナビ関連 *}-->
        <input type="hidden" name="rnd" value="<!--{$tpl_rnd|h}-->" />
    </form>

    <!--★タイトル★-->
    <h2 class="title"><!--{$tpl_subtitle|h}--></h2>

    <!--▼検索条件-->
    <!--{if $tpl_subtitle == "Search results"}-->
    <ul class="pagecond_area">
        <li><strong>Product category:</strong><!--{$arrSearch.category|h}--></li>
        <!--{if $arrSearch.maker|strlen >= 1}--><li><strong>Manufacturer:</strong><!--{$arrSearch.maker|h}--></li><!--{/if}-->
        <li><strong>Product name:</strong><!--{$arrSearch.name|h}--></li>
    </ul>
    <!--{/if}-->
    <!--▲検索条件-->

    <!--▼ページナビ(本文)-->
    <!--{capture name=page_navi_body}-->
    <div class="pagenumber_area clearfix">
        <div class="change">
            <!--{if $orderby != 'price'}-->
            <a href="javascript:fnChangeOrderby('price');">By price </a>
            <!--{else}-->
            <strong>By price</strong>
            <!--{/if}-->&nbsp;
            <!--{if $orderby != "date"}-->
            <a href="javascript:fnChangeOrderby('date');">Recent</a>
            <!--{else}-->
            <strong>Recent</strong>
            <!--{/if}-->&nbsp;
            Items displayed
            <select name="disp_number" onchange="javascript:fnChangeDispNumber(this.value);">
                <!--{foreach from=$arrPRODUCTLISTMAX item="dispnum" key="num"}-->
                <!--{if $num == $disp_number}-->
                <option value="<!--{$num}-->" selected="selected" ><!--{$dispnum}--></option>
                <!--{else}-->
                <option value="<!--{$num}-->" ><!--{$dispnum}--></option>
                <!--{/if}-->
                <!--{/foreach}-->
            </select>
        </div>
        <div class="navi"><!--{$tpl_strnavi}--></div>
    </div>
    <!--{/capture}-->
    <!--▲ページナビ(本文)-->
    <div class="block_body clearfix">
        <table class="table-item">
            <tr>
                <!--{foreach from=$arrResults item=arrProduct name=arrProducts}-->

                <!--{if $smarty.foreach.arrProducts.first}-->
                <!--▼件数-->
            <div>
                There are <span class="attention"><!--{$tpl_linemax}--></span> products.
            </div>
            <!--▲件数-->

            <!--▼ページナビ(上部)-->
            <form name="page_navi_top" id="page_navi_top" action="?">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
            </form>
            <!--▲ページナビ(上部)-->
            <!--{/if}-->

            <!--{assign var=id value=$arrProduct.product_id}-->
            <!--{assign var=arrErr value=$arrProduct.arrErr}-->
            <!--▼商品-->
            <form name="product_form<!--{$id|h}-->" action="?" onsubmit="return false;">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <td class="product-item">   <div class="product_item clearfix">
                        <a name="product<!--{$id|h}-->"></a>
                        <div class="listphoto">
                            <!--★画像★-->
                            <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
                                <img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->" alt="<!--{$arrProduct.name|h}-->" class="picture" /></a>
                        </div>

                        <div class="listrightbloc">
                            <!--▼商品ステータス-->

                            <!--▲商品ステータス-->

                            <!--★商品名★-->
                            <h3>
                                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|h}--></a>
                            </h3>
                            <!--★価格★-->
                            <div class="pricebox sale_price">
                                <!--{$smarty.const.SALE_PRICE_TITLE}--> (tax included):
                    <span class="price">
                        &#036;
                        <span id="price02_default_<!--{$id}-->"><!--{strip}-->
                            <!--{if $arrProduct.price02_min_inctax == $arrProduct.price02_max_inctax}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}-->
                            <!--{else}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}--> - <!--{$arrProduct.price02_max_inctax|number_format}-->
                            <!--{/if}-->
                        </span><span id="price02_dynamic_<!--{$id}-->"></span><!--{/strip}-->
                        </span>
                            </div>

                            <!--★コメント★-->
                            <!--      {*<div class="listcomment"><!--{$arrProduct.main_list_comment|h|nl2br}--></div>*}-->

                            <!--★商品詳細を見る★-->
                            <div class="detail_btn">
                                <!--{assign var=name value="detail`$id`"}-->
                                <a class="bt02" href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">View product details</a>
                            </div>
                            <!--▼買い物かご-->
                            <input type="hidden" name="product_id" value="<!--{$id|h}-->" />
                            <input type="hidden" name="product_class_id" id="product_class_id<!--{$id|h}-->" value="<!--{$tpl_product_class_id[$id]}-->" />
                           <!--{*<div class="cart_area clearfix">*}
                                {*<!--{if $tpl_stock_find[$id]}-->*}
                                {*<div class="cartin clearfix">*}
                                    {*<div class="quantity">*}
                                        {*Quantity:<input type="text" name="quantity" class="box" value="<!--{$arrProduct.quantity|default:1|h}-->" maxlength="<!--{$smarty.const.INT_LEN}-->" style="<!--{$arrErr.quantity|sfGetErrorColor}-->" />*}
                                        {*<!--{if $arrErr.quantity != ""}-->*}
                                        {*<br /><span class="attention"><!--{$arrErr.quantity}--></span>*}
                                        {*<!--{/if}-->*}
                                    {*</div>*}
                                    {*<div class="cartin_btn">*}
                                        {*<!--★カゴに入れる★-->*}
                                        {*<div id="cartbtn_default_<!--{$id}-->">*}
                                            {*<button class="bt03" id="place-cart" onclick="fnInCart(this.form); return false;"></button>*}
                                        {*</div>*}
                                        {*<div class="attention" id="cartbtn_dynamic_<!--{$id}-->"></div>*}
                                    {*</div>*}
                                {*</div>*}
                                {*<!--{else}-->*}
                                {*<div class="cartbtn attention">This product is currently sold out. We apologize for the inconvenience.</div>*}
                                {*<!--{/if}-->*}
                            {*</div>*}-->
                            <!--▲買い物かご-->
                        </div>
                    </div>

            </form>

    </div>
    </td>   <!--▲商品-->



    <!--{foreachelse}-->
    <!--{include file="frontparts/search_zero.tpl"}-->
    <!--{/foreach}-->
    </tr>
    </table>
    <!--{if $smarty.foreach.arrProducts.last}-->
    <!--▼ページナビ(下部)-->
    <form name="page_navi_bottom" id="page_navi_bottom" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
    </form>
    <!--▲ページナビ(下部)-->
    <!--{/if}-->





</div>

<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2012 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *}-->

<script type="text/javascript" src="<!--{$smarty.const.ROOT_URLPATH}-->js/products.js"></script>
<script type="text/javascript">//<![CDATA[
    function fnSetClassCategories(form, classcat_id2_selected) {
        var $form = $(form);
        var product_id = $form.find('input[name=product_id]').val();
        var $sele1 = $form.find('select[name=classcategory_id1]');
        var $sele2 = $form.find('select[name=classcategory_id2]');
        setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
    }
    // 並び順を変更
    function fnChangeOrderby(orderby) {
        fnSetVal('orderby', orderby);
        fnSetVal('pageno', 1);
        fnSubmit();
    }
    // 表示件数を変更
    function fnChangeDispNumber(dispNumber) {
        fnSetVal('disp_number', dispNumber);
        fnSetVal('pageno', 1);
        fnSubmit();
    }
    // カゴに入れる
    function fnInCart(productForm) {
        var searchForm = $("#form1");
        var cartForm = $(productForm);
        // 検索条件を引き継ぐ
        var hiddenValues = ['mode','category_id','maker_id','name','orderby','disp_number','pageno','rnd'];
        $.each(hiddenValues, function(){
            // 商品別のフォームに検索条件の値があれば上書き
            if (cartForm.has('input[name='+this+']').length != 0) {
                cartForm.find('input[name='+this+']').val(searchForm.find('input[name='+this+']').val());
            }
            // なければ追加
            else {
                cartForm.append($('<input type="hidden" />').attr("name", this).val(searchForm.find('input[name='+this+']').val()));
            }
        });
        // 商品別のフォームを送信
        cartForm.submit();
    }
    //]]></script>

<div id="undercolumn">
    <form name="form1" id="form1" method="get" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="<!--{$mode|h}-->" />
        <!--{* ▼検索条件 *}-->
        <input type="hidden" name="category_id" value="<!--{$arrSearchData.category_id|h}-->" />
        <input type="hidden" name="maker_id" value="<!--{$arrSearchData.maker_id|h}-->" />
        <input type="hidden" name="name" value="<!--{$arrSearchData.name|h}-->" />
        <!--{* ▲検索条件 *}-->
        <!--{* ▼ページナビ関連 *}-->
        <input type="hidden" name="orderby" value="<!--{$orderby|h}-->" />
        <input type="hidden" name="disp_number" value="<!--{$disp_number|h}-->" />
        <input type="hidden" name="pageno" value="<!--{$tpl_pageno|h}-->" />
        <!--{* ▲ページナビ関連 *}-->
        <input type="hidden" name="rnd" value="<!--{$tpl_rnd|h}-->" />
    </form>

    <!--★タイトル★-->
    <h2 class="title"><!--{$tpl_subtitle|h}--></h2>

    <!--▼検索条件-->
    <!--{if $tpl_subtitle == "Search results"}-->
    <ul class="pagecond_area">
        <li><strong>Product category:</strong><!--{$arrSearch.category|h}--></li>
        <!--{if $arrSearch.maker|strlen >= 1}--><li><strong>Manufacturer:</strong><!--{$arrSearch.maker|h}--></li><!--{/if}-->
        <li><strong>Product name:</strong><!--{$arrSearch.name|h}--></li>
    </ul>
    <!--{/if}-->
    <!--▲検索条件-->

    <!--▼ページナビ(本文)-->
    <!--{capture name=page_navi_body}-->
    <div class="pagenumber_area clearfix">
        <div class="change">
            <!--{if $orderby != 'price'}-->
            <a href="javascript:fnChangeOrderby('price');">By price </a>
            <!--{else}-->
            <strong>By price</strong>
            <!--{/if}-->&nbsp;
            <!--{if $orderby != "date"}-->
            <a href="javascript:fnChangeOrderby('date');">Recent</a>
            <!--{else}-->
            <strong>Recent</strong>
            <!--{/if}-->&nbsp;
            Items displayed
            <select name="disp_number" onchange="javascript:fnChangeDispNumber(this.value);">
                <!--{foreach from=$arrPRODUCTLISTMAX item="dispnum" key="num"}-->
                <!--{if $num == $disp_number}-->
                <option value="<!--{$num}-->" selected="selected" ><!--{$dispnum}--></option>
                <!--{else}-->
                <option value="<!--{$num}-->" ><!--{$dispnum}--></option>
                <!--{/if}-->
                <!--{/foreach}-->
            </select>
        </div>
        <div class="navi"><!--{$tpl_strnavi}--></div>
    </div>
    <!--{/capture}-->
    <!--▲ページナビ(本文)-->
    <div class="block_body clearfix">
        <table class="table-item">
            <tr>
                <!--{foreach from=$arrResults item=arrProduct name=arrProducts}-->

                <!--{if $smarty.foreach.arrProducts.first}-->
                <!--▼件数-->
            <div>
                There are <span class="attention"><!--{$tpl_linemax}--></span> products.
            </div>
            <!--▲件数-->

            <!--▼ページナビ(上部)-->
            <form name="page_navi_top" id="page_navi_top" action="?">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
            </form>
            <!--▲ページナビ(上部)-->
            <!--{/if}-->

            <!--{assign var=id value=$arrProduct.product_id}-->
            <!--{assign var=arrErr value=$arrProduct.arrErr}-->
            <!--▼商品-->
            <form name="product_form<!--{$id|h}-->" action="?" onsubmit="return false;">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <td class="product-item">   <div class="product_item clearfix">
                        <a name="product<!--{$id|h}-->"></a>
                        <div class="listphoto">
                            <!--★画像★-->
                            <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
                                <img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->" alt="<!--{$arrProduct.name|h}-->" class="picture" /></a>
                        </div>

                        <div class="listrightbloc">
                            <!--▼商品ステータス-->

                            <!--▲商品ステータス-->

                            <!--★商品名★-->
                            <h3>
                                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|h}--></a>
                            </h3>
                            <!--★価格★-->
                            <div class="pricebox sale_price">
                                <!--{$smarty.const.SALE_PRICE_TITLE}--> (tax included):
                    <span class="price">
                        &#036;
                        <span id="price02_default_<!--{$id}-->"><!--{strip}-->
                            <!--{if $arrProduct.price02_min_inctax == $arrProduct.price02_max_inctax}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}-->
                            <!--{else}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}--> - <!--{$arrProduct.price02_max_inctax|number_format}-->
                            <!--{/if}-->
                        </span><span id="price02_dynamic_<!--{$id}-->"></span><!--{/strip}-->
                        </span>
                            </div>

                            <!--★コメント★-->
                            <!--      {*<div class="listcomment"><!--{$arrProduct.main_list_comment|h|nl2br}--></div>*}-->

                            <!--★商品詳細を見る★-->
                            <div class="detail_btn">
                                <!--{assign var=name value="detail`$id`"}-->
                                <a class="bt02" href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">View product details</a>
                            </div>
                            <!--▼買い物かご-->
                            <input type="hidden" name="product_id" value="<!--{$id|h}-->" />
                            <input type="hidden" name="product_class_id" id="product_class_id<!--{$id|h}-->" value="<!--{$tpl_product_class_id[$id]}-->" />
                           <!--{*<div class="cart_area clearfix">*}
                                {*<!--{if $tpl_stock_find[$id]}-->*}
                                {*<div class="cartin clearfix">*}
                                    {*<div class="quantity">*}
                                        {*Quantity:<input type="text" name="quantity" class="box" value="<!--{$arrProduct.quantity|default:1|h}-->" maxlength="<!--{$smarty.const.INT_LEN}-->" style="<!--{$arrErr.quantity|sfGetErrorColor}-->" />*}
                                        {*<!--{if $arrErr.quantity != ""}-->*}
                                        {*<br /><span class="attention"><!--{$arrErr.quantity}--></span>*}
                                        {*<!--{/if}-->*}
                                    {*</div>*}
                                    {*<div class="cartin_btn">*}
                                        {*<!--★カゴに入れる★-->*}
                                        {*<div id="cartbtn_default_<!--{$id}-->">*}
                                            {*<button class="bt03" id="place-cart" onclick="fnInCart(this.form); return false;"></button>*}
                                        {*</div>*}
                                        {*<div class="attention" id="cartbtn_dynamic_<!--{$id}-->"></div>*}
                                    {*</div>*}
                                {*</div>*}
                                {*<!--{else}-->*}
                                {*<div class="cartbtn attention">This product is currently sold out. We apologize for the inconvenience.</div>*}
                                {*<!--{/if}-->*}
                            {*</div>*}-->
                            <!--▲買い物かご-->
                        </div>
                    </div>

            </form>

    </div>
    </td>   <!--▲商品-->



    <!--{foreachelse}-->
    <!--{include file="frontparts/search_zero.tpl"}-->
    <!--{/foreach}-->
    </tr>
    </table>
    <!--{if $smarty.foreach.arrProducts.last}-->
    <!--▼ページナビ(下部)-->
    <form name="page_navi_bottom" id="page_navi_bottom" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
    </form>
    <!--▲ページナビ(下部)-->
    <!--{/if}-->





</div>



<!-- End Popular Product-->
<!--{if count($arrBestProducts) > 0}-->
    <div class="block_outer clearfix">
        <div id="recommend_area">
            <h2><img src="<!--{$TPL_URLPATH}-->img/title/icon_bloc_recommend.png" alt="*" class="title_icon" /><span class="title">Recommended products</span></h2>
            <div class="block_body clearfix">
                <!--{foreach from=$arrBestProducts item=arrProduct name="recommend_products"}-->
                    <div class="product_item clearfix">
                        <div class="productImage">
                            <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
                                <img src="<!--{$smarty.const.ROOT_URLPATH}-->resize_image.php?image=<!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->&amp;width=80&amp;height=80" alt="<!--{$arrProduct.name|h}-->" />
                            </a>
                        </div>
                        <div class="productContents">
                            <h3>
                                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|h}--></a>
                            </h3>
                            <p class="sale_price">
                                <!--{$smarty.const.SALE_PRICE_TITLE}-->(tax included): <span class="price">&#36; <!--{$arrProduct.price02_min_inctax|number_format}--></span>
                            </p>
                            <p class="mini comment"><!--{$arrProduct.comment|h|nl2br}--></p>
                        </div>
                    </div>
                    <!--{if $smarty.foreach.recommend_products.iteration % 2 === 0}-->
                        <div class="clear"></div>
                    <!--{/if}-->
                <!--{/foreach}-->
            </div>
        </div>
    </div>
<!--{/if}-->
