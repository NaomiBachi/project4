
<?php $title = 'Synopsis, Un billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

<h2>Synopsis : "Un billet simple pour l'Alaska"</h2>

<?php
while ($data = $synopsis->fetch()){
?>
<p id="synopsis_txt"><?= htmlspecialchars($data['content']); ?></p>

<?php
}

$synopsis->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php'); ?>
