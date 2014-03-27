<?php require("include/header.php");?>
<?php include "indexProcess.php";?>
<?php 
   $pro   = new indexProcess;
   
   $type  = $_GET["type"];
   $id    = $_GET["id"];
   
   settype($type,int);
   switch ($type){
    case  1 :
	         $obj = $pro->getData_news_all();
			 $h   = "News";
	break;
	case 2 :
	         $obj = $pro->getData_events_all();
			 $h   = "Events";
	break;
   }//end switch
   
   $co  = count($obj);
   
   $arr_index = 0;
   //map 
   for($i=0;$i<$co;$i++){
      if($id==$obj[$i]->id){
	    $arr_index = $i;
		break;
	  }//end if
   } //end for
   //map
?>

		<div id="carousel">
			<img src="images/p1/carousel/newsevents.jpg">
		</div>
		<div class="container">
			<div class="content">
				<h2><?php echo $obj[$arr_index]->topic;?></h2>
				<div><?php include $admin_folder.$news_folder.$obj[$arr_index]->file_path;?></div>
			</div>
			
			<div style="padding-bottom: 45px;" class="clear"></div>
		</div>
<?php require("include/footer.php");?>