<?php

$dbc = mysqli_connect('localhost', 'yash', 'yash', 'yashdb');

DEFINE('D_TEMPLATE', 'template');

include('functions/data.php');

$site_title = 'AtomCMS 2.0';

if(isset($_GET['page']))
  $pageid = $_GET['page'];
else
  $pageid = 1;

$page = data_page($dbc, $pageid);

?>
