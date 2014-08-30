<?php if (!defined('PLX_ROOT')) exit; ?>

    <footer role="contentinfo">
        <div class="wrap">
            <div class="bloc-12">
                <p>
                    <?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?>
                </p>

                <p>
                    <?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a> 
                    <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> utilisant la technologie <a href="https://github.com/psd-html/Framework-responsive-PluXml">SASS</a> <span class="symbol">X</span><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> -  <a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a> - <?php $plxShow->httpEncoding() ?>  <span class="symbol">.</span><a href="http://validator.w3.org/check?uri=referer">W3C</a>
                </p>
            </div>
        </div>
    </footer>
    
    <!-- scripts js -->
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        
        <script>
        $(window).scroll(function() {
           
        
        $('.blog').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("effet");
			}
		});
            
        
		});    
            


</script>    
</body>
</html>