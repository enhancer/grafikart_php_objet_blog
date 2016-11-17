<?php
namespace App\Table;

use App\App;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author chris
 */
class Article extends Table{
    
    public function getLast()
    {
        return App::getDb()->query('SELECT * FROM article , categorie WHERE id = categorie_id ', __CLASS__);
    }

        public function getUrl()
    {
        return 'index.php?p=article&id='.$this->id;
    }
    
     public function getExtrait()
    {
        $html = '<p>'.substr($this->contenu, 0, 100).'...</p>';
        $html .= '<p><a href="'.$this->getURL().'">Voir la suite</a></p>';
        echo $html;
    }
    
    
}
