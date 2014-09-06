<?php

require ROOT_PATH . 'api/interface/TaoBaoInterface.class.php';
require ROOT_PATH . 'api/interface/travelSearchInterface.class.php';
require ROOT_PATH . 'api/interface/SinaWeatherInterface.class.php';

class IndexPage extends Controller {

    private $_totalPage = 20;

    public function indexAction() {
        $this->render('index.php', array(
            'baseUrl'  => 'http://www.web.com/',
            'minsuUrl' => 'http://www.web.com/minsu.html',
        ));
    }

    public function minsuAction() {
        $this->render('minsu.php', array(
            'baseUrl' => 'http://www.web.com/',
            'tuijian' => array(
                'title' => 'xxoo',
                'image' => 'xxoo',
                'date'  => date('Y-m-d'),
                'view'  => 100,
            ),
        ));
    }

    public function detailAction() {
        $travel = $this->getTravelAction();
        $this->render('detail.php', array(
            'baseUrl' => 'http://www.web.com/',
            'travel'  => $travel,
        ));
    }

    public function getTravelAction() {
        $fromCity           = Request::getGet('from_city', '杭州');
        $destCity           = Request::getGet('dest_city', '丽江');
        $travelMonths       = Request::getGet('travel_months', 10);
        $travelDays         = Request::getGet('travel_days');
        $travelCategory     = Request::getGet('travel_category');
        $minPrice           = Request::getGet('min_price');
        $maxPrice           = Request::getGet('max_price');
        $result = TaoBaoInterface::travelSearch(
            array(
                'from_city'         => $fromCity,
                'dest_city'         => $destCity,
                'travel_months'     => $travelMonths,
                'travel_days'       => $travelDays,
                'travel_category'   => $travelCategory,
                'min_price'         => $minPrice,
                'max_price'         => $maxPrice,
                'page_size'         => 4,
                'current_page'      => 4,
            )
        );
        if (!empty($result['trip_travel_search_response'])) {
            $result = TravelSearchInterface::getFormatResult($result);
            return $result;
        } else if (isset($result['trip_travel_search_response'])) {
            return 'null';
        } else {
            return $result;
        }
    }

    public function getScenicAction() {
        $keywords           = Request::getGet('keywords');
        $destCity           = Request::getGet('dest_city');
        $travelMonths       = Request::getGet('travel_months');
        $travelDays         = Request::getGet('travel_days');
        $travelCategory     = Request::getGet('travel_category');
        $minPrice           = Request::getGet('min_price');
        $maxPrice           = Request::getGet('max_price');
        $result = TaoBaoInterface::scenicSearch(
            array(
                'keywords'          => $keywords,
                'dest_city'         => $destCity,
                'travel_months'     => $travelMonths,
                'travel_days'       => $travelDays,
                'travel_category'   => $travelCategory,
                'min_price'         => $minPrice,
                'max_price'         => $maxPrice,
            )
        );
        if (!empty($result['trip_travel_search_response'])) {
            $result = TravelSearchInterface::getFormatResult($result);
            print_r($result);
        } else if (isset($result['trip_travel_search_response'])) {
            print_r('null');
        } else {
            print_r($result);
        }
    }
    /**
     * 根据GET参数批量插入
     **/
    public function createDataAction() {
        set_time_limit(0);
        ini_set('memory_limit', '1024M');
        echo '开始插入数据到数据库' . "<br />";
        $fromCity = Request::getGet('from_city');
        $destCity = Request::getGet('dest_city');
        echo $fromCity . ' => ' . $destCity . "<br />";
        for ($currentPage = 1; $currentPage <= $this->_totalPage; ++$currentPage) {
            $this->_add($fromCity, $destCity, $currentPage);
            usleep(500000);
        }
        echo '结束';
    }

    /**
     * 插入
     **/
    private function _add($fromCity, $destCity, $currentPage = 1) {
        if (!$fromCity || !$destCity) {
            exit('城市不能为空！');
        }
         $result = TaoBaoInterface::travelSearch(array(
            'from_city'    => $fromCity,
            'dest_city'    => $destCity,
            'page_size'    => 20,
            'current_page' => $currentPage,
        ));
        $data = TravelSearchInterface::getFormatResult($result);
        $infoArr = $result['travel_path_items_list']['travel_path_items'];
        foreach ($infoArr as $info) {
            $info['pc_list_url'] = $result['pc_list_url'];
            $add = TravelSearchInterface::add($info);
        }
    }

}
