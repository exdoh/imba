<? include "indexProcess.php";?>
<? 
   $pro   = new indexProcess;
   $slide_arr = listFileName("slide_pic");
   $slide_img = $slide_arr[rand(0,count($slide_arr)-1)];
?>
<? 
   $type  = $_GET["type"];
   $id    = $_GET["id"];

   $pro   = new indexProcess;  
   
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IMBA - Master's Degree Program in International Business</title>
<meta name="keywords" content="Business" />
<meta name="description" content="" />
<link href="css/styles_new.css" rel="stylesheet" type="text/css" media="screen" />
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
<link rel="stylesheet" type="text/css" href="css/cssverticalmenu.css" />
<script type="text/javascript" src="JScript/cssverticalmenu.js"></script>
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

</head>
<body>
<table cellpadding="0" cellspacing="0"  align="center" border="0" width="1000px">
	<tr>
        <td>
            <div id="frames">
              <div id="header">
                 <? include "head_img.txt";?>
              </div>
              <div id="menu">
                <div id="menu_zone">
                 <? include "menu.txt";?>
                </div>
                <div id="slide_zone">
                  <img width="576" height="233" src="slide_pic/<? echo $slide_img;?>">
                </div>
              </div>
              <div id="content">
                <br>
                 <table width="800" cellpadding="3" cellspacing="5"  align="center">
                 <tr>
                   <td width="100%" align="center"><h2><? echo $obj[$arr_index]->topic;?><br><br></h2></td>
                 </tr>
                 <tr>
                   <td width="100%" align="left"><? include $admin_folder.$news_folder.$obj[$arr_index]->file_path;?></td>
                 </tr>
                </table>
                <br>
                &nbsp;&nbsp;&nbsp;<a href="javascript:history.back();"><--back</a>
                <br>
                <br>
              </div>
              <div id="footer"><? include "footer.txt";?></div>
            </div>
            </td>
        </tr>
    </table>
</body>
</html>
