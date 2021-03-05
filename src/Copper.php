<?php

namespace Aryeo\Copper;

class Copper
{
    protected CopperClient $client;

    public function createClient($access_token, $user_email)
    {
        $this->client = new CopperClient($access_token, $user_email);

        return $this;
    }

    public function __call($name, $arguments)
    {
        $resource_name = ucwords($name);

        $class = 'Aryeo\\Copper\\Resources\\'.$resource_name;

        if (class_exists($class)) {
            return new $class($this->client);
        }

        throw new \InvalidArgumentException("The requested resource '{$name}' does not exist.");
    }

    public function __get($name)
    {
        if (method_exists($this, $name)) {
            return call_user_func($this->{$name}, func_get_args());
        }

        return $this->__call($name, func_get_args());
    }
}
