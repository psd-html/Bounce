<?php if (!defined('PLX_ROOT')) exit; ?>

    <footer role="contentinfo">
        <div class="wrap">
            <div class="bloc-12">
                <p>
                    <?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?>
                </p>

                <p>
                    <?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a> 
                    <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> utilisant la technologie <a href="http://psdtohtml5.fr" title="psdtohtml5">SASS</a> <span class="symbol">X</span><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> -  <a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a> - <?php $plxShow->httpEncoding() ?>  <span class="symbol">.</span><a href="http://validator.w3.org/check?uri=referer">W3C</a>
                </p>
            </div>
        </div>
    </footer>


    
<script>
    if (window.jQuery == undefined) document.write( unescape('%3Cscript src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"%3E%3C/script%3E') );
</script>


<script src="<?php $plxShow->template(); ?>/js/jquery.glue.min.js"></script>            
             
        <script>
        $(window).scroll(function() {
           
        
        $('.blog').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("effet");
			}});
        
		                      });    

        $.glue({
        layer: "#beforeyougo",
        maxamount: 1,
        disableleftscroll: false
                });
</script>

 
</body>
</html>