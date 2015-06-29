<?php /* Smarty version 2.6.26, created on 2015-06-12 07:53:05
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'home.tpl', 30, false),array('modifier', 'sfDispDBDate', 'home.tpl', 33, false),array('modifier', 'h', 'home.tpl', 33, false),array('modifier', 'default', 'home.tpl', 73, false),array('modifier', 'number_format', 'home.tpl', 73, false),array('function', 't', 'home.tpl', 47, false),)), $this); ?>

<div id="home">

        <div id="home-info">
		<div class="banner">
		<p><a href="http://en.ec-cube.net/forum/" target="_blank"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/bnr_user_forums.jpg" /></a></p></div>
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrInfo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info']):
?>
            <dl class="home-info-item">
                <dt class="date"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['info']['disp_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp, false) : SC_Utils_Ex::sfDispDBDate($_tmp, false)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</dt>
                <dt class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</dt>
                <dd class="body"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['body'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</dd>
            </dl>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    
        <div id="home-main">
        <form name="form1" method="post" action="#">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />

                <h2><?php echo smarty_function_t(array('string' => 'tpl_System information_01'), $this);?>
</h2>
        <table summary="System information" class="shop-info">
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_EC-CUBE version_01"), $this);?>
</th>
                <td><?php echo ((is_array($_tmp=@ECCUBE_VERSION)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_PHP version_01'), $this);?>
</th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_DB version_01'), $this);?>
</th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['db_version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Details_01'), $this);?>
</th>
                <td><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@ADMIN_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
system/system.php"><?php echo smarty_function_t(array('string' => "tpl_System settings > System information_01"), $this);?>
</a></td>
            </tr>
        </table>
        
                <h2><?php echo smarty_function_t(array('string' => 'tpl_Shop status_01'), $this);?>
</h2>
        <table summary="Shop status" class="shop-info">
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Current number of members_01'), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => 'tpl_T_ARG1_01','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_cnt'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp))), $this);?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_Yesterday's sales_01"), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => "tpl_&#36; T_ARG1_01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_yesterday_amount'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp))), $this);?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Number of items sold yesterday_01'), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => 'tpl_T_ARG1 item_01','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_yesterday_cnt'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp))), $this);?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_<span>Sales for this month </span><span>(up to yesterday) </span>_01",'escape' => 'none'), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => "tpl_&#36; T_ARG1_01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_month_amount'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp))), $this);?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_<span>Number of items sold this month </span><span>(up to yesterday) </span>_01",'escape' => 'none'), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => 'tpl_T_ARG1 item_01','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['order_month_cnt'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp))), $this);?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Number of reviews from yesterday_01'), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => 'tpl_T_ARG1 item_01','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['review_yesterday_cnt'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))), $this);?>
</th>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_Member's total registered points_01"), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => 'pt_prefix'), $this);?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
<?php echo smarty_function_t(array('string' => 'pt_suffix'), $this);?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Number of reviews not displayed_01'), $this);?>
</th>
                <td><?php echo smarty_function_t(array('string' => 'tpl_T_ARG1 item_01','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['review_nondisp_cnt'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))), $this);?>
</td>
            </tr>
            <tr>
                <th><?php echo smarty_function_t(array('string' => "tpl_Sold-out products_01"), $this);?>
</th>
                <td>
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrSoldout'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['arrSoldout'][$this->_sections['i']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSoldout'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br />
                <?php endfor; endif; ?>
                </td>
            </tr>
        </table>
        
                <h2><?php echo smarty_function_t(array('string' => 'tpl_List of new orders received_01'), $this);?>
</h2>
        <table summary="List of new orders received" id="home-order">
            <tr>
                <th class="center"><?php echo smarty_function_t(array('string' => 'tpl_Date of order receipt_01'), $this);?>
</th>
                <th class="center"><?php echo smarty_function_t(array('string' => 'tpl_Name_02'), $this);?>
</th>
                <th class="center"><?php echo smarty_function_t(array('string' => 'tpl_Purchased product_01'), $this);?>
</th>
                <th class="center"><?php echo smarty_function_t(array('string' => 'tpl_Payment method_01'), $this);?>
</th>
                <th class="center"><?php echo smarty_function_t(array('string' => "tpl_Purchase amount (&#36;)_01",'escape' => 'none'), $this);?>
</th>
            </tr>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrNewOrder'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
            <tr>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrNewOrder'][$this->_sections['i']['index']]['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNewOrder'][$this->_sections['i']['index']]['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNewOrder'][$this->_sections['i']['index']]['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNewOrder'][$this->_sections['i']['index']]['product_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNewOrder'][$this->_sections['i']['index']]['payment_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td class="right"><?php echo smarty_function_t(array('string' => "tpl_&#36; T_ARG1_01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNewOrder'][$this->_sections['i']['index']]['total'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp))), $this);?>
</td>
            </tr>
            <?php endfor; endif; ?>
        </table>
        
        </form>
    </div>
    
</div>