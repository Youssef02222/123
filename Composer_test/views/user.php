<?php

echo "user page <br>";
//var_dump($myuser);
$array=file("log.txt");
//var_dump($array);
$count=sizeof($array);
echo "<h1>the number of loged users now is $count</h1>";
