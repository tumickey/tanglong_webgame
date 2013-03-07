<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ngoctuct
 * Date: 3/7/13
 * Time: 11:02 PM
 * To change this template use File | Settings | File Templates.
 */
include_once 'common.php';

class TangLong {

    // database object
    var $pdo = null;
    // smarty template object
    var $tpl = null;
    // error messages
    var $error = null;

    /**
    * class constructor
    */
    function __construct() {



        // instantiate the template object
        $this->tpl = new TangLong_Smarty;

    }
    function Index() {

        $this->tpl->display('guestbook.tpl');

    }
    function Play_Game($gamehost,$gameport,$serverId,$serverName,$resource,$username) {

        $this->tpl->assign('gamehost',$gamehost);
        $this->tpl->assign('gameport',$gameport);
        $this->tpl->assign('serverId',$serverId);
        $this->tpl->assign('serverName',$serverName);
        $this->tpl->assign('resource',$resource);
        $opengameid = sysmd5($username.'bycdca2012');
        $this->tpl->assign('opengameid',$opengameid);

        $this->tpl->display('play_game.tpl');

    }






}