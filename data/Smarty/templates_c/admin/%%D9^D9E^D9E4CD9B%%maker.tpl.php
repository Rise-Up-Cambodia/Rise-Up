<?php /* Smarty version 2.6.26, created on 2015-06-15 01:36:12
         compiled from products/maker.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'products/maker.tpl', 26, false),array('modifier', 'h', 'products/maker.tpl', 37, false),array('function', 't', 'products/maker.tpl', 33, false),)), $this); ?>

<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="edit" />
    <input type="hidden" name="maker_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <div id="products" class="contents-main">

        <table class="form">
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_Manufacturer name<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
                <td>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br /><?php endif; ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
                    <input type="text" name="name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@SMTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="" size="60" class="box60"/>
                    <span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(T_ARG1 characters max)_01",'T_ARG1' => ((is_array($_tmp=@SMTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span>
                </td>
            </tr>
        </table>

        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'edit', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Save and continue_01'), $this);?>
</span></a></li>
            </ul>
        </div>
        <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrMaker'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
        <table class="list">
            <col width="10%" />
            <col width="50%" />
            <col width="10%" />
            <col width="10%" />
            <col width="20%" />
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_ID_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Manufacturer_01'), $this);?>
</th>
                <th class="edit"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</th>
                <th class="delete"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Move_01'), $this);?>
</th>
            </tr>
            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrMaker'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <tr style="background:<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>#ffffff<?php else: ?><?php echo ((is_array($_tmp=@SELECT_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>;">
                <?php $this->assign('maker_id', ((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td class="center">
                    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a href="?" onclick="fnModeSubmit('pre_edit', 'maker_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a>
                    <?php else: ?>
                    <?php echo smarty_function_t(array('string' => 'tpl_being edited_01'), $this);?>

                    <?php endif; ?>
                </td>
                <td class="center">
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrClassCatCount'][$this->_tpl_vars['class_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
                    -
                    <?php else: ?>
                    <a href="?" onclick="fnModeSubmit('delete', 'maker_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a>
                    <?php endif; ?>
                </td>
                <td class="center">
                    <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?>
                    <a href="?" onclick="fnModeSubmit('up', 'maker_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" /><?php echo smarty_function_t(array('string' => 'tpl_To top_01'), $this);?>
</a>
                    <?php endif; ?>
                    <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_sections['cnt']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a href="?" onclick="fnModeSubmit('down', 'maker_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrMaker'][$this->_sections['cnt']['index']]['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" /><?php echo smarty_function_t(array('string' => 'tpl_To bottom_01'), $this);?>
</a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endfor; endif; ?>
        </table>
        <?php endif; ?>
    </div>
</form>