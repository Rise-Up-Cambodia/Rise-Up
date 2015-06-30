<?php /* Smarty version 2.6.26, created on 2015-06-29 09:51:44
         compiled from C:%5Cwamp%5Cwww%5CGitHub%5CRise-Up%5Chtml/../data/Smarty/templates/default_en-US/mypage/delivery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/default_en-US/mypage/delivery.tpl', 26, false),array('modifier', 'h', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/default_en-US/mypage/delivery.tpl', 26, false),)), $this); ?>

<div id="mypagecolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_navi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="mycontents_area">
        <h3><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h3>
        <p class="inforamtion">You can add multiple addresses here.<br />
        * Up to <span class="attention"><?php echo ((is_array($_tmp=((is_array($_tmp=@DELIV_ADDR_MAX)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 items</span>  can be registered.</p>

        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) < ((is_array($_tmp=@DELIV_ADDR_MAX)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <p class="add_address">
                    <a class="bt01" href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage/delivery_addr.php" onclick="win03('./delivery_addr.php','delivadd','600','640'); return false;" target="_blank">Add new delivery destination</a>
                </p>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
        <form name="form1" method="post" action="?" >
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="" />
            <input type="hidden" name="other_deliv_id" value="" />
            <input type="hidden" name="pageno" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_pageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />

            <table summary="Delivery destination">
            <col width="5%" />
            <col width="25%" />
            <col width="50%" />
            <col width="10%" />
            <col width="10%" />
                <tr>
                    <th colspan="5">Delivery destination</th>
                </tr>
                <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td class="alignC"><?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                        <td><label for="add<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">Delivery address</label></td>
                        <td>
                                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'][$this->_sections['cnt']['index']]['zipcode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'][$this->_sections['cnt']['index']]['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'][$this->_sections['cnt']['index']]['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br />
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'][$this->_sections['cnt']['index']]['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'][$this->_sections['cnt']['index']]['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                        </td>
                        <td class="alignC">
                            <a href="./delivery_addr.php" onclick="win02('./delivery_addr.php?other_deliv_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'][$this->_sections['cnt']['index']]['other_deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','deliv_disp','600','640'); return false;">Change</a>
                        </td>
                        <td class="alignC">
                            <a href="#" onclick="fnModeSubmit('delete','other_deliv_id','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrOtherDeliv'][$this->_sections['cnt']['index']]['other_deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">Delete</a>
                        </td>
                    </tr>
                <?php endfor; endif; ?>
            </table>
        </form>
        <?php else: ?>
        <p class="delivempty"><strong>There are no new delivery destinations.</strong></p>
        <?php endif; ?>
    </div>
</div>