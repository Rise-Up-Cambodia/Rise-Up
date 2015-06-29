
<link rel="stylesheet" href="<!--{$TPL_URLPATH}-->css/admin_contents.css" type="text/css"/>

<div id="products" class="contents-main">
<h2><!--{t string="Add Brand" escape="none"}--></h2>
    <form name="form1" id="form1" method="post" action="?" enctype="multipart/form-data">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="edit" />
        <input type="hidden" name="holiday_id" value="<!--{$tpl_holiday_id}-->" />

    <table class="form">
        <tr>
            <th><!--{t string="Name" escape="none"}--></th>
            <td>
                <!--{if $arrErr.name}--><span class="attention"><!--{$arrErr.name}--></span><!--{/if}-->
                <input type="text" name="name" value="<!--{$arrForm.name|h}-->" maxlength="<!--{$smarty.const.SMTEXT_LEN}-->" style="" size="60" class="box60"/>
                <span class="attention"> <!--{t string="tpl_(T_ARG1 characters max)_01" T_ARG1=$smarty.const.SMTEXT_LEN}--></span>
            </td>
        </tr>
        <tr>
            <!--{assign var=key value="image_path"}-->
            <th><!--{t string="Brand logo" escape="none" }--></th>
            <td>

                <input type="file" name="image_path" size="40"  />

            </td>
        </tr>

        <tr>
            <th><!--{t string="Address" escape="none"}--></th>
            <td>
                <!--{if $arrErr.address}--><span class="attention"><!--{$arrErr.address}--></span><!--{/if}-->
                <input type="text" name="address" value="<!--{$arrForm.address|h}-->" maxlength="<!--{$smarty.const.SMTEXT_LEN}-->" style="" size="60" class="box60"/>
                <span class="attention"> <!--{t string="tpl_(T_ARG1 characters max)_01" T_ARG1=$smarty.const.SMTEXT_LEN}--></span>
            </td>
        </tr>
        <tr>
            <th><!--{t string="Email" escape="none"}--></th>
            <td>
                <!--{if $arrErr.email}--><span class="attention"><!--{$arrErr.email}--></span><!--{/if}-->
                <input type="text" name="email" value="<!--{$arrForm.email|h}-->" maxlength="<!--{$smarty.const.SMTEXT_LEN}-->" style="" size="60" class="box60"/>
                <span class="attention"> <!--{t string="tpl_(T_ARG1 characters max)_01" T_ARG1=$smarty.const.SMTEXT_LEN}--></span>
            </td>
        </tr>
        <tr>
            <th><!--{t string="Website" escape="none"}--></th>
            <td>
                <!--{if $arrErr.website}--><span class="attention"><!--{$arrErr.website}--></span><!--{/if}-->
                <input type="text" name="website" value="<!--{$arrForm.website|h}-->" maxlength="<!--{$smarty.const.SMTEXT_LEN}-->" style="" size="60" class="box60"/>
                <span class="attention"> <!--{t string="tpl_(T_ARG1 characters max)_01" T_ARG1=$smarty.const.SMTEXT_LEN}--></span>
            </td>
        </tr>


        <tr>
            <th><!--{t string="Brand Description" escape="none"}--></th>
            <td>
                <!--{if $arrErr.description}--><span class="attention"><!--{$arrErr.description}--></span><!--{/if}-->
                <textarea name="description" maxlength="<!--{$smarty.const.LLTEXT_LEN}-->" style="<!--{if $arrErr.main_comment != ""}-->background-color: <!--{$smarty.const.ERR_COLOR}-->;<!--{/if}-->" cols="60" rows="8" class="area60"><!--{"\n"}--><!--{$arrForm.description|h}--></textarea><br />
                <span class="attention"> <!--{t string="tpl_(T_ARG1 characters max)_01" T_ARG1=$smarty.const.LLTEXT_LEN}--></span>
            </td>
        </tr>


    </table>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action"  name="submit" href="javascript:;" onclick="fnFormModeSubmit('form1', 'edit', '', ''); return false;"><span class="btn-next"><!--{t string="Brand Register"}--></span></a></li>
        </ul>
    </div>
     </form>
<!--{*Display data*}-->

    <div id="undercolumn">

        <div id="undercolumn_aboutus">
            <h2 class="title"></h2>

            <table summary="About this site">

                <tr class="tbl_title">

                    <th>ID </th>
                    <th>Logo </th>
                    <th>Name </th>
                    <th>Address </th>
                    <th>Email </th>
                    <th>Website </th>
                    <th>Description </th>
                    <th>Update </th>
                    <th>Delete </th>

                </tr>
                <!--{foreach from=$arrResults item=arrResult name="recommend_products"}-->
                <tr>
                    <td> <!--{$arrResult.brand_id}--></td>
                    <td> <img src="../../upload/brand/<!--{$arrResult.image_path}-->" class="brand"/></td>
                    <td> <!--{$arrResult.name}--></td>
                    <td> <!--{$arrResult.address}--></td>
                    <td> <!--{$arrResult.email}--></td>
                    <td> <a  href="<!--{$arrResult.website}-->"><!--{$arrResult.website}--></a></td>
                    <td> <!--{$arrResult.description}--></td>
                    <td> <a  href="">Update</a></td>
                    <td> <a  href="">Delete</a></td>
                </tr>
                <!--{/foreach}-->

            </table>

            <div id="maps"></div>
        </div>
    </div>
</form>

</div>