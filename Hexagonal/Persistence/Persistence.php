<?php

namespace Persistence;


use Persistence\Entity\EntityInterface;
use Persistence\Mapper\MapperInterface;
use Persistence\Repository\RepositoryInterface;

class Persistence implements PersistenceInterface
{
    private $_mapper;
    private $_repository;

    public function __construct(MapperInterface $mapper, RepositoryInterface $repository)
    {
        $this->_mapper = $mapper;
        $this->_repository = $repository;
    }

    public function create(EntityInterface $entity)
    {
        return $this->_repository->create($this->_mapper->map($entity));
    }

    public function find(array $id)
    {
        $found = $this->_repository->find($id);

        return $this->_mapper->map($found);
    }
}