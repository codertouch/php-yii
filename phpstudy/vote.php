<?php
$count =file_get_contents('./1.txt');
$count +=1;
file_put_contents('./1.txt', $count);

//header('http/1.1 204 no content');
?>
