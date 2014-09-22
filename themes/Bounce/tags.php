<?php include(dirname(__FILE__).'/header.php'); ?>

<section class="wrap">
  
   <article class="bloc-8">
    
    <div class="blog">

          <!-- création de la boucle pour récuperer les articles du blog -->
          <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

              <article role="article"  id="post-<?php echo $plxShow->artId(); ?>">

                <!-- Titre de l'article -->
                <h2><?php $plxShow->artTitle('link'); ?></h2>

               <hr/>

                <!-- informations de l'article -->
                <p><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> le <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> <span class="right"><?php $plxShow->artNbCom(); ?><span class="symbol">e</span></span>
                </p>

                <!-- Affichage du bloc Chapo -->
                <?php $plxShow->artChapo(); ?>


                <!-- informations de l'article, catégorie et Tags -->
                <p>
                    <span class="symbol">D</span><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                    <span class="symbol">,</span><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                </p>

              </article>

           <!-- fin de la boucle -->
           <?php endwhile; ?>


            <div class="pagination">
                <?php $plxShow->pagination(); ?>
            </div>
        </div>
       
   </article>
   
    <aside class="bloc-4">
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </aside>
    
</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>