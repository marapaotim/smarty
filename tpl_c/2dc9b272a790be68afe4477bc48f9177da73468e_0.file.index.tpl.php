<?php
/* Smarty version 3.1.30, created on 2017-07-17 09:47:37
  from "/var/www/guestbook-tim/tpl/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c87b9af7830_91375353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc9b272a790be68afe4477bc48f9177da73468e' => 
    array (
      0 => '/var/www/guestbook-tim/tpl/index.tpl',
      1 => 1500044598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:message_list.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_596c87b9af7830_91375353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
<center><h3><u>Welcome to Guestbook Application</u></h3></center>
<hr> 

      <div class="row">
        <div class="col-md-6 col-sm-6">
          <form method="post" id="myform"> 
            <div class="alert alert-success alert-dismissable" style="display:none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Success!</strong> New Data has been added.
            </div>
            <div class="form-group">
              <label for="message">Name</label>
              <input type="text" name="fname" id="fname" class="form-control" placeholder="Full name" required>
            </div>  
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" class="form-control" id="message" placeholder="Message Us" rows="6" required></textarea>
            </div>    
            <input type="submit" id="submit" class="btn btn-success" value="SEND"> 
          </form> 
        </div>
        <div class="col-md-6 col-sm-6">
          <div id="myTable">
            <?php $_smarty_tpl->_subTemplateRender("file:message_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>    
      </div> 
  </div>
  <br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
