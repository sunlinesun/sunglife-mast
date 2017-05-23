<?php
class Bootstrap extends Yaf\Bootstrap_Abstract
{
    /**
     * @desc 初始化设置配置
     */
    public function _initConfig()
    {
        $config = Yaf\Application::app()->getConfig();
        Yaf\Registry::set("config", $config);
    }


    public function _initPlugin()
    {
        //注册插件
    }

    public function _initRoute()
    {
        //Yaf\Dispatcher::getInstance()->catchException(true);
    }
}