<?php
/**
 * 通用接口基类
 * @author Mr.W
 * @date  2014-9-7
 */
class BaseInterface {

    protected static $_MODELS;

    public static function getModel($modelName, $param = '') {
        if(isset(self::$_MODELS[$modelName])) {
            return self::$_MODELS[$modelName];
        }
        $file = ROOT_PATH . 'api/model/' . $modelName . '.class.php';;
        require $file;
        $className = basename($modelName);
        return self::$_MODELS[$modelName] = new $className($param);
    }

}
