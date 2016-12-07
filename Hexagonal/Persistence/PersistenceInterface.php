<?php


namespace Persistence;


use Persistence\Entity\EntityInterface;

interface PersistenceInterface
{
    function create(EntityInterface $entity);
    function find(array $id);
}