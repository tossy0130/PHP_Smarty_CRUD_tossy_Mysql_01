<?php
/* Smarty version 4.1.0, created on 2023-08-18 17:19:43
  from 'C:\xampp\htdocs\sample_smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64df299fd41667_21332097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69b77f120d60dce0177e4ae41e6db6afd94a8d4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sample_smarty\\templates\\index.tpl',
      1 => 1692346778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64df299fd41667_21332097 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <h1>Smarty CRUD App - Read</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Nmuber</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['number'];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</body>
</html>
<?php }
}
