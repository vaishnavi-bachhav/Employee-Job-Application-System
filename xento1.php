<?php
	class CPostJob
	{
		function abc(){
		try{  
			$ph = new PDO("pgsql:host=localhost;dbname=DB1","postgres","root");
			$sql = "SELECT * FROM data";
			
			echo 'Salary'."	|	".'Job Title'."	|	".'Company'."	|	".'Job Type'.'<br/>';
			foreach($ph->query($sql) as $row)
			{
				print "</br>";
				print $row['Salary']."	|	".$row['Job_Title']."	|	".$row['Company']."	|	".$row['Job_Type'].'<br/>';
			}
		}catch(PDOException $e){
			echo $e->getMessage();
			}
		}
	}
	$a = new CPostJob();
	$a->abc();
?>