<?php
require_once dirname(__FILE__) . '/DB.php';
class Model extends DB
{
    protected $table;       //表名
    protected $column;      //字段
    protected $order;       //排序
    protected $where;       //条件
    protected $limit;
    protected $join;

    public function __construct()
    {

    }


    public function where($where)
    {
        return $this;
    }
}