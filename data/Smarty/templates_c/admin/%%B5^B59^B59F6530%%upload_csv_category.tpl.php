<?php /* Smarty version 2.6.26, created on 2015-06-15 01:37:19
         compiled from products/upload_csv_category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'products/upload_csv_category.tpl', 27, false),array('function', 't', 'products/upload_csv_category.tpl', 36, false),)), $this); ?>

<!--★★メインコンテンツ★★-->
<form name="form1" id="form1" method="post" action="?" enctype="multipart/form-data" onSubmit="winSubmit('','form1', 'upload', 500, 400)">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="csv_upload" />
<div id="products" class="contents-main">
    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_errtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
    <p>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_errtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrCSVErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

        <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'blank'): ?>
        <?php echo smarty_function_t(array('string' => "tpl_[Value:T_ARG1]_01",'T_ARG1' => ((is_array($_tmp=$this->_tpl_vars['arrParam'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        <?php endif; ?>
        <br />
        <?php endforeach; endif; unset($_from); ?>
        </span>
    </p>
    <?php endif; ?>

    <!--▼登録テーブルここから-->
    <table class="form">
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_CSV file_01'), $this);?>
</th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['csv_file'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['csv_file'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
                <input type="file" name="csv_file" size="60" class="box60" /><span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(First line is title)_01"), $this);?>
</span>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Registration information_01'), $this);?>
</th>
            <td>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrTitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['title'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['title']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['title']['iteration']++;
?>
                <?php echo smarty_function_t(array('string' => "tpl_T_ARG1 Item: T_ARG2_01",'T_ARG1' => ((is_array($_tmp=$this->_foreach['title']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'T_ARG2' => ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
<br>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
    </table>
    <!--▲登録テーブルここまで-->
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'csv_upload', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Register with these contents_01'), $this);?>
</span></a></li>
        </ul>
    </div>
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrRowErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
    <table class="form">
        <tr>
            <td>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrRowErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['err']):
?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['err'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
    </table>
    <?php endif; ?>
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrRowResult'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
    <table class="form">
        <tr>
            <td>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrRowResult'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                <span><?php echo ((is_array($_tmp=$this->_tpl_vars['result'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br/></span>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
    </table>
    <?php endif; ?>
</div>
</form>