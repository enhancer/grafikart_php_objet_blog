<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use \PDO;

/**
 * Description of Database
 *
 * @author chris
 */
class Database {
   
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;


    public function __construct($db_name, $db_user='root',$db_pass='root',$db_host='localhost' ) {
        
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;      
        ;
    }
    
    private function getPDO()
    {
        If ($this->pdo === null)
        {
            $pdo = new PDO('mysql:dbname=grafikart_blog;host=localhost','root','root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $this->pdo = $pdo;
        }
        
        return $this->pdo;
    }
    
    public function query($statement, $class_name)
    {
        
        $req = $this->getPDO()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_CLASS , $class_name);
        return $data;
    }
    
    public function prepare ($statement , $attributes , $class_name , $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        If ($one)
        {
            $datas = $req->fetch();
        }
        else
        {
            $datas = $req->fetchAll();
        }
        
        return $datas;
    }
}
