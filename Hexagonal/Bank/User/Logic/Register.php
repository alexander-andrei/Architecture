<?php

namespace Bank\User\Logic;


use Persistence\Entity\EntityInterface;
use Persistence\PersistenceInterface;
use Services\EntityValidatorInterface;

class Register
{
    private $_validator;
    private $_persistence;

    public function __construct(PersistenceInterface $persistence, EntityValidatorInterface $validator)
    {
        $this->_persistence = $persistence;
        $this->_validator = $validator;
    }

    public function register(EntityInterface $user)
    {
        if ($this->_validator->validate($user))
        {
            $this->_persistence->create($user);
        }
        else
        {
            return "User cannot be registered !";
        }
    }
}