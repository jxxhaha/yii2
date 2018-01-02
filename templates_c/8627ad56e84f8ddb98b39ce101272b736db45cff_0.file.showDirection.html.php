<?php
/* Smarty version 3.1.29, created on 2017-10-22 20:28:48
  from "D:\phpStudy\WWW\smarty1\templates\showDirection.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ec8f0042d256_23041623',
  'file_dependency' => 
  array (
    '8627ad56e84f8ddb98b39ce101272b736db45cff' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\templates\\showDirection.html',
      1 => 1508675091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ec8f0042d256_23041623 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body bgcolor="pink">
<!--页面写table -->
	<style type="text/css">
		table{
			text-align: center;
			border-collapse:collapse;
			width:530px;
			height:250px;
			margin-top:50px;  
		}
	</style>
<table border="1" align="center">
<tr>
 <th>编号</th>	
 <th>姓名</th>
 <th>技术方向</th>
 <th>编辑</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['Res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
  <tr>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
</td>
  <td>
 <input type="text" name="txtname<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
" readonly="readonly">
  </td>
<td>
 <input type="text" name="txtdirect<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['directname'];?>
" readonly="readonly">	
</td>
<td>
<a id="update_a" class="update">
<font color="purple">修改</font>	
</a>	
</td>
 </tr>
<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>

</table>

</body>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	//写jquery文本
$(function(){
  //获取修改的字


})
<?php echo '</script'; ?>
>
</html><?php }
}
