<?php /* Smarty version 2.6.26, created on 2015-06-15 01:36:20
         compiled from products/review.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'products/review.tpl', 27, false),array('modifier', 'h', 'products/review.tpl', 30, false),array('modifier', 'sfGetErrorColor', 'products/review.tpl', 250, false),array('modifier', 'sfDispDBDate', 'products/review.tpl', 304, false),array('function', 't', 'products/review.tpl', 190, false),array('function', 'html_checkboxes', 'products/review.tpl', 209, false),array('function', 'html_options', 'products/review.tpl', 215, false),array('function', 'sfSetErrorStyle', 'products/review.tpl', 228, false),)), $this); ?>

<script type="text/javascript">
$(function(){
	var dateFormat = $.datepicker.regional['<?php echo ((is_array($_tmp=@LANG_CODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'].dateFormat;

    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
    var search_startyear  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    var search_startmonth = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    var search_startday   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    var search_start_ymd = $.datepicker.formatDate(dateFormat, new Date(search_startyear, search_startmonth - 1, search_startday));
    $("#datepickersearch_start").val(search_start_ymd);
    <?php endif; ?>

	$( "#datepickersearch_start" ).datepicker({
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
        setDatesearch_start(year + '/' + month + '/' + day);
	},
	showButtonPanel: true,
	beforeShow: showAdditionalButtonsearch_start,       
	onChangeMonthYear: showAdditionalButtonsearch_start
	});
	
	$("#datepickersearch_start").change( function() {
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
        setDatesearch_start(year + '/' + month + '/' + day);
	});

    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
    var search_endyear  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    var search_endmonth = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    var search_endday   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    var search_end_ymd = $.datepicker.formatDate(dateFormat, new Date(search_endyear, search_endmonth - 1, search_endday));
    $("#datepickersearch_end").val(search_end_ymd);
    <?php endif; ?>
    
	$( "#datepickersearch_end" ).datepicker({
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
        setDatesearch_end(year + '/' + month + '/' + day);
	},
	showButtonPanel: true,
	beforeShow: showAdditionalButtonsearch_end,       
	onChangeMonthYear: showAdditionalButtonsearch_end
	});
	
	$("#datepickersearch_end").change( function() {
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
        setDatesearch_end(year + '/' + month + '/' + day);
	});

});

var btn = $('<button class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" type="button">Clear</button>');

var showAdditionalButtonsearch_start = function (input) {
	setTimeout(function () {
		var buttonPane = $(input)
				 .datepicker("widget")
				 .find(".ui-datepicker-buttonpane");
		btn
				.unbind("click")
				.bind("click", function () {
					$.datepicker._clearDate(input);
					$("*[name=search_startyear]").val("");
					$("*[name=search_startmonth]").val("");
					$("*[name=search_startday]").val("");
				});
		btn.appendTo(buttonPane);
	}, 1);
};

var showAdditionalButtonsearch_end = function (input) {
	setTimeout(function () {
		var buttonPane = $(input)
				 .datepicker("widget")
				 .find(".ui-datepicker-buttonpane");
		btn
				.unbind("click")
				.bind("click", function () {
					$.datepicker._clearDate(input);
					$("*[name=search_endyear]").val("");
					$("*[name=search_endmonth]").val("");
					$("*[name=search_endday]").val("");
				});
		btn.appendTo(buttonPane);
	}, 1);
};

function setDatesearch_start(dateText){
var dates = dateText.split('/');
$("*[name=search_startyear]").val(dates[0]);
$("*[name=search_startmonth]").val(dates[1]);
$("*[name=search_startday]").val(dates[2]);
}

function setDatesearch_end(dateText){
var dates = dateText.split('/');
$("*[name=search_endyear]").val(dates[0]);
$("*[name=search_endmonth]").val(dates[1]);
$("*[name=search_endday]").val(dates[2]);
}
</script>

<div id="products" class="contents-main">
<form name="search_form" method="post" action="?" >
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="search" />
    <h2><?php echo smarty_function_t(array('string' => 'tpl_Search condition settings_01'), $this);?>
</h2>

    <!--検索条件設定テーブルここから-->
    <table>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Poster name_01'), $this);?>
</th>
            <td><input type="text" name="search_reviewer_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_reviewer_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="30" class="box30" /></td>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Poster URL_01'), $this);?>
</th>
            <td><input type="text" name="search_reviewer_url" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_reviewer_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="30" class="box30" /></td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Product name_01'), $this);?>
</th>
            <td><input type="text" name="search_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="30" class="box30" /></td>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Product code_01'), $this);?>
</th>
            <td><input type="text" name="search_product_code" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_product_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="30" class="box30" /></td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Gender_01'), $this);?>
</th>
            <?php $this->assign('key', 'search_sex'); ?>
            <td><?php echo smarty_function_html_checkboxes(array('name' => ($this->_tpl_vars['key']),'options' => ((is_array($_tmp=$this->_tpl_vars['arrSex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</td>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Recommendation level_01'), $this);?>
</th>
            <td>
                <?php $this->assign('key', 'search_recommend_level'); ?>
                <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                    <option value="" selected="selected"><?php echo smarty_function_t(array('string' => 'tpl_Please make a selection_01'), $this);?>
</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrRECOMMEND'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>

                </select>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Post date_01'), $this);?>
</th>
            <td colspan="3">
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <input id="datepickersearch_start"
                       type="text"
                       value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                <input type="hidden" name="search_startyear" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <input type="hidden" name="search_startmonth" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <input type="hidden" name="search_startday" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <?php echo smarty_function_t(array('string' => "-"), $this);?>

                <input id="datepickersearch_end"
                       type="text"
                       value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                <input type="hidden" name="search_endyear" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <input type="hidden" name="search_endmonth" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <input type="hidden" name="search_endday" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            </td>
        </tr>
    </table>

    <div class="btn">
        <p class="page_rows"><?php echo smarty_function_t(array('string' => 'tpl_Results displayed_01'), $this);?>

            <?php $this->assign('key', 'search_page_max'); ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            <?php endif; ?>
            <?php echo smarty_function_t(array('string' => 'record_prefix'), $this);?>

            <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
            <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPageMax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_page_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>

            </select> 
            <?php echo smarty_function_t(array('string' => 'record_suffix'), $this);?>

        </p>
        <div class="btn-area">
            <ul>
                <li>
                    <a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('search_form', 'search', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Search using above criteria_01'), $this);?>
</span></a></li>
            </ul>
        </div>
    </div>
</form>


<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) == 0 && ( ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search' || ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delete' )): ?>

<!--★★検索結果一覧★★-->
<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="search" />
    <input type="hidden" name="review_id" value="" />
    <input type="hidden" name="search_pageno" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_pageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'search_pageno'): ?>
            <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <h2><?php echo smarty_function_t(array('string' => 'tpl_List of search results_01'), $this);?>
</h2>
    <div class="btn">
        <!--検索結果数--><?php echo smarty_function_t(array('string' => "tpl_<span class='attention'>T_ARG1 items</span>&nbsp; were found._01",'escape' => 'none','T_ARG1' => ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        <?php if (((is_array($_tmp=@ADMIN_MODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>
            <a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('delete_all','',''); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Delete all search results_01'), $this);?>
</span></a>
        <?php endif; ?>
        <a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('csv','',''); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_CSV download_01'), $this);?>
</span></a>
    </div>
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrReview'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0 & ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_pager'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <!--検索結果表示テーブル-->
        <table id="products-review-result" class="list">
            <tr>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Post date_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Poster name_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Product name_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => 'tpl_Recommendation level_01'), $this);?>
</th>
                <th><?php echo smarty_function_t(array('string' => "tpl_Display/Not display_01"), $this);?>
</th>
                <th class="edit"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</th>
                <th class="delete"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
            </tr>

            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrReview'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr>
                    <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)); ?>
</td>
                    <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['reviewer_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                    <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                    <?php $this->assign('key', ($this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['recommend_level'])); ?>
                    <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRECOMMEND'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                    <td class="menu"><?php if (((is_array($_tmp=$this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo smarty_function_t(array('string' => 'tpl_Display_01'), $this);?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 2): ?><?php echo smarty_function_t(array('string' => 'tpl_Not displayed_01'), $this);?>
<?php endif; ?></td>
                    <td class="menu"><a href="javascript:;" onclick="fnChangeAction('./review_edit.php'); fnModeSubmit('','review_id','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['review_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a></td>
                    <td class="menu"><a href="javascript:;" onclick="fnModeSubmit('delete','review_id','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrReview'][$this->_sections['cnt']['index']]['review_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a></td>
                </tr>
            <?php endfor; endif; ?>
        </table>
        <!--検索結果表示テーブル-->
    <?php endif; ?>
</form>
<?php endif; ?>
<!--★★検索結果一覧★★-->
</div>