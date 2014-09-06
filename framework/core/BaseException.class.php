<?php
/**
 * 异常类
 * @author Mr.W
 * @date  2014-9-7
 **/
class BaseException extends Exception {

    public function errMsg() {
        return 'Framework ERROR: ' . $this->getMessage();
    }

}
