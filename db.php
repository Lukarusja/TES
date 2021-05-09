<?php
    $host='us-cdbr-east-03.cleardb.com';
    $username='b1d59fdfe4c76b';
    $password='5053212b';
    $dbname = "heroku_7a9ab49965d30f9";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
            die('Could not Connect to SQL Server');
            //die('Could not Connect MySql Server:' .mysql_error());
        }
?>