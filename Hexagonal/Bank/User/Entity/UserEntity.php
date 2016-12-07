<?php


namespace Bank\User\Entity;


use Persistence\Entity\BaseEntity;


/**
 * Class UserEntity
 * @package Hexagonal\Bank\User\Entity
 */
class UserEntity extends BaseEntity
{
    /**
     * @var string
     */
    private $_name;

    /**
     * @var string
     */
    private $_accountNo;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->_accountNo;
    }

    /**
     * @param mixed $accountNo
     */
    public function setAccountNo($accountNo)
    {
        $this->_accountNo = $accountNo;
    }


}