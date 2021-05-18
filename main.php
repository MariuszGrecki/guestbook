<?php

 $conString = "host='$host' dbname='$dbName' user='$user' password='$pass'";
 $con = pg_connect($conString);
 
 $query = "SELECT * FROM komentarze";
 
 $r = pg_query($query);
 
 $results = pg_fetch_all($r);
 
?>