<?php
namespace App\Table;
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
class Article {
    
    public function __get($key)
    {
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
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
