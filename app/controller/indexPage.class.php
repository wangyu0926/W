<?php
/**
 * 默认控制器
 **/
class IndexPage extends Controller {

    /**
     * 默认动作
     **/
    public function indexAction() {
        //框架名
        $frameworkName = 'W';
        //描述
        $description   = '一个简洁的PHP框架';
        //页面渲染
        $this->render('index.php', [
            'framework' => $frameworkName,
            'desc'      => $description,
        ]);
        ///PHP5.4后[]可表示array()
    }

}
