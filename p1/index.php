<?php require("include/header.php");?>
<?php include "indexProcess.php";?>
<?php 
   $pro   = new indexProcess;
?>

		<div id="carousel">
			<img src="images/p1/carousel/home.jpg">
		</div>
		<div class="container">
			<div class="col-1">
				<div id="news">
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
				
			</div>
			<div class="col-2">
				<div id="events">
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
			</div>
		</div>
<?php require("include/footer.php");?>