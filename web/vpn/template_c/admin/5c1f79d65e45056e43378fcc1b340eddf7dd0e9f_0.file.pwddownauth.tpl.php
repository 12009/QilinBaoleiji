<?php /* Smarty version 3.1.27, created on 2017-10-22 23:35:09
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/template/admin/pwddownauth.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:139029779459ecbaad3923c9_27076045%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c1f79d65e45056e43378fcc1b340eddf7dd0e9f' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/template/admin/pwddownauth.tpl',
      1 => 1508685742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139029779459ecbaad3923c9_27076045',
  'variables' => 
  array (
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ecbaad3c01c2_00057120',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ecbaad3c01c2_00057120')) {
function content_59ecbaad3c01c2_00057120 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '139029779459ecbaad3923c9_27076045';
?>
  <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD align="center" class="tb_t_bg">登录信息 </TD>
  </TR>
  <TR>
    <TD>
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD align="center">
           <form name="f1" method=post enctype="multipart/form-data" action="admin.php?controller=admin_pro&action=dopwddownauth&apppub=<?php echo $_GET['apppub'];?>
" target="hide">
            <TABLE width="100%" bgcolor="#ffffff" border="0" cellspacing="1" 
            cellpadding="5" valign="middle" style="margin-top:50px;">
              <TBODY> 
                 <TR><TD align="center">请输入管理员密码： <br /><br /></TD></TR>
                <TR> <TD align="center"><INPUT name="password" id="password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" autocomplete="off"><br /><br /></TD></TR>
              <TR>
                <TD align="center"><INPUT class="an_02" type="submit" value="登录" name="actions">&nbsp;&nbsp;</TD></TR></TBODY></TABLE>
      </FORM></TD></TR></TBODY></TABLE>
<SCRIPT>
</SCRIPT></TR></TBODY></TABLE>



<?php }
}
?>