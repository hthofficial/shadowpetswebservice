<?php
 class Dbconnnect
 {
   private $con;
   function __construct()
   {
   
   
   }
   function connect()
   {
     include_once dirname(__FILE__).'/constants.php';
      $this->con=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
      if(mysqli_connect_errno())
      {
        echo"Failed to connect to the database".mysqli_connect_error();
        return null;		
	  }	  
	  return $this->con;
   }
 }
?>