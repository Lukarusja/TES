<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "qqq";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
            die('Could not Connect to SQL Server');
            //die('Could not Connect MySql Server:' .mysql_error());
        }
?>