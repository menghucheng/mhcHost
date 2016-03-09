<?php
/**
 * Created by PhpStorm.
 * User: menghucheng
 * Date: 2016/3/9
 * Time: 23:16
 */
class autoload{
    public static function load($className){
        $fileName = sprintf("%s.php",str_replace("\\","/",$className));
        /*
         * include_once 和 require_once的区别是：前者找不到文件会警告，后者会中断
         * 为了安全性和严谨性，最好使用require_once
         * */
        if(is_file($fileName)) require_once $fileName;

    }
}

//将这个方法注册到自动加载的函数里边
spl_autoload_register(['autoload','load']);