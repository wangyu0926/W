<?php
/**
 * 接口
 **/
class IndexInterface {

    public static function getRows() {
        $mod = new indexModel();
        $rows = $mod->getRows('*', [
            ['id', '>', 0],
        ]);
        return $rows;
    }

}
