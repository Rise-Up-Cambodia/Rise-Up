<?php /* Smarty version 2.6.26, created on 2015-06-24 08:42:38
         compiled from mail_templates/customer_regist_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/customer_regist_mail.tpl', 27, false),)), $this); ?>
 * This e-mail has been automatically sent. 
 It can be viewed optimally using monospaced font.

===========================================================
 This is an automatic message sent from
 <?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 to the end-user.
 If you think this was by mistake, please contact
 <?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

===========================================================

Dear <?php echo ((is_array($_tmp=$this->_tpl_vars['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
,

This is <?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
.

Thank you for your interest in registering as a member. 

Your member registration is complete.
Please enjoy shopping on our site.

We look forward to doing business with you in the future.


