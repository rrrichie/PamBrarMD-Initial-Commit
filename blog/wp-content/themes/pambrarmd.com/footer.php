		<!--<footer id="footer" class="source-org vcard copyright">
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
		</footer>-->

	<!--</div>-->

    </div>
<div class="span1 col"></div>
</div>
    
    <div class="row-fluid">
    	<div class="span1 col"></div>
        <div class="span10 body-width">
        	<div class="copy">&copy;Dr. Pam Brar 2013</div>
            <div class="footer-menu"><a href="/index.php">Home</a>   |<a href="/about.php">Meet Dr. Pam</a>   |    <a href="/media.php">Media</a>   |<a href="/services.php">Services</a>   |    <!--<a href="#">Media</a>   |    <a href="#">Blog</a>   |   --><a href="/contact.php"> Contact</a></div>
            
            
            
            
        <div class="span1 col"></div>
    </div>
    
    
    
    
    
</div></div>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
<?php wp_footer(); ?>
</body>

</html>