<?php
require('models/model_frontend.php');


function listChapters()
{

$chapters = getChapters();

require('views/frontend/indexView.php');

}


function synopsis(){

$synopsis = getSynopsis();

require('views/frontend/synopsisView.php');

}
