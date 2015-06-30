<?php /* Smarty version 2.6.26, created on 2015-06-29 09:52:38
         compiled from C:%5Cwamp%5Cwww%5CGitHub%5CRise-Up%5Chtml/../data/Smarty/templates/admin/brand/subnavi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin/brand/subnavi.tpl', 26, false),array('function', 't', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin/brand/subnavi.tpl', 27, false),)), $this); ?>

<ul class="level1">
    <li id="navi-ownersstore-index" class="<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?>on<?php endif; ?>">
        <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@ADMIN_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
brand/brand.php<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><span><?php echo smarty_function_t(array('string' => 'Brands Managements'), $this);?>
</span></a></li>
    </ul>