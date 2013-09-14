<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="<?php echo $options['tagline'];?>" />
	<meta name="author" content="<?php echo $options['title']; ?>">   
    <meta name="creator" content="famos-cms">
    
    <title><?php echo $System_Name; ?> - <?php echo $options['title']; ?></title>

	<!-- Mobile -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.eot');
  src: url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.eot?#iefix')  format('embedded-opentype'), url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.woff')  format('woff'), url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.ttf')  format('truetype'), url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
}
</style>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $Server_Link; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $Server_Link; ?>/css/home.css" rel="stylesheet">

	<!-- Navigation -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script src="<?php echo $base_url ?>/js/custom.js"></script>

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="<?php echo $Server_Link; ?>/js/respond.min.js"></script>
    <![endif]-->
    
    
    <!--Icon-->
    <link rel="shortcut icon" href="<?php echo $Server_Link; ?>/img/favicon.png">

	
</head>
<body>

<div class="container">
      <div class="masthead">
        <h3 class="text-muted"><a href="<?php echo $Server_Link.'/'; ?>"><img style="width:200px;" src="https://raw.github.com/SimonWaldherr/PIS-draft/master/logodrafts/d01.png" alt=""></a></h3>
      </div>
		<nav class="navbar navbar-default nav nav-justified" role="navigation">
  			<div class="navbar-header">
   				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      				<span class="sr-only">Handy Navigation</span>
      				<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand glyphicon glyphicon-home" href="<?php echo $Server_Link; ?>/"> </a>
  			</div>
  			<div class="collapse navbar-collapse navbar-ex1-collapse">
  				<ul class="nav navbar-nav">	
  					<?php echo build_nav($tree); ?>
          		</ul>
  			</div>
		</nav>
   <div class="container marketing">
		<?php echo load_page($tree); ?>
		<br><br>		
   </div> <!-- /container -->
</div><!-- /main -->


<style>
.caddy-footer {
background: #31353A !important;
background-color: #31353A !important;
background-image: -webkit-linear-gradient(top, #31353A, #2F3337) !important;
background-image: -moz-linear-gradient(top, #31353a, #2f3337) !important;
background-image: linear-gradient(top, #31353a, #2f3337) !important;
}
</style>

<div id="footer" class="caddy-footer">
      <div class="container caddy-footer">
    	<ul class="nav nav-pills">
        <?php if (!empty($options['links']) || !empty($options['twitter'])) { ?>
			<?php foreach($options['links'] as $name => $url) { ?>
				<li><a style="color:#fff;" class="caddy-footer" href="<?php echo $url;?>" target="_blank"><?php echo $name;?></a> </li>
			<?php } ?>
		<?php } ?>
		
		<!-- Twitter -->
		<?php foreach($options['twitter'] as $handle) { ?>
				<li><iframe  allowtransparency="true" frameborder="0" scrolling="no" style="margin-top: 10px; width:162px; height:20px;" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=<?php echo $handle;?>&amp;show_count=false"></iframe> <li>
		<?php } ?>
		</ul>    
      </div>
</div>	