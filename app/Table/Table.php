<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Table;

/**
 * Description of Table
 *
 * @author F005276
 */
class Table {
    
    protected static $table;
    
    private static function getTable()
    {
        If(static::$table === null)
        {
            $class_name = explode('\\', get_called_class());
            static::$table = strtolower(end($class_name));
            echo static::$table;
        }
        
        return static::$table;
    }

    public function __get($key)
    {
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    private static function all()
    {
        return App::getDb()->query('SELECT * FROM '.static::getTable(), __CLASS__);
    }    
    
     
}
