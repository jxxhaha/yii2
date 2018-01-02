<?php
/* Smarty version 3.1.29, created on 2017-10-20 15:26:27
  from "D:\phpStudy\WWW\smarty1\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59e9a52338e9a6_98250466',
  'file_dependency' => 
  array (
    '80f28d3f039917bbfb520c30bab3e66457b86482' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\templates\\index.html',
      1 => 1508484385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e9a52338e9a6_98250466 ($_smarty_tpl) {
?>
<!-- foreach循环一维关联数组 -->
<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
echo $_smarty_tpl->tpl_vars['k']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
<br/>
<!-- 其中还包括一个foreachelse语句,他是没进来foreach才会进来这个 -->
<?php
$_from = $_smarty_tpl->tpl_vars['arr1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
echo $_smarty_tpl->tpl_vars['k']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
<!-- <?php echo '<script'; ?>
 type="text/javascript">
	alert("数组是空的,或者你忘了分配")
<?php echo '</script'; ?>
> -->
<?php
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>
<br/>
<!-- foreach循环遍历索引数组另一种写法(里面有参数from[指的是从那个数组来的，貌似于长度] item指的是索引) key指的是值-->
<?php
$_from = $_smarty_tpl->tpl_vars['arr2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
echo $_smarty_tpl->tpl_vars['k']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
if ($__foreach_v_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_2_saved_key;
}
?>
<br/>
<!-- foreach循环遍历关联数组另一种写法,和素引数组写法一样 -->
<?php
$_from = $_smarty_tpl->tpl_vars['arr3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_3_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_3_saved_local_item = $_smarty_tpl->tpl_vars['v'];
echo $_smarty_tpl->tpl_vars['k']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_local_item;
}
if ($__foreach_v_3_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_item;
}
if ($__foreach_v_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_3_saved_key;
}
?>
<hr/>
<!-- section块函数便利索引数组 参数loop从哪来的数组 name指的是循环的数组 start从第几个索引数组开始。可选,偏向于索引数组，不偏向于关联数组
下面是索引数组，name必须有，因为x就像是0 1 2关联数组有自己的名字-->
<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr2']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
echo $_smarty_tpl->tpl_vars['arr2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)];?>

<?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
<br/>
<!-- section块函数便利关联数组(不用name属性)只需要数组点属性
 但是name属性必须有-->
<?php
$__section_f_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_f']) ? $_smarty_tpl->tpl_vars['__smarty_section_f'] : false;
$__section_f_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr3']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_f_1_total = $__section_f_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_f'] = new Smarty_Variable(array());
if ($__section_f_1_total != 0) {
for ($__section_f_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_f']->value['index'] = 0; $__section_f_1_iteration <= $__section_f_1_total; $__section_f_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_f']->value['index']++){
echo $_smarty_tpl->tpl_vars['arr3']->value['name'];?>
--<?php echo $_smarty_tpl->tpl_vars['arr3']->value['age'];?>

<?php
}
}
if ($__section_f_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_f'] = $__section_f_1_saved;
}
?>
<hr/>
<!-- foreach二维数组的遍历 两种方法-->

<?php
$_from = $_smarty_tpl->tpl_vars['arr4']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_4_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_4_saved_local_item = $_smarty_tpl->tpl_vars['row'];
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_5_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_5_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_5_saved_local_item = $_smarty_tpl->tpl_vars['v'];
echo $_smarty_tpl->tpl_vars['k']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_5_saved_local_item;
}
if ($__foreach_v_5_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_5_saved_item;
}
if ($__foreach_v_5_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_5_saved_key;
}
?>
<br/>
<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_local_item;
}
if ($__foreach_row_4_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_item;
}
?>
<br/>

<?php
$_from = $_smarty_tpl->tpl_vars['car']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_6_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$__foreach_row_6_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_6_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
<!-- 此时第一次循环已经到二维数组(关联数组)的一维数组下,也就是一维数组的方法 可以点或者方括号-->
姓名是:<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

&nbsp;&nbsp;&nbsp;
类型是:<?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>

&nbsp;&nbsp;&nbsp;
价格是:<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>

<br/>
<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_6_saved_local_item;
}
if ($__foreach_row_6_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_6_saved_item;
}
if ($__foreach_row_6_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_row_6_saved_key;
}
?>
<hr/>

<?php
$__section_row_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_row']) ? $_smarty_tpl->tpl_vars['__smarty_section_row'] : false;
$__section_row_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['person']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_2_total = $__section_row_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_2_total != 0) {
for ($__section_row_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_2_iteration <= $__section_row_2_total; $__section_row_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
?>
<!-- 这里是二维数组中的一维数组 根据索引找的也就是name 第二个点或者方括号一维数组的关联索引-->
<?php echo $_smarty_tpl->tpl_vars['person']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['name'];?>

<?php echo $_smarty_tpl->tpl_vars['person']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['sex'];?>

<?php echo $_smarty_tpl->tpl_vars['person']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['age'];?>

<br/>
<?php
}
}
if ($__section_row_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_row'] = $__section_row_2_saved;
}
?>

<?php }
}
