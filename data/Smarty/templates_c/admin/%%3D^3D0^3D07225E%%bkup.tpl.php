<?php /* Smarty version 2.6.26, created on 2015-06-16 01:20:10
         compiled from system/bkup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'system/bkup.tpl', 27, false),array('modifier', 'script_escape', 'system/bkup.tpl', 34, false),array('modifier', 'h', 'system/bkup.tpl', 48, false),array('modifier', 'sfCutString', 'system/bkup.tpl', 87, false),)), $this); ?>

<script>
    function fnRestore(list_name) {
        if (window.confirm('<?php echo smarty_function_t(array('string' => "tpl_Do you want to restore?_01"), $this);?>
')) {
            document.body.style.cursor = 'wait';
            fnModeSubmit('restore', 'list_name', list_name);
        }
    }
</script>
<form name="form1" id="form1" method="post" action="" onsubmit="return false;">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="edit" />
<input type="hidden" name="list_name" value="" />
<div id="system" class="contents-main">
    <p class="remark">
        <?php echo smarty_function_t(array('string' => "tpl_The database will be backed up.<br />The template file, etc. has not been backed up._01",'escape' => 'none'), $this);?>

    </p>
    <table class="form">
        <tr>
            <th><?php echo smarty_function_t(array('string' => "tpl_Backup name<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <input type="text" name="bkup_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?> ime-mode: disabled;" /><span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(T_ARG1 characters max)_01",'T_ARG1' => ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Backup memo_01'), $this);?>
</th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <textarea name="bkup_memo" maxlength="<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="5" class="area60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                <span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(T_ARG1 characters max)_01",'T_ARG1' => ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span>
            </td>
        </tr>
    </table>

    <div class="btn"><a class="btn-normal" href="javascript:;" name="cre_bkup" onclick="document.body.style.cursor = 'wait'; form1.mode.value='bkup'; document.form1.submit(); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Create backup data_01'), $this);?>
</span></a></div>


    <h2><?php echo smarty_function_t(array('string' => 'tpl_Backup list_01'), $this);?>
</h2>


    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['list_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['list_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br />
    <?php endif; ?>
        <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrBkupList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
        <table class="list">
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Backup name_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Backup memo_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Creation date_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Restore_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Download_01'), $this);?>
</th>
                <th class="delete"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
            </tr>
            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrBkupList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr>
                    <td ><?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                    <td ><?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                    <td align="center"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfCutString', true, $_tmp, 19, true, false) : SC_Utils_Ex::sfCutString($_tmp, 19, true, false)); ?>
</td>
                    <td align="center"><a href="javascript:;" onclick="fnRestore('<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Restore_01'), $this);?>
</a></td>
                    <td align="center"><a href="javascript:;" onclick="fnModeSubmit('download','list_name','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Download_01'), $this);?>
</a></td>
                    <td align="center">
                        <a href="javascript:;" onclick="fnModeSubmit('delete','list_name','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a>
                    </td>
                </tr>
            <?php endfor; endif; ?>
        </table>
    <?php endif; ?>

    <?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['tpl_restore_msg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) >= 1): ?>
        <h2><?php echo smarty_function_t(array('string' => 'tpl_Execution results_01'), $this);?>
</h2>
        <div class="message">
            <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_restore_err'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == false): ?>
                <div class="btn"><a class="btn-normal" href="javascript:;" name="restore_config" onClick="document.body.style.cursor = 'wait'; form1.mode.value='restore_config'; form1.list_name.value='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_restore_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'; submit(); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Ignore the error and restore_01'), $this);?>
</span></a></div>
            <?php endif; ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_restore_msg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

        </div>
    <?php endif; ?>

</div>
</form>