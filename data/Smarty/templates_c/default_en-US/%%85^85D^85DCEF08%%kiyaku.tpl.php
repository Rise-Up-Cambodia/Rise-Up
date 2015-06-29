<?php /* Smarty version 2.6.26, created on 2015-06-26 03:05:20
         compiled from C:%5Cwamp%5Cwww%5CGift1%5Chtml/../data/Smarty/templates/default_en-US/entry/kiyaku.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\Gift1\\html/../data/Smarty/templates/default_en-US/entry/kiyaku.tpl', 25, false),array('modifier', 'h', 'C:\\wamp\\www\\Gift1\\html/../data/Smarty/templates/default_en-US/entry/kiyaku.tpl', 25, false),)), $this); ?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <p class="message">[Important] Before registering, please read the terms of use below.</p>
        <p>In the agreement, your rights and obligations pertaining to use of this service are stipulated.<br />
           When you click the "Agree, proceed to member registration" button, you are agreeing to all of the conditions of this agreement.
        </p>

        <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <textarea name="textfield" class="kiyaku_text" cols="80" rows="30" readonly="readonly"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_kiyaku_text'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>

        <div class="btn_area">
            <ul>
                <li>
                    <a href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="bt04">Decline</a>
                </li>
                <li>
                    <a href="<?php echo ((is_array($_tmp=@ENTRY_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="bt02">Agree</a>
                </li>
            </ul>
        </div>

        </form>
    </div>
</div>