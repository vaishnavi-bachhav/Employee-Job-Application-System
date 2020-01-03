<?php

class CPostJob
{
 private $host="localhost";
 private $user="root";
 private $db="DB1";
 private $pass="postgres";
 private $conn;

 public function __construct(){

 $this->conn = new PDO("pgsql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
 }

 public function insertData($Salary,$Job_Title,$Company,$Job_Type,$Location,$Job_Description,$table){
 
 $sql = "INSERT INTO $table SET Salary=:Salary,Job_Title=:Job_Title,Company=:Company,Job_Type=:Job_Type,Location=:Location,Job_Description=:Job_Description";
 $q = $this->conn->prepare($sql);
@ $q->execute(array(
 	':Salary'=>$Salary,
 	':Job_Title'=>$Job_Title,
 	':Company'=>$Company,
 	':Job_Type'=>$Job_Type,
 	':Location'=>$Location,
 	':Job_Description'=>$Job_Description));
 return true;
 }

}

?>
