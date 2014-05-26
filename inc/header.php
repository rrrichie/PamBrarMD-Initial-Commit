<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset">
<meta charset="utf-8">

<meta name="google-site-verification" content="TOHQJ3yTPzoBgcC_eElVqi0iGVfqdU5RYWA66PViIN8" />

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $title; ?></title>

<meta name="description" content="<?php echo $desc; ?>">
<meta name="keywords" content="<?php echo $kw; ?>">
<!-- Google will often use this as its description of your page/site. Make it good. -->

<meta name="google-site-verification" content="">
<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->

<meta name="author" content="Your Name Here">
<meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">

<!-- Dublin Core Metadata : http://dublincore.org/ -->
<meta name="DC.title" content="Project Name">
<meta name="DC.subject" content="What you're about.">
<meta name="DC.creator" content="Who made this site.">

<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains ddimensions instead of zooming in if page width < device width
	-->
<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->

<link rel="shortcut icon" href="_/img/favicon.ico">
<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->

<link rel="apple-touch-icon" href="_/img/apple-touch-icon.png">
<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->

<!-- CSS: screen, mobile & print are all in the same file -->
<link rel="stylesheet" href="_/css/style.css">
<link rel="stylesheet" href="_/css/screen.css">
<link rel="stylesheet" href="_/css/980.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
<!-- all our JS is at the bottom of the page, except for Modernizr. -->
<script src="_/js/modernizr-1.7.min.js"></script>
</head>

<body>
<div class="container-fluid body-back">

<div class="row-fluid">
      <div class="span1 col"></div>
      <div class="span10 body-width">
      	
        <div class="row-fluid">
        	<div class="span5"><div class="name-head"><a href="/"><img src="img/name.jpg" /></a></div></div>
            <div class="span7">
            	<div class="menu">
                
                <?php
				$m = array('index.php' => 'Home',
					'about.php' => 'Meet Dr. Pam',
					'media.php' => 'Media',
					'services.php' => 'Services',
					'contact.php' => 'Contact',
					'blog/' => 'Blog');
					//var_dump($_SERVER);
				foreach($m as $page => $title)
				{
					//var_dump($page);
					
					//$active = 'class="active"';
					
					if(strpos($_SERVER['REQUEST_URI'], $page) !== false)
						echo '<a href="/'.$page.'" class="active">'.$title.'</a>';
					else if(strpos($_SERVER['REQUEST_URI'], $page) !== false)
						echo '<a href="/'.$page.'" class="active">'.$title.'</a>';
					else
						echo '<a href="/'.$page.'">'.$title.'</a>';
				}
				
				?>
            	</div>
            </div>
        </div>
        
        
        
        
        
        </div>
      <div class="span1 col"></div>
	</div>

