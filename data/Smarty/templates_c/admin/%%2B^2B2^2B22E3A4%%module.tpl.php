<?php /* Smarty version 2.6.26, created on 2015-06-12 08:05:45
         compiled from ownersstore/module.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'ownersstore/module.tpl', 35, false),array('function', 't', 'ownersstore/module.tpl', 49, false),)), $this); ?>


<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/ownersstore.js.php"></script>
<?php if (((is_array($_tmp=@OSTORE_SSLURL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />


<div id="ownersstore" class="contents-main">

    <!--購入商品一覧ここから-->
    <div id="ownersstore_products_list"></div>
    <!--購入商品一覧ここまで-->

    <div class="btn">
        <a class="btn-normal" href="javascript:;" onclick="OwnersStore.products_list();return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Retrieve the module list_01'), $this);?>
</span></a>
    </div>

    <div id="ownersstore_index">
        <iframe src="<?php echo ((is_array($_tmp=@OSTORE_SSLURL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
store_info/" style="width:950px;height:600px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
    </div>
</div>

</form>
<?php endif; ?>