<?php /* Smarty version 2.6.26, created on 2015-06-15 01:43:32
         compiled from order/status.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'order/status.tpl', 26, false),array('modifier', 'sfGetErrorColor', 'order/status.tpl', 50, false),array('modifier', 'sfDispDBDate', 'order/status.tpl', 94, false),array('modifier', 'h', 'order/status.tpl', 95, false),array('modifier', 'number_format', 'order/status.tpl', 98, false),array('function', 't', 'order/status.tpl', 32, false),)), $this); ?>

<form name="form1" id="form1" method="POST" action="?" >
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="" />
<input type="hidden" name="status" value="<?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ""): ?>1<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>" />
<input type="hidden" name="search_pageno" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_pageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" >
<input type="hidden" name="order_id" value="" />
<div id="order" class="contents-main">
    <h2><?php echo smarty_function_t(array('string' => 'tpl_Extraction conditions_01'), $this);?>
</h2>
        <div class="btn">
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrORDERSTATUS'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
            <a
                class="btn-normal"
                style="padding-right: 1em;"
                <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['SelectedStatus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    href="javascript:;"
                    onclick="document.form1.search_pageno.value='1'; fnModeSubmit('search','status','<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
' ); return false;"
                <?php endif; ?>
            ><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a>
        <?php endforeach; endif; unset($_from); ?>
        </div>
    <h2><?php echo smarty_function_t(array('string' => 'tpl_Response status change_01'), $this);?>
</h2>
        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
        <div class="btn">
            <select name="change_status">
                <option value="" selected="selected" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['Errormes'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" ><?php echo smarty_function_t(array('string' => 'tpl_Please make a selection_01'), $this);?>
</option>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrORDERSTATUS'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['SelectedStatus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</option>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <option value="delete"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</option>
            </select>
            <a class="btn-normal" href="javascript:;" onclick="fnSelectCheckSubmit(); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Move_01'), $this);?>
</span></a>
        </div>
        <span class="attention"><?php echo smarty_function_t(array('string' => "tpl_* When T_ARG1 or when changing to delete, restore the inventory count manually._01",'T_ARG1' => ((is_array($_tmp=$this->_tpl_vars['arrORDERSTATUS'][@ORDER_CANCEL])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span><br />

        <p class="remark">
            <?php echo smarty_function_t(array('string' => "tpl_T_ARG1 items were found._01",'T_ARG1' => ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_strnavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

        </p>

        <table class="list center">
            <col width="5%" />
            <col width="7%" />
            <col width="9%" />
            <col width="15%" />
            <col width="20%" />
            <col width="10%" />
            <col width="10%" />
            <col width="12%" />
            <col width="12%" />
            <tr>
                <th><label for="move_check"><?php echo smarty_function_t(array('string' => 'tpl_Selection_01'), $this);?>
</label> <input type="checkbox" name="move_check" id="move_check" onclick="fnAllCheck(this, 'input[name=move[]]')" /></th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Response status_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Order number_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Date of order receipt_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Name_02'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Payment method_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => "tpl_Purchase amount(&#36;)_01",'escape' => 'none'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Date of deposit_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Shipment date_01'), $this);?>
</th>
            </tr>
            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrStatus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php $this->assign('status', ($this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['status'])); ?>
            <tr style="background:<?php echo ((is_array($_tmp=$this->_tpl_vars['arrORDERSTATUS_COLOR'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;">
                <td><input type="checkbox" name="move[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['order_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" ></td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrORDERSTATUS'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                <td><a href="#" onclick="fnOpenWindow('./disp.php?order_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['order_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','order_disp','800','900'); return false;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['order_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a></td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp, false) : SC_Utils_Ex::sfDispDBDate($_tmp, false)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['order_name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['order_name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <?php $this->assign('payment_id', ($this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['payment_id'])); ?>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['payment_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td class="right"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['total'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
                <td><?php if (((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['payment_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['payment_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp, false) : SC_Utils_Ex::sfDispDBDate($_tmp, false)); ?>
<?php else: ?><?php echo smarty_function_t(array('string' => 'tpl_Not deposited_01'), $this);?>
<?php endif; ?></td>
                <td><?php if (((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 5): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrStatus'][$this->_sections['cnt']['index']]['commit_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp, false) : SC_Utils_Ex::sfDispDBDate($_tmp, false)); ?>
<?php else: ?><?php echo smarty_function_t(array('string' => 'tpl_Not shipped_01'), $this);?>
<?php endif; ?></td>
            </tr>
            <?php endfor; endif; ?>
        </table>

        <p><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_strnavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</p>

    <?php elseif (((is_array($_tmp=$this->_tpl_vars['arrStatus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "" & ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 0): ?>
        <div class="message">
            <?php echo smarty_function_t(array('string' => "tpl_No applicable data exists._01"), $this);?>

        </div>
    <?php endif; ?>

    </div>
</form>


<script type="text/javascript">
<!--
function fnSelectCheckSubmit(){
    var selectflag = 0;
    var fm = document.form1;

    if (fm.change_status.options[document.form1.change_status.selectedIndex].value == "") {
        selectflag = 1;
    }

    if (selectflag == 1) {
        alert('<?php echo smarty_function_t(array('string' => 'tpl_A selection box has not been selected_01'), $this);?>
');
        return false;
    }
    var i;
    var checkflag = 0;
    var max = fm["move[]"].length;

    if (max) {
        for (i=0;i<max;i++){
            if(fm["move[]"][i].checked == true) {
                checkflag = 1;
            }
        }
    } else {
        if (fm["move[]"].checked == true) {
            checkflag = 1;
        }
    }

    if (checkflag == 0){
        alert('<?php echo smarty_function_t(array('string' => 'tpl_A checkbox has not been selected_01'), $this);?>
');
        return false;
    }

    if (selectflag == 0 && checkflag == 1) {
        document.form1.mode.value = 'update';
        document.form1.submit();
    }
}
//-->
</script>