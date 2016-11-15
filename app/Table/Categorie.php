<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Table;

use App\App;

/**
 * Description of Categorie
 *
 * @author F005276
 */
class Categorie extends Table{
    
    protected static $table = "categorie";
    
    public static function all()
    {
        return App::getDb()->query('SELECT * FROM '.self::$table, __CLASS__);
    }
    
    public function getUrl()
    {
        return 'index.php?p=categorie&id='.$this->id;
    }
}
