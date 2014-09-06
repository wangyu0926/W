<?php

class TravelSearchModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    protected function _init() {
        $this->dbName      = MysqlConf::MASTER;
        $this->tableName   = 'travel_search';
        $this->MasterConf  = MysqlConf::Master();
        $this->SlaveConf   = MysqlConf::Slave();
    }

}
