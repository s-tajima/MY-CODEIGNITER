<?php /* Smarty version Smarty-3.0.7, created on 2011-04-18 13:25:25
         compiled from "application/templates/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7257368264dabbd35174243-79108215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdb4bb86c3f789bb3a24c2b5ccd2e8ce3fe2773' => 
    array (
      0 => 'application/templates/welcome.tpl',
      1 => 1303100722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7257368264dabbd35174243-79108215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<<?php ?>?php echo "public";?<?php ?>>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>CodeIgniterへようこそ</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

<h1>CodeIgniter へようこそ!</h1>

<p>今ご覧のこのページは、CodeIgniter によって動的に生成されました。</p>

<p>このページを編集したい場合は、次の場所にあります:</p>
<code>application/views/welcome_message.php</code>

<p>このページのコントローラは次の場所にあります:</p>
<code>application/controllers/welcome.php</code>

<p>CodeIgniterを使うのが初めてなら、<a href="user_guide_ja/">ユーザガイド</a>を読むことから始めてください。</p>



<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php }} ?>

</body>
</html>
