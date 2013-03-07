<?php
 /**
 * Example Application

 * @package Example-application
 */

require('./libs/Smarty.class.php');
include_once './configs/config.php';

include_once './libs/common.php';
$smarty = new Smarty;
#$smarty->debugging = true;

$smarty->assign('gamehost',$gamehost);
$smarty->assign('gameport',$gameport);
$smarty->assign('serverId',$serverId);
$smarty->assign('serverName',$serverName);
$smarty->assign('resource',$resource);
$opengameid = sysmd5('tumickey'.'bycdca2012');
$smarty->assign('opengameid',$opengameid);

//$smarty->force_compile = true;

$smarty->caching = false;



$smarty->display('index.tpl');

