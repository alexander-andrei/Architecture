<?php


namespace Context\Mysql;


use Context\SqlContext;

class MysqlEngine implements SqlContext
{

    public function create(array $entity)
    {
        var_dump("inserted !", $entity);
    }

    public function find($primaryKey)
    {
        return array("id" => "1", "name" => "test", "account_no" => "222");
    }
}