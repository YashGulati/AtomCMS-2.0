<?php

function data_page($dbc, $id){

  $q = "SELECT * FROM pages WHERE id = $id";
  $r = mysqli_query($dbc, $q);

  $data = mysqli_fetch_assoc($r);

  $data['page_nohtml'] = strip_tags($data['page_body']);

  if($data['page_nohtml'] == $data['page_body']){
    $data['page_formatted'] = "<p>".$data['page_body']."</p>";
  }
  else {
    $data['page_formatted'] = $data['page_body'];
  }

  return $data;

}


?>
