<?php
/**
 * Model基类，所有数据库操作都基于此类
 * 此类只为mysql服务，其他存储以插件形式介入
 */

abstract class Model {

    protected $_masterConf;
    protected $_slaveConf;
    protected $_dbName;

    //表名
    protected $_tableName;

    //表字段
    protected $_fields;

    //主从库变量
    protected $_mdb;
    protected $_sdb;

    public function __construct() {
        $this->_init();
        $this->_mdb = new Mysql($this->_masterConf, $this->_dbName, $this->_tableName);
        $this->_sdb = new Mysql($this->_slaveConf, $this->_dbName, $this->_tableName);
    }

    public function add($array, $returnID = true) {
        $db = $this->_getDb();
        return $db->add($array, $returnID);
    }

    public function update($where, $update, $limit = 1) {
        $db = $this->_getDb();
        return $db->update($where, $update, $limit);
    }

    public function del($where, $limit = 1) {
        $db = $this->_getDb();
        return $db->del($where, $limit);
    }

    /**
     * 查询数据表
     * @param string $fields
     * @param array $where 查询条件数组
     * array(
     *       array('name', '=', 'lmyoaoa'),
     *       array('number', '>', 15),
     *       array('id', 'in', array(1,2,3), false),     //此处false/0代表是否给数组加上单引号
     *       array('id', 'between', ''),
     *
     *       'xxx=0 and oo=9 or jj=3' //自定义sql
     * )
     * @param int $page
     * @param int $size
     * @param string $orderBy etc: 'order by id desc'
     */
    public function getRows($fields='*', $where=array(), $page=1, $size=10, $orderBy='') {
        $db = $this->_getDb();
        return $db->getRows($fields, $where, $page, $size, $orderBy);
    }

    /**
     * 查询数据表
     * @param string $fields
     * @param array $where 查询条件数组
     * array(
     *       array('name', '=', 'lmyoaoa'),
     *       array('number', '>', 15),
     *       array('id', 'in', array(1,2,3), false),     //此处false/0代表是否给数组加上单引号
     *       array('id', 'between', ''),
     *
     *       'xxx=0 and oo=9 or jj=3' //自定义sql
     *  )
     *  @param string $orderBy etc: 'order by id desc'
     */
    public function getOne($fields = '*', $where = array(), $orderBy = '') {
        $db = $this->_getDb();
        return $db->getOne($fields, $where, $orderBy);
    }


    /**
     * 获取总行数
     */
    public function getRowsCount($where = array(), $formatData = false) {
        $db = $this->_getDb();
        return $db->getRowsCount($where, $formatData);
    }

    /**
     * 获取当前表字段
     */
    public function getFields() {
        $db = $this->_getDb();
        return $db->getFields();
    }

    private function _getDb($master = false) {
        return $master ? $this->_mdb : $this->_sdb;
    }

    //子类中需初始化
    abstract protected function _init();

}
