<?php /* Smarty version 2.6.26, created on 2015-06-15 01:25:46
         compiled from basis/zip_install.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'basis/zip_install.tpl', 25, false),array('modifier', 'strlen', 'basis/zip_install.tpl', 25, false),array('modifier', 'count', 'basis/zip_install.tpl', 25, false),array('modifier', 'h', 'basis/zip_install.tpl', 32, false),array('modifier', 'default', 'basis/zip_install.tpl', 60, false),array('function', 't', 'basis/zip_install.tpl', 32, false),)), $this); ?>

<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) == 0 || count(((is_array($_tmp=$this->_tpl_vars['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) >= 1): ?>
    <style type="text/css">

    </style>
    <form name="form1" id="form1" method="get" action="?" onsubmit="return false;">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="">
        <p><?php echo smarty_function_t(array('string' => "tpl_Date and time of saved postal code CSV update: T_ARG1_01",'T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_csv_datetime'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>
</p>
        <p><?php echo smarty_function_t(array('string' => "tpl_Postal code There are T_ARG1 lines of data in the CSV._01",'T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_line'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>
</p>
        <p><?php echo smarty_function_t(array('string' => "tpl_Postal code There are T_ARG1 lines of data in the DB._01",'T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_count_mtb_zip'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>
</p>
        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_count_mtb_zip'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 0): ?>
            <p class="attention"><?php echo smarty_function_t(array('string' => "tpl_Please carry out registration._01"), $this);?>
</p>
        <?php elseif (((is_array($_tmp=$this->_tpl_vars['tpl_line'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) <> ((is_array($_tmp=$this->_tpl_vars['tpl_count_mtb_zip'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <p class="attention"><?php echo smarty_function_t(array('string' => "tpl_There is a difference in the number of lines. There may be an abnormality in registration._01"), $this);?>
</p>
        <?php endif; ?>

        <div class="basis-zip-item info">
            <p><?php echo smarty_function_t(array('string' => 'tpl_Under normal conditions_01','escape' => 'none'), $this);?>
</p>
        </div>

        <div class="basis-zip-item">
            <h2><?php echo smarty_function_t(array('string' => 'tpl_Automatic registration_01'), $this);?>
</h2>
            <p>
                <?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_skip_update_csv'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <?php echo smarty_function_t(array('string' => "tpl_[Delete] [Postal code CSV update] and [DB manual registration] below will be carried out in order._01"), $this);?>

                <?php else: ?>
                    <?php echo smarty_function_t(array('string' => "tpl_[Delete] and [DB manual registration] below will be carried out in order. _01"), $this);?>

                <?php endif; ?>
            </p>
            <p><a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('auto', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Automatic registration_01'), $this);?>
</span></a></p>
        </div>

        <div class="basis-zip-item">
            <h2><?php echo smarty_function_t(array('string' => 'tpl_DB manual registration_01'), $this);?>
</h2>
            <p><?php echo smarty_function_t(array('string' => "tpl_Postal codes will be registered starting with the designated line number._01"), $this);?>
</p>
            <p><a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('manual', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Manual registration_01'), $this);?>
</span></a> <?php echo smarty_function_t(array('string' => 'tpl_Start line_01'), $this);?>
: <input type="text" name="startRowNum" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['startRowNum'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['tpl_count_mtb_zip']+1)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['tpl_count_mtb_zip']+1)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="8"><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['startRowNum'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span></p>
        </div>

        <div class="basis-zip-item">
            <h2><?php echo smarty_function_t(array('string' => 'tpl_Postal code CSV update_01'), $this);?>
</h2>
            <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_skip_update_csv'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <?php echo smarty_function_t(array('string' => "tpl_Cannot be used._01"), $this);?>

                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_zip_download_url_empty'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <p class="attention"><?php echo smarty_function_t(array('string' => "tpl_* PHP extension module 'zip' is invalid._01"), $this);?>
</p>
                <?php endif; ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_zip_function_not_exists'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <p class="attention"><?php echo smarty_function_t(array('string' => "tpl_* PHP extension module 'zip' is invalid._01"), $this);?>
</p>
                <?php endif; ?>
            <?php else: ?>
                <p><?php echo smarty_function_t(array('string' => "tpl_A postal code CSV will be obtained from the Japan Post Web site._01"), $this);?>
</p>
                <p><a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('update_csv', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Update_01'), $this);?>
</span></a><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['startRowNum'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span></p>
            <?php endif; ?>
        </div>

        <div class="basis-zip-item end">
            <h2><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</h2>
            <p><?php echo smarty_function_t(array('string' => "tpl_All postal codes will be deleted. _01"), $this);?>
</p>
            <p><a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('delete', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</span></a></p>
        </div>
    </form>
<?php else: ?>
    <iframe src="?mode=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;exec=yes&amp;startRowNum=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['startRowNum'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" name="progress" height="200" width="750" frameborder="0"></iframe>
<?php endif; ?>