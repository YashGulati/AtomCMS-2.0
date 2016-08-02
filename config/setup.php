<?php

$dbc = mysqli_connect('localhost', 'yash', 'yash', 'yashdb');

$site_title = 'AtomCMS 2.0';

$q = "SELECT * FROM pages WHERE id = 1";
$r = mysqli_query($dbc, $q);
$page = mysqli_fetch_assoc($r);

?>
