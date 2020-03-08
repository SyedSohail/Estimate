<?php
/**
 *
 */
class database
{

  function __construct()
  {

  }

  function databaseConnection()
  {
    $mysqli = new mysqli("localhost","root","root@123","estimate");

    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    return $mysqli;
  }
}




 ?>
