<?php
require('controllers/controller.php');

try{

  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listChapters') {
      listChapters();
    }
    elseif ($_GET['action'] == 'synopsis') {
      synopsis();
    }
  }
  else{
    listChapters();
  }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
      echo 'Erreur : ' . $e->getMessage();
}
