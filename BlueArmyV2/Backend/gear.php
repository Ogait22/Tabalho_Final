<?php
include __DIR__.'/../Backend/connection.php';

header("Access-Control-Allow-Origin: *");

class Gear extends Conexao { 


    private $name;
    private $url;
    private $amount;


    public function getName(){
      return $this->name;
  }

  public function setNamme($name) {
    $this->name = $name;
    return $this;
}

public function getUrl(){
   return $this->url;
}

public function setUrl($url){
   $this->url = $url;
   return $this;
}

public function getAmount(){
   return $this->amount;
}

public function setAmount($amount){
   $this->amount = $amount;
   return $this;
}

public function insert($obj){    
   $sql = "INSERT INTO gear(name,url,amount) VALUES (:name,:url,:amount)";
   $consulta = Conexao::prepare($sql);
   $consulta->bindValue('name',  $obj->name);
   $consulta->bindValue('url' , $obj->url);
   $consulta->bindValue('amount' , $obj->amount);       
   return $consulta->execute();
   return Conexao::lastId();
}

public function delete($obj,$name = null){
  $sql =  "DELETE FROM gear WHERE name = :name";
  $consulta = Conexao::prepare($sql);
  $consulta->bindValue('name',$name);
  $consulta->execute();
}

public function find($name = null){
    $sql =  "SELECT * FROM gear WHERE name = :name";
    $consulta = Conexao::prepare($sql);
    $consulta->bindValue('name',$name);
    $consulta->execute();
}

public function findAll(){
  $sql = "SELECT * FROM gear";
  $consulta = Conexao::prepare($sql);
  $consulta->execute();
  return $consulta->fetchAll();
}

}