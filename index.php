<?php 
require_once('inc/Message.class.php');

$action = filter_var(trim($_REQUEST['action']), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);

$smartyConfig = new Config(); 
$smarty = $smartyConfig->dataConfig();
 
switch($action)
{
  case 'main': 
  case 'about-us': 
  case 'blog': 
    break;
  default:
    if($action != '')
    {
      echo "You're accessing a wrong website";
    }
    $action = 'main';
}
if($action == 'main')
{

  $allEntries = new Messages(); 
  $allEntry = $allEntries->viewMessages(0);
  $smarty->assign('people', $allEntry); 
  $smarty->assign('to', $allEntries->viewMessagePagination()); 
  $smarty->display('index.tpl');
}
if($action == 'about-us')
{ 
  $smarty->display('about_us.tpl');
}

if($action == 'blog')
{ 
  $smarty->display('blog.tpl');
}