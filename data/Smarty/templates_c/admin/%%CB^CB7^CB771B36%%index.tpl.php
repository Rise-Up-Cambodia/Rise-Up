<?php /* Smarty version 2.6.26, created on 2015-06-15 01:44:47
         compiled from mail/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'mail/index.tpl', 29, false),array('function', 'html_radios', 'mail/index.tpl', 535, false),array('function', 'html_options', 'mail/index.tpl', 553, false),array('modifier', 'script_escape', 'mail/index.tpl', 56, false),array('modifier', 'h', 'mail/index.tpl', 59, false),array('modifier', 'default', 'mail/index.tpl', 542, false),array('modifier', 'sfDispDBDate', 'mail/index.tpl', 616, false),)), $this); ?>

<script type="text/javascript">
<!--

    function fnDelete(customer_id) {
        if (confirm('<?php echo smarty_function_t(array('string' => "tpl_Do you want to delete member information?_01"), $this);?>
')) {
            document.form1.mode.value = "delete"
            document.form1['edit_customer_id'].value = customer_id;
            document.form1.submit();
            return false;
        }
    }

    function fnEdit(customer_id) {
        document.form1.action = './edit.php';
        document.form1.mode.value = "edit_search"
        document.form1['edit_customer_id'].value = customer_id;
        document.form1.search_pageno.value = 1;
        document.form1.submit();
        return false;
    }

    function fnReSendMail(customer_id) {
        if (confirm('<?php echo smarty_function_t(array('string' => "tpl_Do you wish to receive a temporary registration e-mail again?_01"), $this);?>
')) {
            document.form1.mode.value = "resend_mail"
            document.form1['edit_customer_id'].value = customer_id;
            document.form1.submit();
            return false;
        }
    }
	
	$(function(){
		var dateFormat = $.datepicker.regional['<?php echo ((is_array($_tmp=@LANG_CODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'].dateFormat;

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        var search_b_start_year  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_b_start_month = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_b_start_day   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_b_start_ymd = $.datepicker.formatDate(dateFormat, new Date(search_b_start_year, search_b_start_month - 1, search_b_start_day));
        $("#datepickercustomersearch_b_start").val(search_b_start_ymd);
        <?php endif; ?>
        
		$( "#datepickercustomersearch_b_start" ).datepicker({
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
            setDatecustomersearch_b_start(year + '/' + month + '/' + day);
		},
		showButtonPanel: true,
		beforeShow: showAdditionalButtoncustomersearch_b_start,       
		onChangeMonthYear: showAdditionalButtoncustomersearch_b_start
		});
		
		$("#datepickercustomersearch_b_start").change( function() {
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
            setDatecustomersearch_b_start(year + '/' + month + '/' + day);
		});

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        var search_b_end_year  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_b_end_month = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_b_end_day   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_b_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_b_end_ymd = $.datepicker.formatDate(dateFormat, new Date(search_b_end_year, search_b_end_month - 1, search_b_end_day));
        $("#datepickercustomersearch_b_end").val(search_b_end_ymd);
        <?php endif; ?>

		$( "#datepickercustomersearch_b_end" ).datepicker({
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
            setDatecustomersearch_b_end(year + '/' + month + '/' + day);
		},
		showButtonPanel: true,
		beforeShow: showAdditionalButtoncustomersearch_b_end,       
		onChangeMonthYear: showAdditionalButtoncustomersearch_b_end
		});
		
		$("#datepickercustomersearch_b_end").change( function() {
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
            setDatecustomersearch_b_end(year + '/' + month + '/' + day);
		});

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        var search_start_year  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_start_month = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_start_day   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_start_day_ymd = $.datepicker.formatDate(dateFormat, new Date(search_start_year, search_start_month - 1, search_start_day));
        $("#datepickercustomersearch_start").val(search_start_day_ymd);
        <?php endif; ?>
        
		$( "#datepickercustomersearch_start" ).datepicker({
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
            setDatecustomersearch_start(year + '/' + month + '/' + day);
		},
		showButtonPanel: true,
		beforeShow: showAdditionalButtoncustomersearch_start,       
		onChangeMonthYear: showAdditionalButtoncustomersearch_start
		});
		
		$("#datepickercustomersearch_start").change( function() {
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
            setDatecustomersearch_start(year + '/' + month + '/' + day);
		});

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        var search_end_year  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_end_month = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_end_day   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_end_ymd = $.datepicker.formatDate(dateFormat, new Date(search_end_year, search_end_month - 1, search_end_day));
        $("#datepickercustomersearch_end").val(search_end_ymd);
        <?php endif; ?>
        
		$( "#datepickercustomersearch_end" ).datepicker({
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
            setDatecustomersearch_end(year + '/' + month + '/' + day);
		},
		showButtonPanel: true,
		beforeShow: showAdditionalButtoncustomersearch_end,       
		onChangeMonthYear: showAdditionalButtoncustomersearch_end
		});
		
		$("#datepickercustomersearch_end").change( function() {
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
            setDatecustomersearch_end(year + '/' + month + '/' + day);
		});

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        var search_buy_start_year  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_buy_start_month = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_buy_start_day   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_start_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_buy_start_ymd = $.datepicker.formatDate(dateFormat, new Date(search_buy_start_year, search_buy_start_month - 1, search_buy_start_day));
        $("#datepickercustomersearch_buy_start").val(search_buy_start_ymd);
        <?php endif; ?>
        
		$( "#datepickercustomersearch_buy_start" ).datepicker({
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
            setDatecustomersearch_buy_start(year + '/' + month + '/' + day);
		},
		showButtonPanel: true,
		beforeShow: showAdditionalButtoncustomersearch_buy_start,       
		onChangeMonthYear: showAdditionalButtoncustomersearch_buy_start
		});
		
		$("#datepickercustomersearch_buy_start").change( function() {
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
            setDatecustomersearch_buy_start(year + '/' + month + '/' + day);
		});

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
        var search_buy_end_year  = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_year']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_buy_end_month = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_month']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_buy_end_day   = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_buy_end_day']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
        var search_buy_end_ymd = $.datepicker.formatDate(dateFormat, new Date(search_buy_end_year, search_buy_end_month - 1, search_buy_end_day));
        $("#datepickercustomersearch_buy_end").val(search_buy_end_ymd);
        <?php endif; ?>

		$( "#datepickercustomersearch_buy_end" ).datepicker({
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
            setDatecustomersearch_buy_end(year + '/' + month + '/' + day);
		},
		showButtonPanel: true,
		beforeShow: showAdditionalButtoncustomersearch_buy_end,       
		onChangeMonthYear: showAdditionalButtoncustomersearch_buy_end
		});
		
		$("#datepickercustomersearch_buy_end").change( function() {
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
            setDatecustomersearch_buy_end(year + '/' + month + '/' + day);
		});
		
	});
	
	var btn = $('<button class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" type="button">Clear</button>');
	
	var showAdditionalButtoncustomersearch_b_start = function (input) {
		setTimeout(function () {
			var buttonPane = $(input)
					 .datepicker("widget")
					 .find(".ui-datepicker-buttonpane");
			btn
					.unbind("click")
					.bind("click", function () {
						$.datepicker._clearDate(input);
						$("*[name=search_b_start_year]").val("");
						$("*[name=search_b_start_month]").val("");
						$("*[name=search_b_start_day]").val("");
					});
			btn.appendTo(buttonPane);
		}, 1);
	};
	
	var showAdditionalButtoncustomersearch_b_end = function (input) {
		setTimeout(function () {
			var buttonPane = $(input)
					 .datepicker("widget")
					 .find(".ui-datepicker-buttonpane");
			btn
					.unbind("click")
					.bind("click", function () {
						$.datepicker._clearDate(input);
						$("*[name=search_b_end_year]").val("");
						$("*[name=search_b_end_month]").val("");
						$("*[name=search_b_end_day]").val("");
					});
			btn.appendTo(buttonPane);
		}, 1);
	};
	
	var showAdditionalButtoncustomersearch_start = function (input) {
		setTimeout(function () {
			var buttonPane = $(input)
					 .datepicker("widget")
					 .find(".ui-datepicker-buttonpane");
			btn
					.unbind("click")
					.bind("click", function () {
						$.datepicker._clearDate(input);
						$("*[name=search_start_year]").val("");
						$("*[name=search_start_month]").val("");
						$("*[name=search_start_day]").val("");
					});
			btn.appendTo(buttonPane);
		}, 1);
	};
	
	var showAdditionalButtoncustomersearch_end = function (input) {
		setTimeout(function () {
			var buttonPane = $(input)
					 .datepicker("widget")
					 .find(".ui-datepicker-buttonpane");
			btn
					.unbind("click")
					.bind("click", function () {
						$.datepicker._clearDate(input);
						$("*[name=search_end_year]").val("");
						$("*[name=search_end_month]").val("");
						$("*[name=search_end_day]").val("");
					});
			btn.appendTo(buttonPane);
		}, 1);
	};
	
	var showAdditionalButtoncustomersearch_buy_start = function (input) {
		setTimeout(function () {
			var buttonPane = $(input)
					 .datepicker("widget")
					 .find(".ui-datepicker-buttonpane");
			btn
					.unbind("click")
					.bind("click", function () {
						$.datepicker._clearDate(input);
						$("*[name=search_buy_start_year]").val("");
						$("*[name=search_buy_start_month]").val("");
						$("*[name=search_buy_start_day]").val("");
					});
			btn.appendTo(buttonPane);
		}, 1);
	};
	
	var showAdditionalButtoncustomersearch_buy_end = function (input) {
		setTimeout(function () {
			var buttonPane = $(input)
					 .datepicker("widget")
					 .find(".ui-datepicker-buttonpane");
			btn
					.unbind("click")
					.bind("click", function () {
						$.datepicker._clearDate(input);
						$("*[name=search_buy_end_year]").val("");
						$("*[name=search_buy_end_month]").val("");
						$("*[name=search_buy_end_day]").val("");
					});
			btn.appendTo(buttonPane);
		}, 1);
	};
	
	function setDatecustomersearch_b_start(dateText){
	var dates = dateText.split('/');
	$("*[name=search_b_start_year]").val(dates[0]);
	$("*[name=search_b_start_month]").val(dates[1]);
	$("*[name=search_b_start_day]").val(dates[2]);
	}
	
	function setDatecustomersearch_b_end(dateText){
	var dates = dateText.split('/');
	$("*[name=search_b_end_year]").val(dates[0]);
	$("*[name=search_b_end_month]").val(dates[1]);
	$("*[name=search_b_end_day]").val(dates[2]);
	}
	
	function setDatecustomersearch_start(dateText){
	var dates = dateText.split('/');
	$("*[name=search_start_year]").val(dates[0]);
	$("*[name=search_start_month]").val(dates[1]);
	$("*[name=search_start_day]").val(dates[2]);
	}
	
	function setDatecustomersearch_end(dateText){
	var dates = dateText.split('/');
	$("*[name=search_end_year]").val(dates[0]);
	$("*[name=search_end_month]").val(dates[1]);
	$("*[name=search_end_day]").val(dates[2]);
	}
	
	function setDatecustomersearch_buy_start(dateText){
	var dates = dateText.split('/');
	$("*[name=search_buy_start_year]").val(dates[0]);
	$("*[name=search_buy_start_month]").val(dates[1]);
	$("*[name=search_buy_start_day]").val(dates[2]);
	}
	
	function setDatecustomersearch_buy_end(dateText){
	var dates = dateText.split('/');
	$("*[name=search_buy_end_year]").val(dates[0]);
	$("*[name=search_buy_end_month]").val(dates[1]);
	$("*[name=search_buy_end_day]").val(dates[2]);
	}

//-->
</script>

<div id="mail" class="contents-main">
<form name="search_form" id="search_form" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="search" />
    <h2><?php echo smarty_function_t(array('string' => 'tpl_Delivery search conditions_01'), $this);?>
</h2>

        <table>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_ADMIN_REALDIR)."/adminparts/form_customer_search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Delivery format_01'), $this);?>
</th>
            <td colspan="3">
                <?php $this->assign('key', 'search_htmlmail'); ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br /><?php endif; ?>
                <?php echo smarty_function_html_radios(array('name' => ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'options' => ((is_array($_tmp=$this->_tpl_vars['arrHtmlmail'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => "&nbsp;",'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </td>
        </tr>
        <tr>
            <th><?php echo smarty_function_t(array('string' => "tpl_Type of delivery e-mail address_01"), $this);?>
</th>
            <td colspan="3">
                <?php $this->assign('key', 'search_mail_type'); ?>
                <?php echo smarty_function_html_radios(array('name' => ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'options' => ((is_array($_tmp=$this->_tpl_vars['arrMailType'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => "<br />",'selected' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1))), $this);?>

            </td>
        </tr>
    </table>
    
    <div class="btn">
        <p class="page_rows"><?php echo smarty_function_t(array('string' => 'tpl_Results displayed_01'), $this);?>

            <?php $this->assign('key', 'search_page_max'); ?>
            <?php echo smarty_function_t(array('string' => 'record_prefix'), $this);?>

            <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPageRows'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </select> 
            <?php echo smarty_function_t(array('string' => 'record_suffix'), $this);?>

        </p>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('search_form', 'search', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Search using above criteria_01'), $this);?>
</span></a></li>
            </ul>
        </div>
    </div>
</form>


<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) == 0 && ( ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search' || ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delete' || ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'back' )): ?>

<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="" />
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_item']):
?>
        <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
[]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['c_item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    <?php endforeach; endif; unset($_from); ?>
<?php else: ?>
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
        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
            <a class="btn-normal" href="javascript:;" onclick="document.form1['mode'].value='input'; document.form1.submit(); return false;"><span><?php echo smarty_function_t(array('string' => 'tpl_Set delivery contents_01'), $this);?>
</span></a>
        <?php endif; ?>
    </div>
    <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrResults'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_pager'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <!--検索結果表示テーブル-->
    <table class="list">
    <col width="10%" />
    <col width="25%" />
    <col width="35%" />
    <col width="15%" />
    <col width="15%" />
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Member ID_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Name_03'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => "tpl_E-mail address_01"), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Desired delivery_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => "tpl_Registration/update date_01"), $this);?>
</th>
        </tr>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrResults'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td class="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResults'][$this->_sections['i']['index']]['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrResults'][$this->_sections['i']['index']]['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrResults'][$this->_sections['i']['index']]['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrResults'][$this->_sections['i']['index']]['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <?php $this->assign('key', ($this->_tpl_vars['arrResults'][$this->_sections['i']['index']]['mailmaga_flg'])); ?>
            <td class="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrHtmlmail'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            <td class="center"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrResults'][$this->_sections['i']['index']]['update_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)); ?>
</td>
        </tr>
        <?php endfor; endif; ?>
    </table>
    <!--検索結果表示テーブル-->
    <?php endif; ?>

</form>

<?php endif; ?>
</div>