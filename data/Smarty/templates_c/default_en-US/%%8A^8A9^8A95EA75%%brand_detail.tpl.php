<?php /* Smarty version 2.6.26, created on 2015-06-25 06:55:12
         compiled from C:%5Cwamp%5Cwww%5CGitHub%5CRise-Up-Shop%5Chtml/../data/Smarty/templates/default_en-US/brand/brand_detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\GitHub\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/brand/brand_detail.tpl', 1, false),array('modifier', 'h', 'C:\\wamp\\www\\GitHub\\Rise-Up-Shop\\html/../data/Smarty/templates/default_en-US/brand/brand_detail.tpl', 4, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
css/brand.css"/>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/lb.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/custom.js"></script>
<h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
<div id="undercolumn_aboutus">
   <!-- {$brand_id = $smarty.get.brand_id }-->
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrResults'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommend_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrResult']):
        $this->_foreach['recommend_products']['iteration']++;
?>
             <?php if (((is_array($_tmp=$_GET['brand_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrResult']['brand_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
          <div class="brand-logo">
              <a  href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
brand/brand_detail.php?brand_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['brand_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/picture/<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['image_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="picture" id="pic_detail"/></a>
          </div>
    <table id="brand_dt_dtb">
        <tr>
            <th>Company Name</th>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['description'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['address'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
        </tr>
        <tr>
            <th>Website</th>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['website'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
        </tr>
           <?php endif; ?>
    </table>
    <?php endforeach; endif; unset($_from); ?>
</div>
<!--pop up image------>
<div class="overlay" id="ov" onclick="hide()"></div>
<div class="viewer" id="viewer"></div>
