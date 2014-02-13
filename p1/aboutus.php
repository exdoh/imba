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
                <br>
                 <table cellspacing="3" cellpadding="5" width="100%" border="0" id="tb_content" align="center">
                   <tr>
                     <td colspan="2" align="left" valign="top" class="headPage">About&nbsp;us </td>
                     </tr>
                   <tr>
                    	<td width="20%" valign="top">
                        <table cellspacing="2" cellpadding="1" width="100%" border="0" align="left">
                                        <tbody>
                                            <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><img src="images/bullet.jpg" />&nbsp;<a href="aboutus.php"  style="color:#696969"">What is IMBA?</a></td>
                                            </tr>
                                            <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><img src="images/bullet.jpg" />&nbsp;<a href="aboutus2.php"  style="color:#696969"">What is Change Maker ?</a></td>
                                            </tr>
                                            <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><img src="images/bullet.jpg" />&nbsp;<a href="aboutus3.php"  style="color:#696969"">Our Vision</a></td>
                                            </tr>
                                            <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><img src="images/bullet.jpg" />&nbsp;<a href="aboutus4.php"  style="color:#696969"">Message from the Dean</a></td>
                                               </tr>
                                               <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><img src="images/bullet.jpg" />&nbsp;<a href="aboutus5.php"  style="color:#696969"">Message from the Director</a></td>
                                               </tr>
                                               <tr>
                                               <td width="5%"></td>
                                               <td width="95%"><img src="images/bullet.jpg" />&nbsp;<a href="aboutus6.php"  style="color:#696969"">Study at IMBA</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                     </td>
                        <td width="80%">
                                         <? //include $admin_folder.$content_folder."about.txt";?>	
                                         <table id="tb_content" cellspacing="3" cellpadding="5" >
    <tbody>
        <tr>
            <td colspan="2" class="headAbout">What is IMBA?
            </td>
            </tr>
        <tr>
            <td valign="top" width="25%" align="right"><img alt="" width="90" height="134" src="http://imba.bus.tu.ac.th/imba/admin/userfiles/image/14768994-high(1).jpg" />
            <div style="width: 125px; height: 11px" class="aboutName" align="left">Dr.Edward&nbsp;Rubesch</div>
            <div style="width: 125px; height: 11px" class="aboutName" align="left">Director</div>
            </td>
            <td class="aboutName" valign="top" width="75%">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>IMBA is the International, Innovative, and Impact MBA Program. IMBA focuses specifically on giving the tools to students to be CHANGE MAKERS, in their existing company, family business, new venture, community or their country.</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>IMBA’s curriculum has been designed from the ground up, to enable students to have the necessary tools to compete in today’s business world where the pace of innovation is increasing; there are lower entry barriers, with competitors coming from everywhere in the world; and Asia is increasingly the center of the world’s business.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>IMBA has been designed to develop the skills, mindset, and confidence to be a CHANGE MAKER or somebody who sees the opportunity of competition through Innovation; who wants to be a leader, not just within Thailand, but also in International markets, too; and who wants his or her impact to be felt in society, or in the environment.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>IMBA’s first-year core courses focus in general business studies, such as marketing, management, finance, and strategy to enable students; and by the second year of the program, students explore the challenges and opportunities that come from International, Innovation, or Impact. For all courses, IMBA focuses on moving into action. Students are forced to interact with the marketplace, with customers, with suppliers, with big companies.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>IMBA is run in partnership with Shanghai University of Finance and Economics, the Graduate School of Commerce and Management at Hitotsubashi University in Tokyo, Technology Venture Program at Stanford University , the Green MBA at Dominican University and the Lester Center of Entrepreneurship at the University of California at Berkeley in USA. </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>IMBA is a two-year part-time program, studied at Thammasat University, Tha Prachan Campus.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><br />
                        <br />
                        &nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
                        </td>
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
