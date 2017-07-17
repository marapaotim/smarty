<?php 
require_once('inc/Message.class.php');

$action = filter_var(trim($_REQUEST['action']), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);

switch($action)
{
   case 'hack':
   		echo "Invalid Site";
       break;
   default:
     if($action != '')
       {
       		echo "tryyy";
       }
       $action = 'main';
}
if($action == 'main')
{
	$smartyConfig = new Config(); 
$smarty = $smartyConfig->dataConfig(); 

$allEntries = new Messages(); 

$allEntry = $allEntries->viewMessages(0);

$smarty->assign('people', $allEntry); 
$smarty->assign('to', $allEntries->viewMessagePagination()); 
$smarty->display('index.tpl');
}

?>
