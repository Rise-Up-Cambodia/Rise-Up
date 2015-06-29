<?php /* Smarty version 2.6.26, created on 2015-06-15 01:23:26
         compiled from basis/mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'basis/mail.tpl', 34, false),array('function', 'html_options', 'basis/mail.tpl', 62, false),array('modifier', 'script_escape', 'basis/mail.tpl', 49, false),array('modifier', 'sfGetErrorColor', 'basis/mail.tpl', 60, false),array('modifier', 'h', 'basis/mail.tpl', 73, false),)), $this); ?>

<script type="text/javascript">
<!--
var flag = 0;

function setFlag(){
    flag = 1;
}
function checkFlagAndSubmit(){
    if ( flag == 1 ){
        if( confirm('<?php echo smarty_function_t(array('string' => "tpl_The contents are revised. _01"), $this);?>
') ){
            fnSetvalAndSubmit( 'form1', 'mode', 'id_set' );
        } else {
            return false;
        }
    } else {
        fnSetvalAndSubmit( 'form1', 'mode', 'id_set' );
    }
}

//-->
</script>


<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="regist" />
<div id="basis" class="contents-main">
    <table>
        <tr>
            <th><?php echo smarty_function_t(array('string' => "tpl_Template<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
            <td>
            <?php $this->assign('key', 'template_id'); ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            <?php endif; ?>
            <select name="template_id" onChange="return checkFlagAndSubmit();" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
            <option value="" selected="selected"><?php echo smarty_function_t(array('string' => 'tpl_Please make a selection_01'), $this);?>
</option>
            <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrMailTEMPLATE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </select>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => "tpl_E-mail title<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
            <td>
            <?php $this->assign('key', 'subject'); ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            <?php endif; ?>
            <input type="text" name="subject" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" onChange="setFlag();" size="30" class="box30" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" />
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Header_01'), $this);?>
</th>
            <td>
            <?php $this->assign('key', 'header'); ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            <?php endif; ?>
            <textarea name="header" cols="75" rows="12" class="area75" onChange="setFlag();" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
            <span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(T_ARG1 characters max)_01",'T_ARG1' => ((is_array($_tmp=@LTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </span>
            <div>
                <a class="btn-normal" href="javascript:;" onclick="fnCharCount('form1','header','cnt_header'); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Text count_01'), $this);?>
</span></a>
                <?php echo smarty_function_t(array('string' => 'tpl_Character count_01'), $this);?>

                <input type="text" name="cnt_header" size="4" class="box4" readonly = true style="text-align:right" />
            </div>
            </td>
        </tr>
        <tr>
            <th colspan="2" align="center"><?php echo smarty_function_t(array('string' => 'tpl_Dynamic data insertion section_01'), $this);?>
</th>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Footer_01'), $this);?>
</th>
            <td>
            <?php $this->assign('key', 'footer'); ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            <?php endif; ?>
            <textarea name="footer" cols="75" rows="12" class="area75" onChange="setFlag();" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
            <span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(T_ARG1 characters max)_01",'T_ARG1' => ((is_array($_tmp=@LTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span>
            <div>
                <a class="btn-normal" href="javascript:;" onclick="fnCharCount('form1','footer','cnt_footer'); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Text count_01'), $this);?>
</span></a>
                <?php echo smarty_function_t(array('string' => 'tpl_Character count_01'), $this);?>

                <input type="text" name="cnt_footer" size="4" class="box4" readonly = true style="text-align:right" />
            </div>
            </td>
        </tr>
    </table>

    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'regist', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Save and continue_01'), $this);?>
</span></a></li>
        </ul>
    </div>
</div>
</form>