<?php if(!defined('PLX_ROOT')) exit; ?>

    <div class="widget">
       <!-- les catégories --> 
        <h4><?php $plxShow->lang('CATEGORIES'); ?></h4>
        <ul>
            <?php $plxShow->catList('','<li><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
        </ul> 
    </div>
 
    
    <div class="widget">
         <!-- les derniers articles -->
        <h4><?php $plxShow->lang('LATEST_ARTICLES'); ?></h4>
        <ul>
            <?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
        </ul>   
    </div>
    
    <div class="widget">
       <!-- la liste des tags -->
        <h4><?php $plxShow->lang('TAGS'); ?></h4>
        <ul>
            <?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
        </ul> 
    </div>
    
    <div class="widget">
        <!-- les dernieres commentaires -->
        <h4><?php $plxShow->lang('LATEST_COMMENTS'); ?></h4>
        <ul>
            <?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
        </ul>    
    </div>
    
    <div class="widget">
    <!-- les archives -->
        <h4><?php $plxShow->lang('ARCHIVES'); ?></h4>
        <ul>
            <?php $plxShow->archList('<li><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
        </ul>
    </div>
    
    <div class="widget">
       <!-- Affichage les flux RSS -->
        <p class="rss">
           <a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
            <span class="symbol">r</span><?php $plxShow->lang('ARTICLES'); ?></a>
        </p>
        <br/>
        <p class="rss">
            <a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
            <span class="symbol">r</span><?php $plxShow->lang('COMMENTS'); ?></a>
        </p>  
    </div>