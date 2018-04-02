<?php

//Fonction recuperant l'ensemble des chapitres
function getChapters()
{
  $db = dbConnect();
  $chapters = $db->query('SELECT id, title, content FROM chapters ORDER BY id DESC LIMIT 0, 5');
  return $chapters;
}


//Fonction recuperant un chapitre
function getChapter($chapterId)
{
  $db = dbConnect();

  $req = $db->prepare('SELECT id, title, content FROM chapters WHERE id=?');
  $req->execute(array($chapterId));
  $chapter = $req->fetch();

  return $chapter;
}

//Fonction recuperant les commentaires
function getComments()
{
  $db = dbConnect();

  $comments  = $db->prepare('SELECT id, post_id, author, comment FROM comments WHERE post_id=? ORDER BY id');
  $comments = execute(array($_GET['chapter']));

  return $comments;
}

//Fonction recuperant le synopsis
function getSynopsis()
{
$db = dbConnect();

$synopsis = $db->query('SELECT content FROM synopsis');
return $synopsis;
}

//Fonction connexion a la base de données
function dbConnect()
{
  try
  {
    $db = new PDO('mysql:host=localhost;dbname=writer;charset=utf8', 'root', '');
    return $db;
  }
  catch (Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
}
