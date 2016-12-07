<?php

namespace Container;


class Container
{
    private $_file;
    private $_contents;

    public function __construct()
    {
        $this->_file = MAIN_DIR . '/di.json';

        $this->_contents = json_decode(file_get_contents($this->_file));
    }

    public function get($service)
    {
        if (isset($this->_contents->$service[0]->constructor))
        {
            $data = [];
            foreach ($this->_contents->$service[0]->constructor as $argument)
            {
                $data[] = $this->checkIfService($argument);
            }

            $class = new \ReflectionClass($this->_contents->$service[0]->class);
            $instance = $class->newInstanceArgs($data);

            return $instance;
        }

        return new $this->_contents->$service[0]->class();
    }

    private function checkIfService($argument)
    {
        if(is_array($argument))
        {
            return get_object_vars($argument[0]);
        }


        if(isset($this->_contents->$argument[0]))
        {
            return $this->get($argument);
        }

        return $argument;
    }
}