<?php /* Smarty version 2.6.26, created on 2015-06-12 09:12:03
         compiled from design/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'design/index.tpl', 3, false),array('modifier', 'h', 'design/index.tpl', 3, false),array('modifier', 'strlen', 'design/index.tpl', 362, false),array('function', 't', 'design/index.tpl', 55, false),)), $this); ?>
<script type="text/javascript">
    $(function() {
        var page_id = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        if (page_id != '1') {
            $('.anywhere').attr('disabled', true);
            $('.anywhere:checked').each(function() {
                $(this).parents('.sort').children('input[type=hidden]').each(function() {
                    $(this).remove();
                });
            });
        }
    });
function doPreview(){
    document.form1.mode.value="preview"
    document.form1.target = "_blank";
    document.form1.submit();
}
function fnTargetSelf(){
    document.form1.target = "_self";
}

</script>

<script type="text/javascript" src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/ui.core.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/ui.sortable.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/layout_design.js"></script>


<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="" />
<input type="hidden" name="page_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<input type="hidden" name="bloc_cnt" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['bloc_cnt'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<input type="hidden" name="device_type_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />

<div id="design" class="contents-main">
        <div style="float: left; width: 75%;" align="center">
        <table id="design-layout-used" class="design-layout">
            <tr>
                <th colspan="3">&lt;head&gt;</th>
            </tr>
            <tr>
                <!-- ★☆★ HEADタグ内テーブル ☆★☆ -->
                <td colspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_HEAD])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                    <?php $this->assign('firstflg', false); ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_HEAD])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                            </div>
                            <?php $this->assign('firstflg', true); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <!-- ★☆★ Headタグ内テーブル ☆★☆ -->
            </tr>
            <tr>
                <th colspan="3">&lt;/head&gt;</th>
            </tr>
            <tr>
                <!-- ★☆★ ヘッダより上部ナビテーブル ☆★☆ -->
                <td colspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_HEAD_TOP])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                    <?php $this->assign('firstflg', false); ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_HEAD_TOP])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                            </div>
                            <?php $this->assign('firstflg', true); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <!-- ★☆★ ヘッダより上部ナビテーブル ☆★☆ -->
            </tr>
            <tr>
                <!-- ★☆★ ヘッダ内部ナビテーブル ☆★☆ -->
                <th id="layout-header"><?php echo smarty_function_t(array('string' => 'tpl_Header section_01'), $this);?>
</th>
                <td colspan="2" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_HEADER_INTERNAL])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                    <?php $this->assign('firstflg', false); ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_HEADER_INTERNAL])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                            </div>
                            <?php $this->assign('firstflg', true); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <!-- ★☆★ ヘッダ内部ナビテーブル ☆★☆ -->
            </tr>
            <tr>
                <!-- ★☆★ 上部ナビテーブル ☆★☆ -->
                <td colspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_TOP])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                    <?php $this->assign('firstflg', false); ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_TOP])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                            </div>
                            <?php $this->assign('firstflg', true); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <!-- ★☆★ 上部ナビテーブル ☆★☆ -->
            </tr>

            <?php if (((is_array($_tmp=$this->_tpl_vars['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@DEVICE_TYPE_MOBILE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@DEVICE_TYPE_SMARTPHONE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <tr>
                    <td colspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_HEAD])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                        <?php $this->assign('firstflg', false); ?>
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_HEAD])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                    <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                    <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                                </div>
                                <?php $this->assign('firstflg', true); ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>
                                                <tr>
                    <th colspan="3" id="layout-main"><?php echo smarty_function_t(array('string' => 'tpl_Main_01'), $this);?>
</th>
                </tr>
                                                <tr>
                    <td colspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_FOOT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                        <?php $this->assign('firstflg', false); ?>
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_FOOT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                    <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                    <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                                </div>
                                <?php $this->assign('firstflg', true); ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>
            <?php else: ?>
                <tr>
                                        <td rowspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_LEFT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                        <?php $this->assign('firstflg', false); ?>
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_LEFT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                    <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                    <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                                </div>
                                <?php $this->assign('firstflg', true); ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                                                            <td id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_HEAD])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                        <?php $this->assign('firstflg', false); ?>
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_HEAD])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                    <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                    <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                                </div>
                                <?php $this->assign('firstflg', true); ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                                                            <td rowspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_RIGHT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                        <?php $this->assign('firstflg', false); ?>
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_RIGHT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                    <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                    <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                                </div>
                                <?php $this->assign('firstflg', true); ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                                    </tr>
                                <tr>
                    <th id="layout-main"><?php echo smarty_function_t(array('string' => 'tpl_Main_01'), $this);?>
</th>
                </tr>
                                                <tr>
                    <td id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_FOOT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                        <?php $this->assign('firstflg', false); ?>
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_MAIN_FOOT])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                    <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                    <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                                </div>
                                <?php $this->assign('firstflg', true); ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                            <!-- ★☆★ 下部ナビテーブル ☆★☆ -->
                <td colspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_BOTTOM])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                    <?php $this->assign('firstflg', false); ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_BOTTOM])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                            </div>
                            <?php $this->assign('firstflg', true); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <!-- ★☆★ 下部ナビテーブル ☆★☆ -->
            </tr>
            <tr>
                <th colspan="3" id="layout-footer"><?php echo smarty_function_t(array('string' => 'tpl_Footer section_01'), $this);?>
</th>
            </tr>
            <tr>
                <!-- ★☆★ フッタより下部ナビテーブル ☆★☆ -->
                <td colspan="3" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_FOOTER_BOTTOM])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable">
                    <?php $this->assign('firstflg', false); ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_FOOTER_BOTTOM])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                            </div>
                            <?php $this->assign('firstflg', true); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <!-- ★☆★ フッタより下部ナビテーブル ☆★☆ -->
            </tr>
        </table>
    </div>
    
        <div style="float: left; width: 25%;" align="center">
        <table id="design-layout-unused" class="design-layout">
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Unused blocks_01'), $this);?>
</th>
            </tr>
            <tr>
                <td id="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_UNUSED])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="ui-sortable" style="width: 145px;">
                    <?php $this->assign('firstflg', false); ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBlocs'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bloc_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bloc_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['bloc_loop']['iteration']++;
?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrTarget'][@TARGET_ID_UNUSED])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="sort<?php if (! ((is_array($_tmp=$this->_tpl_vars['firstflg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> first<?php endif; ?>">
                                <input type="hidden" class="name" name="name_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="id" name="id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="target-id" name="target_id_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['target_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" class="top" name="top_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['bloc_row'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                                <label class="anywherecheck">(<input type="checkbox" class="anywhere" name="anywhere_<?php echo ((is_array($_tmp=$this->_foreach['bloc_loop']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['anywhere'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?> /><?php echo smarty_function_t(array('string' => 'tpl_All pages_01'), $this);?>
)</label>
                            </div>
                            <?php $this->assign('firstflg', true); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>
        </table>
        <div class="btn"><a class="btn-normal" href="javascript:;" onclick="fnTargetSelf(); fnFormModeSubmit('form1','new_bloc','',''); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_New block_01'), $this);?>
</span></a></div>
    </div>
            <div class="btn-area">
            <ul>
            <?php if (((is_array($_tmp=$this->_tpl_vars['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@DEVICE_TYPE_PC)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <li><a class="btn-action" href="javascript:;" name='preview' onclick="doPreview();"><span class="btn-prev"><?php echo smarty_function_t(array('string' => 'tpl_Preview_01'), $this);?>
</span></a></li>
            <?php endif; ?>
                <li><a class="btn-action" href="javascript:;" name='subm' onclick="fnTargetSelf(); fnFormModeSubmit('form1','confirm','',''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Register_01'), $this);?>
</span></a></li>
            </ul>
        </div>
    <!--▲レイアウト編集　ここまで-->

    <!--▼ページ一覧　ここから-->
    <h2 style="clear: both;"><?php echo smarty_function_t(array('string' => 'tpl_List of pages that can be edited_01'), $this);?>
</h2>
    <div class="btn addnew">
        <a class="btn-normal" href="javascript:;" onclick="fnTargetSelf(); fnFormModeSubmit('form1','new_page','',''); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_New input of page_01'), $this);?>
</span></a>
    </div>
    <table class="list">
    <tr>
        <th><?php echo smarty_function_t(array('string' => 'tpl_Name_01'), $this);?>
</th>
        <th class="edit"><?php echo smarty_function_t(array('string' => 'tpl_Layout_01'), $this);?>
</th>
        <th class="edit center"><?php echo smarty_function_t(array('string' => 'tpl_Page details_01'), $this);?>
</th>
        <th class="delete center"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
    </tr>
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrEditPage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <tr style="background-color:<?php if (((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ((is_array($_tmp=@SELECT_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php else: ?>#ffffff<?php endif; ?>;">
            <td>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

            </td>
            <td class="center">
                <a href="?page_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;device_type_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" ><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a>
            </td>
            <td class="center">
                <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['filename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                    <a href="main_edit.php?page_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;device_type_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a>
                <?php endif; ?>
            </td>
            <td class="center">
                <?php if (((is_array($_tmp=$this->_tpl_vars['item']['edit_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
                    <a href="#" onclick="fnTargetSelf(); fnFormModeSubmit('form1','delete','page_id','<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
    <!--▲ページ一覧　ここまで-->
</div>
</form>