<?php /* Smarty version 2.6.26, created on 2015-06-17 04:45:01
         compiled from ownersstore/admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'ownersstore/admin.tpl', 26, false),array('modifier', 'sfGetErrorColor', 'ownersstore/admin.tpl', 39, false),array('modifier', 'h', 'ownersstore/admin.tpl', 39, false),array('function', 't', 'ownersstore/admin.tpl', 32, false),)), $this); ?>

<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="register" />

    <div id="ownersstore" class="contents-main">

        <!--入力項目ここから-->
        <p class="remark"><?php echo smarty_function_t(array('string' => "tpl_<span class='attention'>* The authentication key can be obtained from <a href='T_ARG1' target='_blank'>the EC-CUBE Owners Store</a>.</span>_01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=@OSTORE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</p>
        <table class="form">
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_Authentication key settings._01"), $this);?>
</th>
                <td>
                    <?php $this->assign('key', 'note'); ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
                    <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" maxlength="<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                </td>
            </tr>
        </table>
        <!--入力項目ここまで-->

        <!--登録ボタンここから-->
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'register', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Save and continue_01'), $this);?>
</span></a></li>
            </ul>
        </div>
        <!--登録ボタンここまで-->

    </div>
    <div id="undercolumn">

        <div id="undercolumn_aboutus">
            <h2 class="title"></h2>

            <table summary="About this site">

                <tr>

                    <td>ID </td>
                    <td>Logo</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Website</td>

                </tr>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrResults'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommend_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrResult']):
        $this->_foreach['recommend_products']['iteration']++;
?>
                <tr>
                    <td> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['brand_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</b></td>
                    <td> <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/picture/<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['image_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="picture"/></td>
                    <td> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</b></td>
                    <td> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['description'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</b></td>
                    <td> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</b></td>
                    <td> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['address'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</b></td>
                    <td> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['website'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</b></td>

                </tr>
                <?php endforeach; endif; unset($_from); ?>

            </table>

            <div id="maps"></div>
        </div>
    </div>
</form>
