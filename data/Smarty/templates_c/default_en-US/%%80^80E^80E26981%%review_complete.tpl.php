<?php /* Smarty version 2.6.26, created on 2015-06-26 07:32:43
         compiled from products/review_complete.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."popup_header.tpl", 'smarty_include_vars' => array('subtitle' => "Form for customer's opinion (completion page)")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="window_area">
    <h2 class="title">Add a comment</h2>
    <div id="completebox">
        <p class="message">Comment has been sent. Thank you.</p>
        <p>Please wait for the comment to be reviewed by our staff.<br />If approved, it will appear on our site.</p>
    </div>
    <div class="btn_area">
        <ul>
            <li><a class="bt04" href="javascript:window.close()">Close</a></li>
        </ul>
    </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."popup_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>