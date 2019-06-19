<?php 

// dump and die 
function dnd($data){
    echo '<pre>';
     var_dump($data);
    echo '</pre>';
    die();
}

function sanitize($dirty){
  return htmlentities($dirty,END_QUOTES,'UTF-8');
}


