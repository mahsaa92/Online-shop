<?php

	@session_start(); 
    
	class DataBase
        {
            
		public $Connction;
		function DataBase()
		{
              
			//$con1=@mysql_connect("127.0.0.1",'1PlosSite','1PlosSite');
			//$con1=@mysql_connect("127.0.0.1","root","ABCabc.");
			$con1=@mysql_connect('localhost','root','');
                        
                         if(!$con1) 
				die("CANNOT CONNECT");
			$Db_T = mysql_select_db("test2", $con1);
			//$Db_T = mysql_select_db("test", $con1);
			if(!$Db_T)
				die('Cannot Load DataBase');
			$sql = "set names utf8";
			$result = mysql_query($sql, $con1);
			$this->Connction = $con1;			
		}
	}
?>