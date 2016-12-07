<?php

namespace Persistence\Repository;


interface RepositoryInterface
{
    function create(array $entity);
    function find(array $entity);
}