<?php

namespace Persistence\Mapper;


use Persistence\Entity\EntityInterface;

class Mapper implements MapperInterface
{
    private $_rows;
    private $_entity;

    public function __construct(EntityInterface $entity, array $rows)
    {
        $this->_entity = $entity;
        $this->_rows = $rows;
    }

    public function map($data)
    {
        if ($data instanceof EntityInterface)
        {
            return $this->mapToArray($data);
        }
        else
        {
            return $this->mapToObject($data);
        }
    }

    private function mapToArray(EntityInterface $entity)
    {
        $data = [];

        foreach ($this->_rows as $key => $value)
        {
            $entity->{"get".ucfirst($key)}();

            $data[$value] = $entity->{"get".ucfirst($key)}();
        }

        return $data;
    }

    private function mapToObject(array $data)
    {
        foreach ($data as $key => $value)
        {
            $this->_entity->{"set".ucfirst(array_search($key, $this->_rows))}($value);
        }


        return $this->_entity;
    }
}