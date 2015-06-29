<?php /* Smarty version 2.6.26, created on 2015-06-24 08:40:27
         compiled from C:%5Cwamp%5Cwww%5CGitHub%5CRise-Up-Shop%5Chtml/../data/Smarty/templates/default_en-US/entry/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\GitHub\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/entry/index.tpl', 25, false),array('modifier', 'h', 'C:\\wamp\\www\\GitHub\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/entry/index.tpl', 25, false),)), $this); ?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <?php if (((is_array($_tmp=@CUSTOMER_CONFIRM_MAIL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <p>Upon registering, you will first become a temporary member.<br />
               You will be contacted at the e-mail address that you entered. Complete member registration and then enjoy shopping.</p>
        <?php endif; ?>
        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="confirm" />

            <table summary="Member registration form">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."frontparts/form_personal_input.tpl", 'smarty_include_vars' => array('flgFields' => 3,'emailMobile' => false,'prefix' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </table>

            <div class="btn_area">
                <ul>
                    <li>
                        <button class="bt02">Confirm</button>
                    </li>
                </ul>
            </div>

        </form>
    </div>
</div>