<?php /* Smarty version Smarty-3.1.17, created on Y
         compiled from "application\views\inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211905472b1c6bdb731-13194146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd976a3d5c26024bd9bc4d5ac4d64c6b56ab7c2f2' => 
    array (
      0 => 'application\\views\\inicio.tpl',
      1 => 1416803087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211905472b1c6bdb731-13194146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5472b1c6da4829_02700430',
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472b1c6da4829_02700430')) {function content_5472b1c6da4829_02700430($_smarty_tpl) {?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>
<br/>
    <?php if ($_smarty_tpl->tpl_vars['nombre']->value=="Gustavo") {?>
  		<h1>Gust!!!</h1>
    <?php }?>
</body>
</html>
<?php }} ?>
