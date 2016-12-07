<?php

namespace Persistence\Entity;

/**
 * Class BaseEntity
 * @package Hexagonal\Persistence\Entity
 */
abstract class BaseEntity implements EntityInterface
{
    /**
     * @var
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}