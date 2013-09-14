<?php
//libery
require_once('libs/functions.php');

$options = get_options();
$tree = get_tree("help", $base_url);
$homepage_url = homepage_url($tree);
$docs_url = docs_url($tree);

// Redirect to docs, if there is no homepage
if ($homepage && $homepage_url !== '/') {
	header('Location: '.$homepage_url);
}

//include Server Pfad
require_once('setup.php');
?>
<?php 
########################################### Homeseite
if ($homepage) { 
	
	//Startpage
	include('starting.php');

########################################### Hilfeseiten
} else { 
	
	//Hilfeseiten
	include('helping.php');

} ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo $Server_Link; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $Server_Link; ?>/js/holder.js"></script>		



<?php if ($options['piwik_analytics']) { ?>
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://<?php echo $options['piwik_analytics'];?>/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<?php } ?>

</body>
</html>


