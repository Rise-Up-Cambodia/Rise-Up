<?php /* Smarty version 2.6.26, created on 2015-06-24 09:11:01
         compiled from mypage/navi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mypage/navi.tpl', 30, false),array('modifier', 'h', 'mypage/navi.tpl', 65, false),array('modifier', 'number_format', 'mypage/navi.tpl', 67, false),array('modifier', 'default', 'mypage/navi.tpl', 67, false),)), $this); ?>

<div id="mynavi_area">
    <?php echo '<ul class="mynavi_list clearfix">'; ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo '<li><a href="./'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Purchase history</a></li>'; ?><?php if (((is_array($_tmp=@OPTION_FAVORITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '<li><a href="favorite.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'favorite'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Favorites</a></li>'; ?><?php endif; ?><?php echo '<li><a href="change.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'change'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Edit registration details</a></li><li><a href="delivery.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delivery'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Delivery options</a></li><li><a href="refusal.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'refusal'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Cancel membership</a></li>'; ?><?php echo ''; ?><?php else: ?><?php echo '<li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Purchase history</a></li>'; ?><?php if (((is_array($_tmp=@OPTION_FAVORITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '<li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'favorite'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Favorites</a></li>'; ?><?php endif; ?><?php echo '<li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'change'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Edit registration details</a></li><li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delivery'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Delivery options</a></li><li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'refusal'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">Cancel membership</a></li>'; ?><?php endif; ?><?php echo '</ul><!--▼現在のポイント-->'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['point_disp'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?><?php echo '<div class="point_announce clearfix"><p>Welcome&nbsp;/&nbsp;<span class="user_name">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerName1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerName2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</span>'; ?><?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?><?php echo '&nbsp;You currently have&nbsp;<span class="point st">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerPoint'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' pts</span>'; ?><?php endif; ?><?php echo '</p></div>'; ?><?php endif; ?><?php echo '<!--▲現在のポイント-->'; ?>


</div>
<!--▲NAVI-->