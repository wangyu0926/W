<?php
/**
 * 新浪天气接口
 **/
class SinaWeatherInterface {

    private static $_URL = 'http://php.weather.sina.com.cn/xml.php?password=DJOYnieT8234jlsK';

    /**
     * 获取某个城市的某天天气情况
     * @param  string    $city 中文城市名
     * @param  int|array $day 0,1,2···表示当天，明天，后天···
     * @return array     $weather
     **/
    public static function get($city, $days = 0) {
        if (is_numeric($days)) {
            $weather = self::_getOneDay($city, $days);
        } else if (is_array($days)) {
            foreach ($days as $day) {
                $weather[] = self::_getOneDay($city, $day);
            }
        }
        return $weather;
    }

    /**
     * 获取某个城市的某天天气情况
     * @param  string  $city 中文城市名
     * @param  int     $day 0,1,2···表示当天，明天，后天···
     * @return array   $weather
     **/
    private static function _getOneDay($city, $day = 0) {
        if (!$city || !is_numeric($day)) {
            return false;
        }
        $city     = mb_convert_encoding($city, 'gbk', 'utf-8');
        $url      = self::$_URL . '&city=' . urlencode($city) . '&day=' . $day;
        $xml      = Http::get($url);
        $xmlNode  = simplexml_load_string($xml);
        $weather  = Helper::xml2Array($xmlNode);
        return  $weather['Profiles']['Weather'];
    }

    /**
     * 解析类似2014-8-30的形式为兼容接口的参数
     * @param  string $date
     * @return int
     **/
    private static function _parseDate($date) {
        $datetime1 = date_create(Date('Y-m-d'));
        $datetime2 = date_create($date);
        $interval  = date_diff($datetime1, $datetime2);
        return $interval->format('%a');
    }

}
