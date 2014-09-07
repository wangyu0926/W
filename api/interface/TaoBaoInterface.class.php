<?php
/**
 * 淘宝旅行接口
 **/
class TaoBaoInterface {

    private static $_APP_KEY       = '23013211';
    private static $_APP_SECRET    = '79f6934dd30720506413e06c2ab2b29a';
    private static $_SESSION_KEY   = '610081366a574ce1e703f1ebfc698e7932116b5e9a15694776697422';
    private static $_METHOD        = '';
    private static $_API_URL       = 'http://gw.api.taobao.com/router/rest?';

    /**
     * 获取信息
     * @param  string $method
     * @param  array  $appParam
     * @return array  $data
     **/
    public static function get($method, $appParam, $returnArray = true) {
        self::$_METHOD = $method;
        $paramArr = self::_createParamArr($appParam);
        $paramStr = self::_createParamStr($paramArr);
        $url      = self::$_API_URL . $paramStr;
        $json     = Http::get($url);
        $info     = $returnArray ? json_decode($json, true) : $json;
        return $info;
    }

    /**
     * 创建参数数组，是后期创建参数字符串的基础
     **/
    private static function _createParamArr($appParam) {
        $systemParam = array(
            'method'          => self::$_METHOD,
            'timestamp'       => date('Y-m-d H:i:s'),
            'format'          => 'json',
            'app_key'         => self::$_APP_KEY,
            'v'               => '2.0',
            'sign_method'     => 'md5',
            'session'         => self::$_SESSION_KEY,
        );
        return array_merge($systemParam, $appParam);
    }

    /**
     * 创建签名
     **/
    private static function _createSign($paramArr) {
        $sign = self::$_APP_SECRET;
        ksort($paramArr);
        foreach ($paramArr as $key => $val) {
            if ($key != '' && $val != '') {
                $sign .= $key . $val;
            }
        }
        $sign .= self::$_APP_SECRET;
        $sign = strtoupper(md5($sign));
        return $sign;
    }

    /**
     * 创建参数字符串
     **/
    private static function _createParamStr($paramArr) {
        $sign     = self::_createSign($paramArr);
        $paramStr = '';
        foreach ($paramArr as $key => $val) {
            if ($key != '' && $val != '') {
                $paramStr .= $key.'='.urlencode($val) . '&';
            }
        }
        $paramStr .= 'sign=' . $sign;
        return $paramStr;
    }

    /**
     * 获取指定条件的度假线路信息
     * @link http://api.taobao.com/apidoc/api.htm?spm=a219a.7386789.0.0.q6UfhH&path=scopeId:11433-apiId:23290
     **/
    public static function travelSearch($appParam) {
        $content = self::get('taobao.trip.travel.search', $appParam);
        return $content;
    }

    /**
     * 获取度假线路
     * @link http://api.taobao.com/apidoc/api.htm?path=scopeId:11433-apiId:23289
     **/
    public static function travelGet($appParam) {
        $content = self::get('taobao.trip.travel.get', $appParam);
        return $content;
    }

    /**
     * 搜索门票景点列表
     * @link http://api.taobao.com/apidoc/api.htm?spm=a219a.7386789.0.0.m0DJMC&path=scopeId:11394-apiId:23009
     **/
    public static function scenicSearch($appParam) {
        $content = self::get('taobao.trip.scenic.search', $appParam);
        return $content;
    }

}
