<?php

namespace Services;


use Persistence\Entity\EntityInterface;

interface EntityValidatorInterface
{
    function validate(EntityInterface $entity);
}