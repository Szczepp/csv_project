<?php

namespace App;

class Action
{
    function __construct(
        private $class,
        private $method
    )
    {

    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getClass(): string
    {
        if (class_exists($this->class)) {
            return $this->class;
        } else {
            throw new \Exception('Class not found');
        }
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getMethod(): string
    {
        if (method_exists($this->class, $this->method)) {
            return $this->method;
        } else {
            throw new \Exception('Method not found');
        }
    }
}