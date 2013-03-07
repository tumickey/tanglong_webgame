<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ngoctuct
 * Date: 3/7/13
 * Time: 11:02 PM
 * To change this template use File | Settings | File Templates.
 */

require('./../configs/config.php');
require(SMARTY_DIR . 'Smarty.class.php');

// smarty configuration
class TangLong_Smarty extends Smarty {
    function __construct() {
        parent::__construct();
        $this->setTemplateDir(TEMPLATE_DIR);
        $this->setCompileDir(COMPILE_DIR  );
        $this->setConfigDir(CONFIG_DIR  );
        $this->setCacheDir(CACHE_DIR );
         $this->caching = ISCACHE;
    }
}


