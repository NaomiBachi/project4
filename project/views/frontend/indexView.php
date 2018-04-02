
<?php $title = ' Accueil, Un billet simple pour l\'alaska'; ?>

<?php ob_start(); ?>

      <section id="header_book">
        <h1 id="title_book">Un billet simple pour l'Alaska</h1>
          <h2 id="author">de </br>
          Jean Forteroche</h2>
      </section>

      <!--- SYNOPSIS --->
      <section id="synopsis">
        <a href="index.php?action=synopsis">Synopsis</a>
      </section>


    <!--- CHAPTERS --->
      <section id="chapters">
        <?php
        while ($data = $chapters->fetch())
        {
        ?>
        <div class="chapter_index">

          <a href="#"><h3 id="chapter_title"><?= htmlspecialchars($data['title']); ?></h3>
          <p id="chapter_content"><?= htmlspecialchars($data['content']); ?></p></a>

        </div>

        <?php
        }
        $chapters->closeCursor();
        ?>
      </section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
