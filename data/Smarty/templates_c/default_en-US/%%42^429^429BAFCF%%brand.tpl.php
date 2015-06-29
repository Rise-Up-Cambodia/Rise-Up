<?php /* Smarty version 2.6.26, created on 2015-06-17 06:34:53
         compiled from C:%5Cwamp%5Cwww%5CGift%5Chtml/../data/Smarty/templates/default_en-US/brand/brand.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\Gift\\html/../data/Smarty/templates/default_en-US/brand/brand.tpl', 1, false),)), $this); ?>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/custom.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/lb.js"></script>

<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
css/style.css" type="text/css"/>



<div id="undercolumn_aboutus">
    <h2 class="title">Brand List</h2>
    <table class="brand"" border="none">

        <tr>

  <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrResults'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrResult']):
        $this->_foreach['brand']['iteration']++;
?>


            <td> <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/brand/<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['image_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="picture" onclick="view(this.src)" /><br/><br/><span class="tname"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</b></span></td>






        <?php endforeach; endif; unset($_from); ?>
        </tr>
    </table>
    <div class="overlay" id="ov" onclick="hide()"></div>
    <div class="viewer" id="viewer"></div>

</div>
