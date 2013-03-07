<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tunn1
 * Date: 7/03/13
 * Time: 3:43 PM
 * To change this template use File | Settings | File Templates.
 */
function C($name=null, $value=null) {
    static $_config = array();
    // 无参数时获取所有
    if (empty($name)) {
        if(!empty($value) && $array = cache('c_'.$value)) {
            $_config = array_merge($_config, array_change_key_case($array));
        }
        return $_config;
    }
    // 优先执行设置获取或赋值
    if (is_string($name)) {
        if (!strpos($name, '.')) {
            $name = strtolower($name);
            if (is_null($value))
                return isset($_config[$name]) ? $_config[$name] : null;
            $_config[$name] = $value;
            return;
        }
        // 二维数组设置和获取支持
        $name = explode('.', $name);
        $name[0]   =  strtolower($name[0]);
        if (is_null($value))
            return isset($_config[$name[0]][$name[1]]) ? $_config[$name[0]][$name[1]] : null;
        $_config[$name[0]][$name[1]] = $value;
        return;
    }
    // 批量设置
    if (is_array($name)){
        $_config = array_merge($_config, array_change_key_case($name));
        if(!empty($value)) {// 保存配置值
            cache('c_'.$value,$_config);
        }
        return;
    }
    return null; // 避免非法参数
}


function sysmd5($str,$key='',$type='sha1'){
    $key =  $key ?  $key : C('ADMIN_ACCESS');
    return hash ( $type, $str.$key );
}
function pwdHash($password, $type = 'md5') {
    return hash ( $type, $password );
}

?>