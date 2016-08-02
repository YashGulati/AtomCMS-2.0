<?php

$dbc = mysqli_connect('localhost', 'yash', 'yash', 'yashdb');

$site_title = 'AtomCMS 2.0';

if(isset($_GET['page']))
  $pageid = $_GET['page'];
else
  $pageid = 1;

$q = "SELECT * FROM pages WHERE id = $pageid";
$r = mysqli_query($dbc, $q);
$page = mysqli_fetch_assoc($r);

?>
