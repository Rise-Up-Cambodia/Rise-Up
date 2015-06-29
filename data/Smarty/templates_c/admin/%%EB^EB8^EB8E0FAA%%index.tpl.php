<?php /* Smarty version 2.6.26, created on 2015-06-15 01:45:46
         compiled from contents/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'contents/index.tpl', 29, false),array('modifier', 'h', 'contents/index.tpl', 111, false),array('modifier', 'date_format', 'contents/index.tpl', 284, false),array('modifier', 'nl2br', 'contents/index.tpl', 286, false),array('function', 't', 'contents/index.tpl', 29, false),array('function', 'sfSetErrorStyle', 'contents/index.tpl', 209, false),array('function', 'math', 'contents/index.tpl', 283, false),)), $this); ?>

<script type="text/javascript">
<!--

function func_regist(url) {
    res = confirm('<?php if (((is_array($_tmp=$this->_tpl_vars['edit_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'on'): ?><?php echo smarty_function_t(array('string' => "tpl_Do you want to edit with these contents?_01"), $this);?>
<?php else: ?><?php echo smarty_function_t(array('string' => "tpl_Register and continue?_01"), $this);?>
<?php endif; ?>');
    if(res == true) {
        document.form1.mode.value = 'regist';
        document.form1.submit();
        return false;
    }
    return false;
}

function func_edit(news_id) {
    document.form1.mode.value = "search";
    document.form1.news_id.value = news_id;
    document.form1.submit();
}

function func_del(news_id) {
    res = confirm('<?php echo smarty_function_t(array('string' => "tpl_Do you want to delete this new information?_01"), $this);?>
');
    if(res == true) {
        document.form1.mode.value = "delete";
        document.form1.news_id.value = news_id;
        document.form1.submit();
    }
    return false;
}

function func_rankMove(term,news_id) {
    document.form1.mode.value = "move";
    document.form1.news_id.value = news_id;
    document.form1.term.value = term;
    document.form1.submit();
}

function moving(news_id,rank, max_rank) {

    var val;
    var ml;
    var len;

    ml = document.move;
    len = document.move.elements.length;
    j = 0;
    for( var i = 0 ; i < len ; i++) {
            if ( ml.elements[i].name == 'position' && ml.elements[i].value != "" ) {
            val = ml.elements[i].value;
            j ++;
            }
    }

    if ( j > 1) {
        alert( '<?php echo smarty_function_t(array('string' => "tpl_Enter a single move ranking._01"), $this);?>
' );
        return false;
    } else if( ! val ) {
        alert( '<?php echo smarty_function_t(array('string' => "tpl_Enter a move ranking._01"), $this);?>
' );
        return false;
    } else if( val.length > 4){
        alert( '<?php echo smarty_function_t(array('string' => "tpl_Enter a move ranking that is 4 digits or less._01"), $this);?>
' );
        return false;
    } else if( val.match(/[0-9]+/g) != val){
        alert( '<?php echo smarty_function_t(array('string' => "tpl_Enter a number for the move ranking._01"), $this);?>
' );
        return false;
    } else if( val == rank ){
        alert( '<?php echo smarty_function_t(array('string' => "The number to be moved is a duplicate._01"), $this);?>
' );
        return false;
    } else if( val == 0 ){
        alert( '<?php echo smarty_function_t(array('string' => 'tpl_Enter 0 or greater for the move ranking_01'), $this);?>
' );
        return false;
    } else if( val > max_rank ){
        alert( '<?php echo smarty_function_t(array('string' => "tpl_The order that was entered exceeds the maximum valued for the number registered._01"), $this);?>
' );
        return false;
    } else {
        ml.moveposition.value = val;
        ml.rank.value = rank;
        ml.news_id.value = news_id;
        ml.submit();
        return false;
    }
}

	$(function(){
        var dateFormat = $.datepicker.regional['<?php echo ((is_array($_tmp=@LANG_CODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'].dateFormat;

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        var year  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var month = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var day   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var ymd = $.datepicker.formatDate(dateFormat, new Date(year, month - 1, day));
        $("#datepicker").val(ymd);
        // console.log(ymd);
        <?php endif; ?>

		$( "#datepicker" ).datepicker({
		beforeShowDay: function(date) {
			if(date.getDay() == 0) {
				return [true,"date-sunday"]; 
			} else if(date.getDay() == 6){
				return [true,"date-saturday"];
			} else {
				return [true];
			}
		},changeMonth: 'true'
		,changeYear: 'true'
		,onSelect: function(dateText, inst){
            var year  = inst.selectedYear;
            var month = inst.selectedMonth + 1;
            var day   = inst.selectedDay;
            setDate(year + '/' + month + '/' + day);
		},
		showButtonPanel: true,
		beforeShow: showAdditionalButton,       
		onChangeMonthYear: showAdditionalButton
		});
		
		$("#datepicker").change( function() {
            var dateText   = $(this).val();
            var dateFormat = $.datepicker.regional['<?php echo ((is_array($_tmp=@LANG_CODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'].dateFormat;
            // console.log(dateText);
            // console.log(dateFormat);
            var date;
            var year  = '';
            var month = '';
            var day   = '';
            try {
                date = $.datepicker.parseDate(dateFormat, dateText);
                year  = date.getFullYear();
                month = date.getMonth() + 1;
                day   = date.getDate();
            } catch (e) {
                // console.log(e);
                // clear date text
                $(this).val('');
            }
            setDate(year + '/' + month + '/' + day);
		});
		
	});
	
	var btn = $('<button class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" type="button">Clear</button>');
	
	var showAdditionalButton = function (input) {
		setTimeout(function () {
			var buttonPane = $(input)
					 .datepicker("widget")
					 .find(".ui-datepicker-buttonpane");
			btn
					.unbind("click")
					.bind("click", function () {
						$.datepicker._clearDate(input);
						$("*[name=year]").val("");
						$("*[name=month]").val("");
						$("*[name=day]").val("");
					});
			btn.appendTo(buttonPane);
		}, 1);
	};
	
	function setDate(dateText){
	var dates = dateText.split('/');
	$("*[name=year]").val(dates[0]);
	$("*[name=month]").val(dates[1]);
	$("*[name=day]").val(dates[2]);
	}

//-->
</script>


<div id="admin-contents" class="contents-main">
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="" />
<input type="hidden" name="news_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<input type="hidden" name="term" value="" />
        <table>
        <tr>
            <th><?php echo smarty_function_t(array('string' => "tpl_Date<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
                <input id="datepicker"
                       type="text"
                       value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                <input type="hidden" name="year" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <input type="hidden" name="month" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <input type="hidden" name="day" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => "tpl_Title<span class='attention'> *</span>_01",'escape' => 'none'), $this);?>
</th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
                <textarea name="news_title" cols="60" rows="8" class="area60" maxlength="<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>style="background-color:<?php echo ((is_array($_tmp=((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"<?php endif; ?>><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(T_ARG1 characters max)_01",'T_ARG1' => ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_URL_01'), $this);?>
</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="news_url" size="60" class="box60"    value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>style="background-color:<?php echo ((is_array($_tmp=((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"<?php endif; ?> maxlength="<?php echo ((is_array($_tmp=@URL_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                <span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(T_ARG1 characters max)_01",'T_ARG1' => ((is_array($_tmp=@URL_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</span>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Link_01'), $this);?>
</th>
            <td><label><input type="checkbox" name="link_method" value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['link_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 2): ?> checked <?php endif; ?> /> <?php echo smarty_function_t(array('string' => 'tpl_Open in separate window_01'), $this);?>
</label></td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Create text_01'), $this);?>
</th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['news_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['news_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
                <textarea name="news_comment" cols="60" rows="8" wrap="soft" class="area60" maxlength="<?php echo ((is_array($_tmp=@LTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="background-color:<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['news_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ((is_array($_tmp=((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php endif; ?>"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['news_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> <?php echo smarty_function_t(array('string' => "tpl_(3000 characters max)_01"), $this);?>
</span>
            </td>
        </tr>
    </table>
    
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="return func_regist();"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Save and continue_01'), $this);?>
</span></a></li>
        </ul>
    </div>
</form>

    <h2><?php echo smarty_function_t(array('string' => 'tpl_List of new information_01'), $this);?>
</h2>
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['moveposition'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
    <p><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['moveposition'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span></p>
    <?php endif; ?>
        <form name="move" id="move" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="moveRankSet" />
    <input type="hidden" name="term" value="setposition" />
    <input type="hidden" name="news_id" value="" />
    <input type="hidden" name="moveposition" value="" />
    <input type="hidden" name="rank" value="" />
    <table class="list">
        <col width="5%" />
        <col width="15%" />
        <col width="45%" />
        <col width="5%" />
        <col width="5%" />
        <col width="25%" />
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Ranking_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Date_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Title_01'), $this);?>
</th>
            <th class="edit"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</th>
            <th class="delete"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Move_01'), $this);?>
</th>
        </tr>
        <?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrNews'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
$this->_sections['data']['start'] = $this->_sections['data']['step'] > 0 ? 0 : $this->_sections['data']['loop']-1;
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = $this->_sections['data']['loop'];
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
        <tr style="background:<?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['tpl_news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>#ffffff<?php else: ?><?php echo ((is_array($_tmp=@SELECT_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>;" class="center">
            <?php $this->assign('db_rank', ($this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['rank'])); ?>
            <td><?php echo smarty_function_math(array('equation' => ($this->_tpl_vars['line_max'])." - ".($this->_tpl_vars['db_rank'])." + 1"), $this);?>
</td>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['cast_news_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
</td>
            <td class="left">
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['link_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</a>
                <?php elseif (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['link_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ""): ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

                <?php elseif (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['link_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 2 && ((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" target="_blank" ><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</a>
                <?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

                <?php endif; ?>
            </td>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['tpl_news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <a href="#" onclick="return func_edit('<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a>
                <?php else: ?>
                <?php echo smarty_function_t(array('string' => 'tpl_being edited_01'), $this);?>

                <?php endif; ?>
            </td>
            <td><a href="#" onclick="return func_del('<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a></td>
            <td>
            <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrNews'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) != 1): ?>
            <input type="text" name="pos-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="3" class="box3" /><?php echo smarty_function_t(array('string' => "tpl_Line(s)_01"), $this);?>
 <a href="?" onclick="fnFormModeSubmit('move', 'moveRankSet','news_id', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Move_01'), $this);?>
</a><br />
            <?php endif; ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['max_rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><a href="#" onclick="return func_rankMove('up', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['max_rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');"><?php echo smarty_function_t(array('string' => 'tpl_To top_01'), $this);?>
</a><?php endif; ?>&nbsp;<?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?><a href="#" onclick="return func_rankMove('down', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['max_rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');"><?php echo smarty_function_t(array('string' => 'tpl_To bottom_01'), $this);?>
</a><?php endif; ?>
            </td>
        </tr>
        <?php endfor; else: ?>
        <tr class="center">
            <td colspan="6"><?php echo smarty_function_t(array('string' => "tpl_Currently, there is no data._01"), $this);?>
</td>
        </tr>
        <?php endif; ?>
    </table>
    </form>
    
</div>