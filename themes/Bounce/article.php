<?php include(dirname(__FILE__).'/header.php'); ?>
   
    <div class="section wrap">
      
       <article class="bloc-8" role="article">   
               
              <div class="bounce">
                
                <!-- Titre de l'article -->
                <h2><?php $plxShow->artTitle(''); ?></h2>

                <hr/>

                <!-- informations de l'article -->
                <p><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> le <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> <span class="right"><?php $plxShow->artNbCom(); ?><span class="symbol">e</span></span>
                </p>

                <!-- Affichage de l'article-->
                <?php $plxShow->artContent(); ?>


                <!-- informations de l'article, catégorie et Tags -->
                <p>
                    <span class="symbol">D</span><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                    <span class="symbol">,</span><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                </p>

       
              
              
            <h3>A propos de l'auteur, <?php $plxShow->artAuthor() ?>:</h3>
            <?php $plxShow->artAuthorInfos('<blockquote>#art_authorinfos</blockquote>'); ?>

       

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
       
       
            </div>

       </article>

        <aside class="bloc-4">
            <?php include(dirname(__FILE__).'/sidebar.php'); ?>
        </aside>

    </div>
    
<?php include(dirname(__FILE__).'/footer.php'); ?>