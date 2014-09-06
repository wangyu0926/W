<?php
class TravelSearchInterface {

    public static function getRows($fields = '*', $param = array()) {
        $model   = new TravelSearchModel();
        $where   = isset($param['where'])   ? $param['where']   : array();
        $page    = isset($param['page'])    ? $param['page']    : 1;
        $size    = isset($param['size'])    ? $param['size']    : 10;
        $orderBy = isset($param['orderBy']) ? $param['orderBy'] : '';
        $rows    = $model->getRows($fields, $where, $page, $size, $orderBy, true);
        return $rows;
    }

    public static function add($param) {
        $model = new TravelSearchModel();
        $info  = self::formatParam($param);
        $info['create_time'] = $info['update_time'] = time();
        return $model->add($info);
    }

    public static function getResultByMonth($month) {
        $param = array(
            'where' => array(
                "start_months like '%{$month}%'"
            ),
        );
        $result = self::getRows('*', $param);
        return $result;
    }


    /**
     * 1日游,2日游 => 1,2
     **/
    private static function _onlyNumber($str) {
        $arr = explode(',', $str);
        foreach ($arr as $value) {
            $tempArr[] = (int) $value;
        }
        return implode(',', $tempArr);
    }

    /**
     * 格式化城市信息
     **/
    private static function _formatCity($str) {
        $arr = explode(';', $str);
        foreach ($arr as $value) {
            $tempArr[] = substr(strstr($value, ':'), 1);
        }
        return implode(',', $tempArr);
    }

    /**
     * 获取格式化后的结果集
     **/
    public static function getFormatResult($result) {
        $infoArr = $result['trip_travel_search_response']
                          ['travel_search_result']
                          ['travel_path_items_list']
                          ['travel_path_items'];
        foreach ($infoArr as $info) {
            $info['pc_list_url'] = $result['trip_travel_search_response']
                                          ['travel_search_result']
                                          ['pc_list_url'];
            $tempArr[] = self::formatParam($info);
        }
        return $tempArr;
    }

    /**
     * 格式化参数
     **/
    public static function formatParam($param) {
        $info['pc_list_url'] = isset($param['pc_list_url']) ? $param['pc_list_url'] : '';
        $info['category_id'] = isset($param['category_id']) ? $param['category_id'] : '';
        $info['come_traffic'] = isset($param['come_traffic']) ? $param['come_traffic'] : '';
        $info['go_traffic'] = isset($param['go_traffic']) ? $param['go_traffic'] : '';
        $info['from_city'] = isset($param['from_city']) ? self::_formatCity($param['from_city']) : '';
        $info['dest_city'] = isset($param['dest_city']) ? self::_formatCity($param['dest_city']) : '';
        $info['fee_include'] = isset($param['fee_include']) ? $param['fee_include'] : '';
        $info['fee_not_include'] = isset($param['fee_not_include']) ? $param['fee_not_include'] : '';
        $info['item_dsr'] = isset($param['item_dsr']) ? $param['item_dsr'] : '';
        $info['item_id'] = isset($param['item_id']) ? $param['item_id'] : '';
        $info['item_price'] = isset($param['item_price']) ? $param['item_price'] : '';
        $info['item_quantity'] = isset($param['item_quantity']) ? $param['item_quantity'] : '';
        $info['item_title'] = isset($param['item_title']) ? $param['item_title'] : '';
        $info['nick'] = isset($param['nick']) ? $param['nick'] : '';
        $info['order_info'] = isset($param['order_info']) ? $param['order_info'] : '';
        $info['outer_id'] = isset($param['outer_id']) ? $param['outer_id'] : '';
        $info['pc_detail_url'] = isset($param['pc_detail_url']) ? $param['pc_detail_url'] : '';
        $info['pic_url'] = isset($param['pic_url']) ? $param['pic_url'] : '';
        $info['seller_id'] = isset($param['seller_id']) ? $param['seller_id'] : '';
        $info['start_months'] = isset($param['start_months']) ? self::_onlyNumber($param['start_months']) : '';
        $info['travel_days'] = isset($param['travel_days']) ? self::_onlyNumber($param['travel_days']) : '';
        $info['trip_desc'] = isset($param['trip_desc']) ? $param['trip_desc'] : '';
        return $info;
    }

}
