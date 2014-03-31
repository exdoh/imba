<? include "functionService.php"; ?>
<? 
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
                <div align="center">
                 <iframe src="http://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=imba.program.tu%40gmail.com&amp;color=%23A32929&amp;ctz=Asia%2FBangkok" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>	
                 </div>
                <br>
              </div>
              <div id="footer"><? include "footer.txt";?></div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
