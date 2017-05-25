<?php
class BaseModel
{
    protected $_instance;
    protected $link;

    public function __construct()
    {
        $config = Yaf\Registry::get('config')->toArray();
        $this->connectDb();
    }

    private function connectDb()
    {

    }

}