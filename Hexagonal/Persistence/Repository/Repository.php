<?php

namespace Persistence\Repository;


use Context\SqlContext;

class Repository implements RepositoryInterface
{
    private $_dbContext;
    private $_primaryKey;

    public function __construct(SqlContext $dbContext, $primaryKey)
    {
        $this->_dbContext = $dbContext;
        $this->_primaryKey = $primaryKey;
    }

    public function create(array $entity)
    {
        return $this->_dbContext->create($entity);
    }

    public function find(array $entity)
    {
        return $this->_dbContext->find($entity[$this->_primaryKey]);
    }
}