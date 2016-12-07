<?php

namespace Context;


interface SqlContext
{
    public function create(array $entity);
    public function find($primaryKey);
}