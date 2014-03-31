<?php require("include/header.php");?>
<?php require("Configuration/webConfig.php");?>

<!-- Google Analytics -->
<script type="text/javascript">

   var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18762464-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Google Analytics -->

		<div id="carousel">
			<img src="images/p1/carousel/admissions.jpg">
		</div>
		
		<div id="admissions" class="container">
			<div class="content">
				
				<?php include $admin_folder.$content_folder."admission.txt";?>
				
			</div>
		</div>
<?php require("include/footer.php");?>