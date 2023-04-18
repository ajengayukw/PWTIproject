<?php
$name = ['Ajeng','Ayu'];
function cari($array, $search):bool {
if(in_array($search,$array)) {
  echo "TRUE".'</br>';
  return TRUE;
}else {
  echo "FALSE".'</br>';
  return false;
  }
  }
  cari($name, 'Ajeng');
  cari($name, 'Ayu');
  cari($name, 'Kusuma');
  ?>