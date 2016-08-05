<?php

class Model
{
    private $attributes = [];
    protected static $table;

    public function __set($name, $value) {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

    public static function getTableName() {
        return static::$table;
    }
}

//$array = new Model();
//$array->key = "I'm a value";
//$array->key2 = "I'm a value";
//var_dump($array);