<? include "functionService.php"; ?>
<? 
   $slide_arr = listFileName("slide_pic");
   $slide_img = $slide_arr[rand(0,count($slide_arr)-1)];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IMBA - Master's Degree Program in Track</title>
<meta name="keywords" content="Business" />
<meta name="description" content="" />
<link href="css/styles_new.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/cssverticalmenu.css" />
<script type="text/javascript" src="JScript/cssverticalmenu.js"></script>
<script language="javascript" src="JScript/JScriptAJAX.js"></script>
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

<script>
<!--
function loadCourse(flag){
   switch(parseInt(flag)){
     case 1 :
	          sendAjax_POST('ajaxLoad_content.php','file=global_a.txt','course_display',false);
	 break;
	 case 2 :
	          sendAjax_POST('ajaxLoad_content.php','file=global_b.txt','course_display',false);
	 break;
   }//end switch
 }

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style>
a {
	color: #333333;
	text-decoration:underline;
}
a.aa {
	color: #333333;
	text-decoration:none;
}
</style>
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
                 <table cellspacing="3" cellpadding="5" width="100%" border="0" id="tb_content" align="center">
                   <tr>
                     <td colspan="2" align="left" valign="top" class="headPage">Courses </td>
                     </tr>
               <tr>
                 <td width="29%" align="left" valign="top" style="padding-left:0px;">
                <br>
                <table cellspacing="2" cellpadding="1" width="100%" border="0" align="left">
                            <tbody>
                                <tr>
                                    <td >
                                     <table cellspacing="2" cellpadding="1" width="100%" border="0" align="left">
                                        <tbody>
                                            <tr>
                                               <td width="5%"></td>
                                               <td width="95%" class="headTrack">Global Entrepreneurship</td>
                                            </tr>
                                            <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><li><a href="#" onclick="loadCourse('1');" class="aa">Plan A (Thesis)</a></li></td>
                                            </tr>
                                            <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><li><a href="javascript:loadCourse('2');" class="aa">Plan B (Non Thesis)</a></li></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                        </tbody>
                      </table>				
                </td>
                <td id="course_display" width="71%" align="left" valign="top"><br />
                <? include $admin_folder.$content_folder."global_a.txt";?>   </td>
             </tr>
            </table>
                <br>
              </div>
              <div id="footer"><? include "footer.txt";?></div>
            </div>
            </td>
        </tr>
    </table>
</body>
</html>
