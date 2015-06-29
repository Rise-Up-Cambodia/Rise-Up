<?php /* Smarty version 2.6.26, created on 2015-06-27 13:16:54
         compiled from C:%5Cwamp%5Cwww%5CRise-Up-Shop%5Chtml/../data/Smarty/templates/default_en-US/mypage/refusal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/mypage/refusal.tpl', 26, false),array('modifier', 'h', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/mypage/refusal.tpl', 26, false),)), $this); ?>

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
        <form name="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="confirm" />
        <div id="complete_area">
            <div class="message">If you decide to cancel your membership, purchase history and delivery information will all be deleted. Do you wish to continue?</div>
            <div class="message_area">
           <!--     <p>退会手続きが完了した時点で、現在保存されている購入履歴や、<br />
                お届け先等の情報はすべてなくなりますのでご注意ください。</p>-->
                <div class="btn_area">
                    <ul>
                        <li><button class="bt02">Cancel membership</button></li>
                    </ul>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>