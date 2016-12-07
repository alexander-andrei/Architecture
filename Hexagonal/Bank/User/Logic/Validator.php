<?php

namespace Bank\User\Logic;


use Persistence\Entity\EntityInterface;
use Services\EntityValidatorInterface;

class Validator implements EntityValidatorInterface
{
    public function validate(EntityInterface $user)
    {
        if ($user->getName() == null)
        {
            return false;
        }

        if ($user->getAccountNo() == null)
        {
            return false;
        }

        return true;
    }
}