<?php

  $name = 'Amare';
  setcookie('name', $name, time() + (86400 * 30));
  echo 'Hello '.($_COOKIE['name']!='' ? $_COOKIE['name'] : 'Guest');


  /* Other way of expression the same as the above*/

  /*
  if($_COOKIE['name']!=”) {
    echo 'Hello '.$_COOKIE['name'];
  } else {
    echo "Hello Guest";
  }*/
?>
