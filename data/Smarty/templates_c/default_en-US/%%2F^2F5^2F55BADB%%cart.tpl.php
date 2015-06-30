<?php /* Smarty version 2.6.26, created on 2015-06-30 02:25:12
         compiled from C:%5Cwamp%5Cwww%5CGitHub%5CRise-Up%5Chtml/../data/Smarty/templates/default_en-US/frontparts/bloc/cart.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/default_en-US/frontparts/bloc/cart.tpl', 27, false),array('modifier', 'number_format', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/default_en-US/frontparts/bloc/cart.tpl', 27, false),array('modifier', 'default', 'C:\\wamp\\www\\GitHub\\Rise-Up\\html/../data/Smarty/templates/default_en-US/frontparts/bloc/cart.tpl', 27, false),)), $this); ?>

<div class="block_outer">
    <div id="cart_area">
       <div class="block_body">
            <div class="information">
                <a class="bt03" href="<?php echo ((is_array($_tmp=@CART_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">View cart</a>  Items in cart:<span class="attention"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCartList']['0']['TotalQuantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</span>

            </div>

        </div>
    </div>
</div>