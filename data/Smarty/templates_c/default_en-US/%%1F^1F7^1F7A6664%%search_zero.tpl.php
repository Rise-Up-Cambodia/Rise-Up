<?php /* Smarty version 2.6.26, created on 2015-06-16 08:10:20
         compiled from frontparts/search_zero.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'frontparts/search_zero.tpl', 28, false),)), $this); ?>

    <div id="undercolumn_error">
        <div class="message_area">
            <!--★エラーメッセージ-->
            <p class="error">
            <?php if (((is_array($_tmp=$_GET['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search'): ?>
                The number of related items is <strong>0</strong>.<br />
                Please search again using a different search keyword.
            <?php else: ?>
                There are currently no products.
            <?php endif; ?>
            </p>
        </div>
    </div>