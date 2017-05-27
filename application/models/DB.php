<?php
class DB
{
    protected static $_instance;
    protected   $pdo;

    private function __construct() {}
    private function __clone() {}

    public function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new DB();
            $this->connectOn();
        }
        return self::$_instance;
    }

    public  function connectOn()
    {
        try {
            $config = Yaf\Registry::get('config');
            $dbConf = $config['db'];
            if (empty($dbConf))
                throw new Exception('DB Config Is Empty');
            $dns = $dbConf['type'] . ':dbname=' . $dbConf['name'] . ';host=' . $dbConf['host'];
            if ($dbConf['persistent']) {
                $pdo = new PDO($dns, $dbConf['user'], $dbConf['pwd'], [PDO::ATTR_PERSISTENT => true]);
            } else {
                $pdo = new PDO($dns, $dbConf['user'], $dbConf['pwd']);
            }
            $this->pdo = $pdo;
            $this->pdo->query('SET NAMES ' . $dbConf['charset']);
        } catch (Exception $e) {
            echo 'DB Connect Error: ' . $e->getMessage();
            die();
        }
    }

}