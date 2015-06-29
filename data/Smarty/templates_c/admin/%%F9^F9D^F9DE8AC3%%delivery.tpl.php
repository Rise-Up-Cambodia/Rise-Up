<?php /* Smarty version 2.6.26, created on 2015-06-15 01:19:09
         compiled from basis/delivery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'basis/delivery.tpl', 26, false),array('modifier', 'h', 'basis/delivery.tpl', 59, false),array('function', 't', 'basis/delivery.tpl', 35, false),)), $this); ?>

<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="edit" />
<input type="hidden" name="deliv_id" value="" />
<div id="basis" class="contents-main">
    <div class="btn">
        <ul>
            <li><a class="btn-action" href="javascript:;" name="subm2" onclick="fnChangeAction('./delivery_input.php'); fnModeSubmit('pre_edit','',''); return false;">
                <span class="btn-next">
                    <?php if (((is_array($_tmp=@INPUT_DELIV_FEE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <?php echo smarty_function_t(array('string' => "tpl_Add delivery method/delivery charge_01"), $this);?>

                    <?php else: ?>
                        <?php echo smarty_function_t(array('string' => 'tpl_Enter delivery method_01'), $this);?>

                    <?php endif; ?>
                </span>
                </a>
            </li>
        </ul>
    </div>
    <table class="list">
        <col width="35%" />
        <col width="30%" />
        <col width="10%" />
        <col width="10%" />
        <col width="15%" />
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Delivery company_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Name_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Move_01'), $this);?>
</th>
        </tr>
        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrDelivList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDelivList'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDelivList'][$this->_sections['cnt']['index']]['service_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td align="center"><a href="?" onclick="fnChangeAction('./delivery_input.php'); fnModeSubmit('pre_edit', 'deliv_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrDelivList'][$this->_sections['cnt']['index']]['deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">
                    <?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a></td>
                <td align="center"><a href="?" onclick="fnModeSubmit('delete', 'deliv_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrDelivList'][$this->_sections['cnt']['index']]['deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">
                    <?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a></td>
                <td align="center">
                <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?>
                <a href="?" onclick="fnModeSubmit('up','deliv_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['arrDelivList'][$this->_sections['cnt']['index']]['deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_To top_01'), $this);?>
</a>
                <?php endif; ?>
                <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_sections['cnt']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <a href="?" onclick="fnModeSubmit('down','deliv_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['arrDelivList'][$this->_sections['cnt']['index']]['deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_To bottom_01'), $this);?>
</a>
                <?php endif; ?>
                </td>
            </tr>
        <?php endfor; endif; ?>
    </table>
</div>
</form>