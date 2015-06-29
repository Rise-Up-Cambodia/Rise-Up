<?php /* Smarty version 2.6.26, created on 2015-06-12 07:53:04
         compiled from C:%5Cwamp%5Cwww%5CGift%5Chtml/../data/Smarty/templates/admin/customer/subnavi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\Gift\\html/../data/Smarty/templates/admin/customer/subnavi.tpl', 26, false),array('function', 't', 'C:\\wamp\\www\\Gift\\html/../data/Smarty/templates/admin/customer/subnavi.tpl', 26, false),)), $this); ?>

<ul class="level1">
<li<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?> class="on"<?php endif; ?> id="navi-customer-index"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@ADMIN_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
customer/<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><span><?php echo smarty_function_t(array('string' => 'tpl_Member master_01'), $this);?>
</span></a></li>
<li<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'customer'): ?> class="on"<?php endif; ?> id="navi-customer-customer"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@ADMIN_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
customer/edit.php"><span><?php echo smarty_function_t(array('string' => 'tpl_Member registration_01'), $this);?>
</span></a></li>
</ul>