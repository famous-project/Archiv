<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="creator" content="famos-cms">

    <title><?php echo $System_Name; ?> - Home</title>
<style>
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.eot');
  src: url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.eot?#iefix')  format('embedded-opentype'), url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.woff')  format('woff'), url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.ttf')  format('truetype'), url('<?php echo $Server_Link; ?>/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
}
</style>

	<link href="<?php echo $Server_Link; ?>/podlove-web-player/static/podlove-web-player.css" rel="stylesheet" media="screen" type="text/css" />

	<script src="<?php echo $Server_Link; ?>/podlove-web-player/libs/jquery-1.9.1.min.js"></script>
	<script src="<?php echo $Server_Link; ?>/podlove-web-player/static/podlove-web-player.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $Server_Link; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $Server_Link; ?>/css/home.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="<?php echo $Server_Link; ?>/js/html5shiv.js"></script>
      <script src="<?php echo $Server_Link; ?>/js/respond.min.js"></script>
    <![endif]-->
    
    
    <!--Icon-->
    <link rel="shortcut icon" href="<?php echo $Server_Link; ?>/img/favicon.png">

  </head>
<body>

<div id="main">
<div class="container">
		<div id="login-members"><a id="log-in" href="<?php echo $User_Login_Link; ?>">Login <span class="glyphicon glyphicon-log-in"></span></a></div>		
      		<!-- Navigation -->
      		<div class="masthead">
        		<h3 class="text-muted"><a href="<?php echo $Server_Link.'/'; ?>"><img style="width:200px;" src="https://raw.github.com/SimonWaldherr/PIS-draft/master/logodrafts/d01.png" alt="<?php echo System_Name; ?>"></a></h3>
       				<ul class="nav nav-justified">
          				<li class="active"><a href="#"><b>Home</b></a></li>
          				<?php echo build_nav($tree); ?>
          			</ul>
      		</div>
    		<!-- Start Infos -->
    		<div class="jumbotron" style=" background:url(img/bg.png) center center transparent no-repeat;">
        		<br>
        		<h1 style="padding-bottom:12px;"><?php echo $options['wellcome_h1']; ?></h1>       		
        		<p class="lead"><?php echo $options['wellcome_p']; ?></p>
    		</div>
    		<?php 
    		if ($options['podlove'] == "true" ) {
    		?>
    		<div class="row">
  				<div class="col-md-2"></div>
  				<div class="col-md-8" style="margin-top: -52px;"><?php include("podlove.php"); ?></div>
  				<div class="col-md-2"></div>
			</div>
			<?php
			}
			?>
</div>

<div class="container marketing">
<?php if ($options['podlove'] == "true" ) { 
	
	//experimentel
	echo '<div style="background: url(./img/bt-sh.png) top center no-repeat #fff; height: 32px; position: relative; margin-top: -18px; margin-bottom: 52px;">
			<hr class="featurette-divider" style="margin-top: -13px; height: 2px;">
		 </div>';

} else { 
	echo '<hr class="featurette-divider" style="margin-top: -30px;">'; 
} 

?>
      	<div class="row">      
        	<div class="col-lg-4">
        		<img class="img-circle" style="width:140px;" src="<?php echo $options['market_img1']; ?>">
          		
          		<h2 class="caddy"><?php echo $options['market_h1']; ?></h2>
          		<p><?php echo $options['market_1']; ?></p>
          		<p><a class="btn btn-default" href="<?php echo $options['market_link1']; ?>">Erfahre mehr &raquo;</a></p>
        	</div>
        	<div class="col-lg-4">
          		<img class="img-circle" style="width:140px;" src="<?php echo $options['market_img2']; ?>">
          		
          		<h2 class="caddy"><?php echo $options['market_h2']; ?></h2>
          		<p><?php echo $options['market_2']; ?></p>
          		<p><a class="btn btn-default" href="<?php echo $options['market_link2']; ?>">Erfahre mehr &raquo;</a></p>
        	</div>
        	<div class="col-lg-4">
        		<img class="img-circle" style="width:140px;" src="<?php echo $options['market_img3']; ?>">
          		
          		<h2 class="caddy"><?php echo $options['market_h3']; ?></h2>
         		<p><?php echo $options['market_3']; ?></p>          
         		<p><a class="btn btn-default" href="<?php echo $options['market_link3']; ?>">Erfahre mehr &raquo;</a></p>
        	</div>
      	</div>  	
</div>
<div class="container" style="margin-top:-30px;">
		<?php echo load_page($tree); ?>
</div>

<div class="container marketing">
    <div class="row"> 
		<?php 
    		//Random Projekte
    		include("./inc/random.php");
		?>	
    </div>
</div>

<br><br />
<br><br />

</div>

<footer>
			<ul>
				<li>
					<p class="services"><span class="glyphicon glyphicon-bookmark"></span> Services</p>

					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</li>
				<li>
					<p class="reachus"><span class="glyphicon glyphicon-globe"></span> Reach us</p>

					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li>555-123456789</li>
					</ul>
				</li>
				<li>
					<p class="clients"><span class="glyphicon glyphicon-cloud"></span> Clients</p>

					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</li>
				<li>
					<p class="home"><span class="glyphicon glyphicon-home"></span> Home</p>
					
					<ul>
						<li class="home-link">Copyright &copy; <?php echo date('Y'); ?>,  <a style="color:#7D8691 !important;" href="<?php echo $options['copy_url']; ?>"><?php echo $options['copyright']; ?></a> <br>All rights reserved</li>
					</ul>
						<br />
					
				</li>
			</ul>
</footer>