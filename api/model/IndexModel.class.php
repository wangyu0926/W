<?php

/**
 * 模型
 **/
class IndexModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    protected function _init() {
        //数据库名
        $this->_dbName     = MysqlConf::MASTER;
        //表名
        $this->_tableName  = 'travel_search';
        //主库配置
        $this->_masterConf = MysqlConf::Master();
        //从库配置
        $this->_slaveConf  = MysqlConf::Slave();
        ///主写从读
    }

}
