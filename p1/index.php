<?php require("include/header.php");?>
<?php include "indexProcess.php";?>
<?php 
   $pro   = new indexProcess;
?>

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

<script language="javascript">
  function popupDes(path,topic){
    var p = '<? echo $admin_folder;?>'+path;
    NewWindow("newsEvents.php?file_path="+p+"&topic="+encodeURIComponent(topic),"news_events",550,700,1,1);
  }
  function NewWindow(mypage,myname,w,h,scroll,resize){
     LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
     TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
     settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable='+resize+',z-lock=1,location=0,titlebar=1,menubar=0,toolbar=0,status=0';
      popwindow = window.open(mypage,myname,settings);
	  if(!popwindow)popwindow.window.focus();
}
</script>

		<div id="carousel">
			<img src="images/p1/carousel/home.jpg">
		</div>
		
		<div class="container">
			<div class="content">
				<div class="rows">
					<div class="col-48 left-inline-block">						
						<h3>LATEST NEWS</h3>
						<hr>
						
						<?php
			                $obj_n = $pro->getData_news();
			                $co_n  = count($obj_n);
		                ?>
		                <?php for($i=0;$i<$co_n;$i++){ ?>
						<div class="rows-news-events">
							<div class="bullet"><img src="images/bullet.jpg"></div>
							<div class="name-news-events"><a href="newsEvents.php?type=1&id=<?php echo $obj_n[$i]->id;?>"><?php echo $obj_n[$i]->topic;?></a></div>
						</div>
						<?php } ?>						
					</div>
					
					<div class="span-4 left-inline-block"></div>
					
					<div class="col-48 left-inline-block">
						<h3>UPCOMING EVENTS</h3>
						<hr>
						<?php
		                     $obj_e = $pro->getData_events();
		                     $co_e  = count($obj_e);
	                   ?> 
	                   <?php for($i=0;$i<$co_e;$i++){ ?>
						<div>
							<div class="bullet"><img src="images/bullet.jpg"></div>
							<div class="name-news-events"><a href="newsEvents.php?type=2&id=<?php echo $obj_e[$i]->id;?>"><?php echo $obj_e[$i]->topic;?></a></div>
						</div>
						<?php } ?>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
		</div>
<?php require("include/footer.php");?>