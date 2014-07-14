<?php /* Smarty version Smarty 3.1.4, created on 2011-10-20 23:10:29
         compiled from "d:\www\templates\table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246784ea08e45e12fb4-96778206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a285b984f1216d009bb391c4f8373e025009570' => 
    array (
      0 => 'd:\\www\\templates\\table.tpl',
      1 => 1319144086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246784ea08e45e12fb4-96778206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tableName' => 0,
    'fieldName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ea08e45e6e42',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ea08e45e6e42')) {function content_4ea08e45e6e42($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<<?php ?>?php
class <?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>

{
    // déclaration des propriétés
    public <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
;

}
?<?php ?>>
<?php }} ?>