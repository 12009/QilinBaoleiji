<?php /* Smarty version 3.1.27, created on 2017-11-19 21:37:00
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/template/admin/appicon_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3952440205a1188fce8aee1_36461339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a8e7886eff699dde7eed3741426002e933e6b3' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/template/admin/appicon_edit.tpl',
      1 => 1474793216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3952440205a1188fce8aee1_36461339',
  'variables' => 
  array (
    'title' => 0,
    'template_root' => 0,
    'IE' => 0,
    'Radmin' => 0,
    'Xbrowser' => 0,
    'PLSQL' => 0,
    'p' => 0,
    'trnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a1188fcf07941_70940174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a1188fcf07941_70940174')) {
function content_5a1188fcf07941_70940174 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3952440205a1188fce8aee1_36461339';
?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/all_purpose_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a {
    color: #003499;
    text-decoration: none;
} 
a:hover {
    color: #000000;
    text-decoration: underline;
}
</style>
</head>
 <SCRIPT language=javascript src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/selectdate.js"></SCRIPT>
 <SCRIPT type=text/javascript>
var siteUrl = "<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/date";
function setappaddress(value){
	if(value=='3'){
		document.getElementById('path').value='<?php echo $_smarty_tpl->tpl_vars['IE']->value;?>
';
		document.getElementById('path').readonly=true;
	}else if(value=='11'){
		document.getElementById('path').value='<?php echo $_smarty_tpl->tpl_vars['Radmin']->value;?>
';
		document.getElementById('path').readonly=true;
	}else if(value=='0'){
		document.getElementById('path').value='<?php echo $_smarty_tpl->tpl_vars['Xbrowser']->value;?>
';
		document.getElementById('path').readonly=true;
	}else if(value=='20'){
		document.getElementById('path').value='<?php echo $_smarty_tpl->tpl_vars['PLSQL']->value;?>
';
		document.getElementById('path').readonly=true;
	}
}
</SCRIPT>
<body>


	<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
    <li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=appserver_list">应用发布</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
	<?php if ($_SESSION['ADMIN_LEVEL'] != 3) {?>
	<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=appprogram_list">应用程序</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_a"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=appicon_list">应用图标</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an3.jpg" align="absmiddle"/></li>
	<?php }?>
</ul><span class="back_img"><A href="admin.php?controller=admin_config&action=appicon_list&back=1"><IMG src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/back1.png" 
      width="80" height="30" border="0"></A></span>
</div></td></tr>
  <tr>
	<td class=""><table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td align="center">
    <form name="f1" method=post action="admin.php?controller=admin_config&action=appicon_save&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" enctype="multipart/form-data">
	<table border=0 width=100% cellpadding=5 cellspacing=0 bgcolor="#FFFFFF" valign=top class="BBtable">
		<tr><th colspan="3" class="list_bg"></th></tr>
	<?php $_smarty_tpl->tpl_vars["trnumber"] = new Smarty_Variable(0, null, 0);?>
					<tr <?php if ($_smarty_tpl->tpl_vars['trnumber']->value%2 == 0) {?>bgcolor="f7f7f7"<?php }?>>
		<td width="33%" align=right>应用名称</td>
		<td width="67%"><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
" /></td>
	</tr>
	
	   <?php $_smarty_tpl->tpl_vars["trnumber"] = new Smarty_Variable($_smarty_tpl->tpl_vars['trnumber']->value+1, null, 0);?>
					<tr <?php if ($_smarty_tpl->tpl_vars['trnumber']->value%2 == 0) {?>bgcolor="f7f7f7"<?php }?>>
		<td width="33%" align=right>图标</td>
		<td width="67%"><?php if ($_smarty_tpl->tpl_vars['p']->value['path']) {?><img src="upload/<?php echo $_smarty_tpl->tpl_vars['p']->value['path'];?>
" /><br><?php }?><input name="path" type="file" ></td>
	  </tr>
	 	 
	<?php $_smarty_tpl->tpl_vars["trnumber"] = new Smarty_Variable($_smarty_tpl->tpl_vars['trnumber']->value+1, null, 0);?>
					<tr <?php if ($_smarty_tpl->tpl_vars['trnumber']->value%2 == 0) {?>bgcolor="f7f7f7"<?php }?>>
					<td></td><td><input type="hidden" name="ac" value="new" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" />
<input type=submit  value="保存修改" class="an_02"></td></tr>
	</table>
<br>
</form>
	</td>
  </tr>
</table>
</body>
<iframe name="hide" height="0" frameborder="0" scrolling="no"></iframe>
</html>



<?php }
}
?>