<? include "indexProcess.php";?>
<? 
   $pro   = new indexProcess;
   $slide_arr = listFileName("slide_pic");
   $slide_img = $slide_arr[rand(0,count($slide_arr)-1)];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IMBA - Master's Degree Program in International Business</title>
<meta name="keywords" content="Business" />
<meta name="description" content="" />
<link href="css/styles_new.css" rel="stylesheet" type="text/css" media="screen" />
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
                <table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" id="tb_content">
                    <tr>
                        <td width="45%" valign="top">
                               <!-- NEWS -->
                              <table width="90%" cellpadding="1" cellspacing="1">
                                     <tr>
                                      <td  align="left" valign="top" class="headPage">
                                        NEWS
                                      </td>
                                     </tr>
                              </table>
                                 <table width="90%" cellpadding="3" cellspacing="2">
                                   <?
                                    $obj_n = $pro->getData_news();
                                    $co_n  = count($obj_n);
                                   ?>
                                    <? for($i=0;$i<$co_n;$i++){ ?>	 
                                     <tr>
                                       <td width="5%" align="center" valign="top" class="Grid2"><img src="images/bullet.jpg"></td>
                                       <td  align="left" valign="top" class="detailPage"  width="95%"><a href="newsEvents.php?type=1&id=<? echo $obj_n[$i]->id;?>"><? echo $obj_n[$i]->topic;?></a></td>
                                     </tr>
                                    <? } ?>
                                 </table>
                              <!-- NEWS -->
                        </td>
                        <td width="45%" valign="top">
                              <!-- EVENT -->
                               <table width="90%" cellpadding="1" cellspacing="1">
                                     <tr>
                                      <td  align="left" valign="top" class="headPage">
                                        EVENTS</td>
                                     </tr>
                              </table>
                                 <table width="90%" cellpadding="3" cellspacing="2">	
                                   <?
                                     $obj_e = $pro->getData_events();
                                     $co_e  = count($obj_e);
                                   ?> 
                                   <? for($i=0;$i<$co_e;$i++){ ?>	 
                                     <tr>
                                       <td width="5%" align="left" valign="top" class="Grid2"><img src="images/bullet.jpg"></td>
                                       <td  align="left" valign="top" class="detailPage"  width="95%"><a href="newsEvents.php?type=2&id=<? echo $obj_e[$i]->id;?>"><? echo $obj_e[$i]->topic;?></a></td>
                                     </tr>
                                    <? } ?>
                              </table>
                              <!-- EVENT -->
                        </td>
                        <td width="10%" valign="top" align="center"><!--<img src="images/banner_right.jpg">-->&nbsp;</td>
                    </tr>
                </table>
                <br>
              <br />
              </div>
              <div id="footer"><? include "footer.txt";?></div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
