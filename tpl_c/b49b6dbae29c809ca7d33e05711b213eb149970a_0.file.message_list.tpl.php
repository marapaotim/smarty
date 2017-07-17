<?php
/* Smarty version 3.1.30, created on 2017-07-17 07:02:15
  from "/var/www/guestbook-tim/tpl/message_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c60f785e560_01220347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b49b6dbae29c809ca7d33e05711b213eb149970a' => 
    array (
      0 => '/var/www/guestbook-tim/tpl/message_list.tpl',
      1 => 1500044704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c60f785e560_01220347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-striped table-bordered">
  <thead>
    <tr> 
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>  
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'i', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['i']->value) {
?> 
      <tr>   
        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</td>  
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
</tbody>
</table>  
  <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     <a href="#" onclick="paginate_message(<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
)" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
  <?php }
}
?>
 <?php }
}
