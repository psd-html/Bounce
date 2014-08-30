<?php include(dirname(__FILE__).'/header.php'); ?>

<section class="wrap">
  
   <article class="bloc-8" role="article">
      
          <div class="page" id="static-page-<?php echo $plxShow->staticId(); ?>">

            <!-- Titre de l'article -->
            <h2><?php $plxShow->staticTitle(); ?></h2>


            <!-- Affichage le contenu de la page statique -->
            <?php $plxShow->staticContent(); ?>

          </div>
          
   </article>
   
    <aside class="bloc-4">
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </aside>
    
</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>