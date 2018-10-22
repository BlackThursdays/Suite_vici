<?php /* Smarty version 2.6.29, created on 2018-10-22 09:14:26
         compiled from include/SugarFields/Fields/Currency/ListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_currency_format', 'include/SugarFields/Fields/Currency/ListView.tpl', 42, false),)), $this); ?>

<?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['amount'],'currency_id' => $this->_tpl_vars['currency_id'],'currency_symbol' => $this->_tpl_vars['currency_symbol']), $this);?>