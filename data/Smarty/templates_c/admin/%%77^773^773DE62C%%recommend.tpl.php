<?php /* Smarty version 2.6.26, created on 2015-06-30 07:44:21
         compiled from contents/recommend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'contents/recommend.tpl', 37, false),array('modifier', 'script_escape', 'contents/recommend.tpl', 52, false),array('modifier', 'h', 'contents/recommend.tpl', 52, false),array('modifier', 'sfNoImageMainList', 'contents/recommend.tpl', 108, false),array('modifier', 'sfGetErrorColor', 'contents/recommend.tpl', 122, false),array('modifier', 'sfGetEnabled', 'contents/recommend.tpl', 122, false),)), $this); ?>

<script type="text/javascript">
<!--
function lfnCheckSubmit( fm ){

    var err = '';
    /*
    if ( ! fm["title"].value ){
        err += '見出しコメントを入力して下さい。';
    }
    */
    if ( ! fm["comment"].value ){
        if ( err ) err += '';
        err += '<?php echo smarty_function_t(array('string' => "tpl_Enter a comment._01"), $this);?>
';
    }
    if ( err ){
        alert(err);
        return false;
    } else {
        if(window.confirm('<?php echo smarty_function_t(array('string' => "tpl_Register and continue?_01"), $this);?>
')){
                fm.submit();
                return true;
        }
    }
}

function lfnCheckSetItem( rank ){
    var flag = true;
    var checkRank = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    if ( checkRank ){
        if ( rank != checkRank ){
            if( ! window.confirm('<?php echo smarty_function_t(array('string' => "tpl_The selected field T_ARG1 will be discarded. Continue? _01",'T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>
')){
                flag = false;
            }
        }
    }

    if ( flag ){
        win03('./recommend_search.php?rank=' + rank,'search','615','600');
    }
}

function lfnSortItem(mode,data){
    var flag = true;
    var checkRank = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    if ( checkRank ){
        if( ! window.confirm('<?php echo smarty_function_t(array('string' => "tpl_The selected field T_ARG1 will be discarded. Continue? _01",'T_ARG1' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>
')){
            flag = false;
        }
    }
    
    if ( flag ){
        document.form1["mode"].value = mode;
        document.form1["rank"].value = data;
        document.form1.submit();
    }
}

//-->
</script>

        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['tpl_disp_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>

<div id="admin-contents" class="contents-main">
    <table class="list center" id="recommend-table">
        <col width="13%" />
        <col width="73%" />
        <col width="7%" />
        <col width="7%" />
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Ranking_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => "tpl_Product/comment_01"), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
			<th><?php echo smarty_function_t(array('string' => 'tpl_Rearrangement_01'), $this);?>
</th>
        </tr>

        <tr>
            <td><?php echo smarty_function_t(array('string' => 'tpl_Recommended products_01'), $this);?>
(<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)</td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <td>
                        <div id="table-wrap" class="clearfix">
                            <div class="table-img">
                                <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                    <img src="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" width="100" height="100" />
                                <?php endif; ?>
                            </div>
                            <div class="table-detail">
                                <div class="detail-name"><?php echo smarty_function_t(array('string' => 'tpl_Product name_01'), $this);?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</div>

                                    <div class="detail-form">
                                        <form name="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" method="post" action="?">
                                            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                            <input type="hidden" name="mode" value="regist" />
                                            <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                            <input type="hidden" name="category_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                            <input type="hidden" name="rank" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_sections['cnt']['iteration']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                            <textarea class="top" name="comment" cols="45" rows="4" style="width: 586px; height: 80px; <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_sections['cnt']['iteration']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetEnabled', true, $_tmp) : SC_Utils_Ex::sfGetEnabled($_tmp)); ?>
><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                <?php else: ?>
                    <td class="AlignLeft">
                        <a class="btn-action-m" href="javascript:;" onclick="lfnCheckSetItem('<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;" target="_blank"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Select a product_01'), $this);?>
</span></a>
                        <form name="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" method="post" action="?">
                            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                            <input type="hidden" name="mode" value="regist" />
                            <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                            <input type="hidden" name="category_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                            <input type="hidden" name="rank" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                        </form>
                    </td>
                <?php endif; ?>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a href="javascript:;" onclick="lfnCheckSetItem('<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;" target="_blank">
                        <?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a>
                <?php else: ?>
                    - -
                <?php endif; ?>
            </td>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <a href="javascript:;" onClick="return fnInsertValAndSubmit( document.form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
, 'mode', 'delete', '<?php echo smarty_function_t(array('string' => "tpl_Deletion will be carried out. Is this okay?_01"), $this);?>
' )"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a>
                <?php else: ?>
                    - -
                <?php endif; ?>
            </td>
            <td>
                                <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1 && ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a href="?" onclick="lfnSortItem('up',<?php echo ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><?php echo smarty_function_t(array('string' => 'tpl_To top_01'), $this);?>
</a><br>&nbsp;
                <?php endif; ?>
                <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['tpl_disp_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a href="?" onclick="lfnSortItem('down',<?php echo ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><?php echo smarty_function_t(array('string' => 'tpl_To bottom_01'), $this);?>
</a>
                <?php endif; ?>
            </td>
        </tr>

        <tr><td colspan="4" class="no-border-w" height="20"></td></tr>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <tr><td colspan="4" class="no-border">
        <a class="btn-action" href="javascript:;" onclick="lfnCheckSubmit(document.form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Save and continue_01'), $this);?>
</span></a>
        </td>
        </tr>
        <?php endif; ?>
    <!--▲おすすめ商品<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
    <?php endfor; endif; ?>
    </table>
</div>