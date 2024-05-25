<?php

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "id22143761_homely";
        $dbpass = "Innovatec2024*";
        $db = "id22143761_homelyfix";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
        return $conn;
    }
 
    function CloseCon($conn)
    {
        $conn -> close();
    }
   
?>