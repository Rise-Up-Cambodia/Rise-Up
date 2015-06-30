<?php /* Smarty version 2.6.26, created on 2015-06-30 01:25:41
         compiled from C:%5Cwamp%5Cwww%5CGitHub%5CRise-Up%5Chtml/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl', 2, false),array('function', 'sfSetErrorStyle', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl', 6, false),array('function', 'html_checkboxes', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl', 21, false),array('function', 'html_options', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl', 29, false),array('modifier', 'script_escape', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl', 5, false),array('modifier', 'h', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl', 6, false),array('modifier', 'sfGetErrorColor', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/admin//adminparts/form_customer_search.tpl', 27, false),)), $this); ?>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Member ID_01'), $this);?>
</th>
    <td colspan="3">
    <?php $this->assign('key', 'search_customer_id'); ?>
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br /><?php endif; ?>
    <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /></td>

</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Name_02'), $this);?>
</th>
    <td colspan="3">
            <?php $this->assign('key', 'search_name'); ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br /><?php endif; ?>
            <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Gender_01'), $this);?>
</th>
    <td>
        <?php $this->assign('key', 'search_sex'); ?>
        <?php echo smarty_function_html_checkboxes(array('name' => ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'options' => ((is_array($_tmp=$this->_tpl_vars['arrSex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => "&nbsp;",'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

    </td>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Birth month_01'), $this);?>
</th>
    <td>
        <?php $this->assign('key', 'search_birth_month'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br /><?php endif; ?>
        <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" >
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrMonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        </select><?php echo smarty_function_t(array('string' => 'c_Month_01'), $this);?>

    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Birthday_01'), $this);?>
</th>
    <td colspan="3">
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_b_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_b_end_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_b_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_b_endy_ear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <?php endif; ?>
        <input id="datepickercustomersearch_b_start"
               type="text"
               value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_b_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
        <input type="hidden" name="search_b_start_year" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_b_start_month" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_b_start_day" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php echo smarty_function_t(array('string' => "-"), $this);?>

        <input id="datepickercustomersearch_b_end"
               type="text"
               value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_b_end_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
        <input type="hidden" name="search_b_end_year" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_b_end_month" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_b_end_day" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => "tpl_E-mail address_01"), $this);?>
</th>
    <td colspan="3">
    <?php $this->assign('key', 'search_email'); ?>
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
    <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?>/>
    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => "tpl_Mobile e-mail address_01"), $this);?>
</th>
    <td colspan="3">
        <?php $this->assign('key', 'search_email_mobile'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?>/></td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Telephone number_01'), $this);?>
</th>
    <td colspan="3">
        <?php $this->assign('key', 'search_tel'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br /><?php endif; ?>
        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" /></td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Occupation_02'), $this);?>
</th>
    <td colspan="3">
        <?php $this->assign('key', 'search_job'); ?>
        <?php echo smarty_function_html_checkboxes(array('name' => ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'options' => ((is_array($_tmp=$this->_tpl_vars['arrJob'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => "&nbsp;",'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Purchase amount_01'), $this);?>
</th>
    <td>
        <?php $this->assign('key1', 'search_buy_total_from'); ?>
        <?php $this->assign('key2', 'search_buy_total_to'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br />
        <?php endif; ?>
        <?php echo smarty_function_t(array('string' => 'currency_prefix'), $this);?>

        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key1']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> 
        <?php echo smarty_function_t(array('string' => 'currency_suffix'), $this);?>

        <?php echo smarty_function_t(array('string' => "-"), $this);?>

        <?php echo smarty_function_t(array('string' => 'currency_prefix'), $this);?>

        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key2']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> 
        <?php echo smarty_function_t(array('string' => 'currency_suffix'), $this);?>

    </td>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Purchase frequency_01'), $this);?>
</th>
    <td>
        <?php $this->assign('key1', 'search_buy_times_from'); ?>
        <?php $this->assign('key2', 'search_buy_times_to'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['buy_times_from'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['buy_times_to'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['buy_times_from'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['buy_times_to'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br />
        <?php endif; ?>
        <?php echo smarty_function_t(array('string' => 'times_prefix'), $this);?>

        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key1']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> 
        <?php echo smarty_function_t(array('string' => 'times_suffix'), $this);?>
 
        <?php echo smarty_function_t(array('string' => "-"), $this);?>

        <?php echo smarty_function_t(array('string' => 'times_prefix'), $this);?>

        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key2']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> 
        <?php echo smarty_function_t(array('string' => 'times_suffix'), $this);?>

    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => "tpl_Registration/update date_01"), $this);?>
</th>
    <td colspan="3">
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_end_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endy_ear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <?php endif; ?>
        <input id="datepickercustomersearch_start"
               type="text"
               value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
        <input type="hidden" name="search_start_year" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_start_month" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_start_day" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php echo smarty_function_t(array('string' => "-"), $this);?>

        <input id="datepickercustomersearch_end"
               type="text"
               value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_end_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
        <input type="hidden" name="search_end_year" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_end_month" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_end_day" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Final purchase date_01'), $this);?>
</th>
    <td colspan="3">
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_buy_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_buy_end_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_buy_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_buy_end_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <?php endif; ?>
        <input id="datepickercustomersearch_buy_start"
               type="text"
               value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_buy_start_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
        <input type="hidden" name="search_buy_start_year" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_buy_start_month" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_buy_start_day" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php echo smarty_function_t(array('string' => "-"), $this);?>

        <input id="datepickercustomersearch_buy_end"
               type="text"
               value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_buy_end_year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
        <input type="hidden" name="search_buy_end_year" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_buy_end_month" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="search_buy_end_day" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Purchased product name_01'), $this);?>
</th>
    <td>
        <?php $this->assign('key', 'search_buy_product_name'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
        <span style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="30" class="box30" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"/>
        </span>
    </td>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Purchased product code_01'), $this);?>
</th>
    <td>
        <?php $this->assign('key', 'search_buy_product_code'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
        <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="30" class="box30" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" >
    </td>
</tr>
<tr>
    <th><?php echo smarty_function_t(array('string' => 'tpl_Category_01'), $this);?>
</th>
    <td colspan="3">
        <?php $this->assign('key', 'search_category_id'); ?>
        <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['errkey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?>>
            <option value=""><?php echo smarty_function_t(array('string' => 'tpl_Please make a selection_01'), $this);?>
</option>
            <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrCatList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        </select>
    </td>
</tr>