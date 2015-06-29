<?php /* Smarty version 2.6.26, created on 2015-06-12 09:18:42
         compiled from products/product_class.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'products/product_class.tpl', 35, false),array('modifier', 'h', 'products/product_class.tpl', 111, false),array('modifier', 'default_t', 'products/product_class.tpl', 197, false),array('modifier', 'sfGetErrorColor', 'products/product_class.tpl', 299, false),array('function', 't', 'products/product_class.tpl', 105, false),array('function', 'html_options', 'products/product_class.tpl', 139, false),array('function', 'sfSetErrorStyle', 'products/product_class.tpl', 245, false),)), $this); ?>

<script type="text/javascript">//<![CDATA[
    $(function() {
        // 無制限チェックボックスの初期化
        $('input[id^=chk_stock_unlimited_]').each(function() {
            var index = $(this).attr('id').replace(/^chk_stock_unlimited_/ig, '');
            var checked = $(this).attr('checked');

            if (checked) {
                $('#stock_' + index)
                    .attr('readonly', true)
                    .css('background-color', '<?php echo ((is_array($_tmp=@DISABLED_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');
            }
        });

        // 無制限チェックボックス
        $('input[id^=chk_stock_unlimited_]').change(function() {
            var index = $(this).attr('id').replace(/^chk_stock_unlimited_/ig, '');
            var checked = $(this).attr('checked');

            if (checked) {
                $('#stock_' + index)
                    .attr('readonly', true)
                    .css('background-color', '<?php echo ((is_array($_tmp=@DISABLED_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');
            } else {
                $('#stock_' + index)
                    .attr('readonly', false)
                    .css('background-color', '');
            }
        });

        // 1行目をコピーボタン
        $('#copy_from_first').click(function() {
            var check = $('#check_0').attr('checked');
            $('input[id^=check_]').attr('checked', check);

            var product_code = $('#product_code_0').val();
            $('input[id^=product_code_]').val(product_code);

            var stock = $('#stock_0').val();
            $('input[id^=stock_]').val(stock);

            var stock_unlimited = $('#chk_stock_unlimited_0').attr('checked');
            $('input[id^=chk_stock_unlimited_]').each(function() {
                var checked = stock_unlimited;
                var index = $(this).attr('id').replace(/^chk_stock_unlimited_/ig, '');
                $(this).attr('checked', checked);
                if (checked) {
                    $('#stock_' + index)
                        .attr('readonly', true)
                        .css('background-color', '<?php echo ((is_array($_tmp=@DISABLED_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');
                } else {
                    $('#stock_' + index)
                        .attr('readonly', false)
                        .css('background-color', '');
                }
            });

            var price01 = $('#price01_0').val();
            $('input[id^=price01_]').val(price01);

            var price02 = $('#price02_0').val();
            $('input[id^=price02_]').val(price02);

            var product_type_id_value = '';
            $('input[id^=product_type_id_0_]').each(function() {
                if ($(this).attr('checked')) {
                    product_type_id_value = $(this).val();
                }
            });
            $('input[id^=product_type_id_]').each(function() {
                if ($(this).val() == product_type_id_value) {
                    $(this).attr('checked', true);
                }
            });

            var down_filename = $('#down_filename_0').val();
            $('input[id^=down_filename_]').val(down_filename);
        });
    });
//]]></script>
<h2><?php echo smarty_function_t(array('string' => 'tpl_Product specification registration_01'), $this);?>
</h2>
<form name="form1" id="form1" method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrSearchHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_item']):
?>
        <input type="hidden" name="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
[]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['c_item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php endforeach; endif; unset($_from); ?>
    <?php else: ?>
        <input type="hidden" name="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<input type="hidden" name="mode" value="edit" />
<input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['product_id']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<input type="hidden" name="upload_index" value="">
<input type="hidden" name="total" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['total']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />

<div id="products" class="contents-main">

    <table>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Product name_01'), $this);?>
</th>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['product_name']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Standard 1_01'), $this);?>
<span class="attention">*</span></th>
            <td>
                <?php $this->assign('key', 'class_id1'); ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>

                <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                    <option value=""><?php echo smarty_function_t(array('string' => 'tpl_Please make a selection_01'), $this);?>
</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrClass'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Standard 2_01'), $this);?>
</th>
            <td>
                <?php $this->assign('key', 'class_id2'); ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                    <option value=""><?php echo smarty_function_t(array('string' => 'tpl_Please make a selection_01'), $this);?>
</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrClass'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>
            </td>
        </tr>
    </table>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnChangeAction('<?php echo ((is_array($_tmp=@ADMIN_PRODUCTS_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('search','',''); return false;" ><span class="btn-prev"><?php echo smarty_function_t(array('string' => 'tpl_Return_01'), $this);?>
</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="fnModeSubmit('disp','',''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Display_02'), $this);?>
</span></a></li>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['total']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
            <li><a class="btn-action" href="javascript:;" onclick="fnModeSubmit('delete','',''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Delete_01'), $this);?>
</span></a></li>
        <?php endif; ?>
        </ul>
    </div>

    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['total']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>

    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrClassCat'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['i']['iteration']++;
?>
        <?php if (((is_array($_tmp=($this->_foreach['i']['iteration'] <= 1))) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <?php $this->assign('cnt', ((is_array($_tmp=$this->_foreach['i']['total'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>

    <div class="list-info clearfix">
        <div class="btn"><a class="btn-normal" href="javascript:;" id="copy_from_first"><span><?php echo smarty_function_t(array('string' => 'tpl_Copy the data on the 1st line_01'), $this);?>
</span></a></div>
        <p><?php echo smarty_function_t(array('string' => "tpl_<span class='bold'>Extension that can be uploaded:</span>T_ARG1(Parameter DOWNLOAD_EXTENSION)_01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=@DOWNLOAD_EXTENSION)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</p>
    </div>

    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['check_empty'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['check_empty'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
    <?php endif; ?>

    <table class="list">
        <col width="5%" />
        <col width="15%" />
        <col width="15%" />
        <col width="9%" />
        <col width="10%" />
        <col width="10%" />
        <col width="10%" />
        <col width="10%" />
        <col width="8%" />
        <col width="8%" />
        <tr>
            <th><input type="checkbox" onclick="fnAllCheck(this, 'input[name^=check]')" id="allCheck" /> <label for="allCheck"><br><?php echo smarty_function_t(array('string' => 'tpl_Register_02'), $this);?>
</label></th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Standard 1_01'), $this);?>
<br>(<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrClass'][$this->_tpl_vars['class_id1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default_t', true, $_tmp, 'tpl_Not selected_01') : smarty_modifier_default_t($_tmp, 'tpl_Not selected_01')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
)</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Standard 2_01'), $this);?>
<br>(<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrClass'][$this->_tpl_vars['class_id2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default_t', true, $_tmp, 'tpl_Not selected_01') : smarty_modifier_default_t($_tmp, 'tpl_Not selected_01')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
)</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Product code_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => "tpl_Inventory count<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => "tpl_T_ARG1(&#36;)_01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=@NORMAL_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => "tpl_T_ARG1(&#36;)_01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=@SALE_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
<span class="attention">*</span></th>
            <th><?php echo smarty_function_t(array('string' => "tpl_Product type<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Downloaded file name_01','escape' => 'none'), $this);?>
<span class="red"><br><?php echo smarty_function_t(array('string' => 'tpl_Max T_ARG1 characters_01','T_ARG1' => ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span></th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_File for downloaded product_01','escape' => 'none'), $this);?>
</th>
        </tr>
        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrForm']['total']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
            <?php $this->assign('index', ((is_array($_tmp=$this->_sections['cnt']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>

            <tr>
                <td class="center">
                    <?php $this->assign('key', 'classcategory_id1'); ?>
                    <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                    <?php $this->assign('key', 'classcategory_id2'); ?>
                    <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                    <?php $this->assign('key', 'product_class_id'); ?>
                    <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                    <?php $this->assign('key', 'check'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                </td>
                <td class="center">
                    <?php $this->assign('key', 'classcategory_name1'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                    <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                </td>
                <td class="center">
                    <?php $this->assign('key', 'classcategory_name2'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                    <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                </td>
                <td class="center">
                    <?php $this->assign('key', 'product_code'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                </td>
                <td class="center">
                    <?php $this->assign('key', 'stock'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                    <?php $this->assign('key', 'stock_unlimited'); ?><br />
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>checked="checked"<?php endif; ?> id="chk_<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" /><label for="chk_<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><?php echo smarty_function_t(array('string' => 'tpl_No limit_01'), $this);?>
</label>
                </td>
                <td class="center">
                    <?php $this->assign('key', 'price01'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                </td>
                <td class="center">
                    <?php $this->assign('key', 'price02'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                </td>
                <td class="class-product-type">
                    <?php $this->assign('key', 'product_type_id'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProductType'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productType'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productType']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['productTypeKey'] => $this->_tpl_vars['productType']):
        $this->_foreach['productType']['iteration']++;
?>
                        <input type="radio" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['productTypeKey'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['productTypeKey'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=($this->_foreach['productType']['iteration']-1))) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=($this->_foreach['productType']['iteration']-1))) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> ><?php echo ((is_array($_tmp=$this->_tpl_vars['productType'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</label><?php if (! ((is_array($_tmp=($this->_foreach['productType']['iteration'] == $this->_foreach['productType']['total']))) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br /><?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <td class="center">
                    <?php $this->assign('key', 'down_filename'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>" size="10" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                </td>
                <td>
                    <?php $this->assign('key', 'down_realfilename'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php endif; ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br />
                        <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                        <a href="?" onclick="fnFormModeSubmit('form1', 'file_delete', 'upload_index', '<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => "tpl_[Erase file]_01"), $this);?>
</a>
                    <?php else: ?>
                    <input type="file" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" size="10" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" /><br />
                    <a class="btn-normal" href="javascript:;" name="btn" onclick="fnFormModeSubmit('form1', 'file_upload', 'upload_index', '<?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Upload_01'), $this);?>
</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endfor; endif; ?>
    </table>

    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'edit', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Confirmation page_01'), $this);?>
</span></a></li>
        </ul>
    </div>

    <?php endif; ?>

</div>
</form>