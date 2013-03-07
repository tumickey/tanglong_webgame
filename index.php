<?php
 /**
 * Example Application

 * @package Example-application
 */

require('./libs/Smarty.class.php');
include_once './configs/config.php';
include_once './libs/tanglong_setup.php';

$tanglong = new TangLong;
// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'play_game';

switch($_action) {

    case 'play_game':
        $username = 'tumickey';
        $tanglong->Play_Game($gamehost,$gameport,$serverId,$serverName,$resource,$username);
        break;
    case 'index':
    default:
        $tanglong->Index();
        break;
}