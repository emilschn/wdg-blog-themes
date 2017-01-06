<?php $options = get_option('ribbon'); ?>
	</div><!--#page-->
</div><!--.container-->
</div>
	<footer>
		<div class="container">
			<div class="footer-widgets">
				<?php widgetized_footer(); ?>
			</div><!--.footer-widgets-->
		</div><!--.container-->
        <div class="copyrights"><?php mts_copyrights_credit(); ?></div> 
	</footer><!--footer-->
<?php mts_footer(); ?>
<?php wp_footer(); ?>
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-37768553-5', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>