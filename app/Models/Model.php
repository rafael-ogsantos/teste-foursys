<?php

namespace App\Models;

use Src\Drivers\MySqlPdo;
use Src\Drivers\MysqlStrategy;

abstract class Model
{
    protected $driver;

    public function __construct()
    {
        $pdo = new \PDO('mysql:host=localhost;dbname=teste', 'root', '');
        $driver = new MySqlPdo($pdo);
        $this->setDriver($driver);
    }

    public function setDriver(MysqlStrategy $driver)
    {
        $this->driver = $driver;
        $driver->setTable($this->table);
        return $this;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function create(array $data = [])
    {
        return $this->getDriver()
            ->insert($data)
            ->exec();
    }

//    public function save()
//    {
//        return $this->getDriver()
//            ->save($this)
//            ->exec();
//    }

    public function findAll(array $conditions = [])
    {
        return $this->getDriver()
            ->select($conditions)
            ->exec()
            ->all();
    }

    public function findFirst(int $id)
    {
        return $this->getDriver()
            ->select(['id' => $id])
            ->exec()
            ->first();
    }

    public function delete()
    {
        return $this->getDriver()
            ->delete(['id' => $this->id])
            ->exec();
    }

    public function __get($variable)
    {
        if($variable === 'table') {
            $table = get_class($this);
            $table = explode('\\', $table);
            return strtolower(array_pop($table));
        }

        return null;
    }
}