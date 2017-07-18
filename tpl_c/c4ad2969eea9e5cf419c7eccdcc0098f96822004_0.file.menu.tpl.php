<?php
/* Smarty version 3.1.30, created on 2017-07-17 09:47:37
  from "/var/www/guestbook-tim/tpl/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c87b9af92c0_33061551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ad2969eea9e5cf419c7eccdcc0098f96822004' => 
    array (
      0 => '/var/www/guestbook-tim/tpl/menu.tpl',
      1 => 1500283778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c87b9af92c0_33061551 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="ajax/message.js"><?php echo '</script'; ?>
>

<style type="text/css"> 
html {
  position: relative;
  min-height: 100%;
}
body { 
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px;
  background-color: #333;
}

.container1 {
  width: auto;
  padding-left: 20px;
}
.container1 .text-muted {
  margin: 20px 0;
}
</style>
 
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Guestbook Project</a>
    </div>
    <center>
    <ul class="nav navbar-nav">
      <li><a href="http://guestbook-tim.linuxserv.space/?action=main">Home</a></li> 
      <li><a href="http://guestbook-tim.linuxserv.space/?action=about-us">About Us</a></li> 
      <li><a href="http://guestbook-tim.linuxserv.space/?action=blog">BLOG</a></li> 
    </ul>
    </center>
  </div>
</nav><?php }
}
