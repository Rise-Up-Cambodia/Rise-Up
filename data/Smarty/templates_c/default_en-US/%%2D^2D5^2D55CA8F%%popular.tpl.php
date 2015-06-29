<?php /* Smarty version 2.6.26, created on 2015-06-27 10:12:31
         compiled from C:%5Cwamp%5Cwww%5CRise-Up-Shop%5Chtml/../data/Smarty/templates/default_en-US/products/popular.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/products/popular.tpl', 2, false),array('modifier', 'h', 'C:\\wamp\\www\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/products/popular.tpl', 2, false),)), $this); ?>

<h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
<div id="undercolumn_aboutus">
    <table>
        <tr>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['i'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

            <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrResults'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommend_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrResult']):
        $this->_foreach['recommend_products']['iteration']++;
?>
            <td class="brand-logo"> <a  href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="picture" /></a>
                <h3 class="brand-name"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</h3></a></td>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
    </table>
</div>
<!--pop up image------>
<div class="overlay" id="ov" onclick="hide()"></div>
<div class="viewer" id="viewer"></div>
