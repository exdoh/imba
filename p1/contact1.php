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
<script language="javascript" src="JScript/JScriptChkNULL.js"></script>
<script language="javascript">
  function submitData(){
	if(chkNULL(document.formact.name))alert('Please insert name');
	else if(chkNULL(document.formact.email) && chkNULL(document.formact.phone) && chkNULL(document.formact.addr))alert('Please insert at least 1 contact');
	else if(chkNULL(document.formact.subject))alert('Please insert subject');
	else if(chkNULL(document.formact.msg))alert('Please insert message');
	else  document.formact.submit();
  }
</script>
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
                 <form name="formact" method="post" action="contactAct.php">
                      <table  width="100%" cellpadding="2" cellspacing="1">
                       <tr>
                        <td width="2%"></td>
                        <td width="98%" align="left" valign="top">
                        <br>
                       <table  width="800px" cellpadding="2" cellspacing="1">
                          <tr> 
                            <td colspan="2"  align="left" valign="top"><h3>Thank you for visiting IMBA website. Please provide us your personal details. <br>IMBA will contact you back within 3 working days.</h3></td>
                          </tr>
                           <tr> 
                            <td colspan="2"  align="left" valign="top" height="20px"></td>
                          </tr>
                          <tr> 
                            <td width="15%"  align="left" valign="top">Name :</td>
                            <td width="85%"  align="left" valign="top"><input type="text" name="name" class="textfield" style="width:250px" maxlength="200"></td>
                          </tr>
                          <tr> 
                            <td width="15%"  align="left" valign="top" class="normal-size">Email :</td>
                            <td width="85%"  align="left" valign="top"><input type="text" name="email" class="textfield" style="width:250px" maxlength="200"></td>
                          </tr>
                          <tr> 
                            <td width="15%"  align="left" valign="top"  class="normal-size">Telephone NO. :</td>
                            <td width="85%"  align="left" valign="top"><input type="text" name="phone" style="width:250px" maxlength="100"  class="textfield"></td>
                          </tr>
                          <tr> 
                            <td width="15%"  align="left" valign="top"  class="normal-size">Address :</td>
                            <td width="85%"  align="left" valign="top"><textarea name="addr" style="width:250px;height:80px"></textarea></td>
                          </tr>
                          <tr> 
                            <td width="15%"  align="left" valign="top"  class="normal-size">Subject :</td>
                            <td width="85%"  align="left" valign="top"><input type="text" name="subject" style="width:250px" maxlength="500"  class="textfield"></td>
                          </tr>
                          <tr> 
                            <td width="15%"  align="left" valign="top"  class="normal-size">Message :</td>
                            <td width="85%"  align="left" valign="top"><textarea name="msg" style="width:250px;height:70px"></textarea></td>
                          </tr>
                           <tr> 
                            <td width="15%"  align="left" valign="top"></td>
                            <td width="85%"  align="left" valign="top"><input name="submit_b" type="button" value="Submit" style="cursor:pointer" onClick="submitData();"> &nbsp; <input name="cancel_b" type="reset" value="Cancel" style="cursor:pointer" onclick="location.replace('index.php');"></td>
                          </tr>
                     </table>
                     </td>
                    </table>
             </form> 	
                <br>
                <table  width="100%" cellpadding="2" cellspacing="1">
                       <tr>
                        <td width="1%"></td>
                        <td width="99%" align="left" valign="top">
                                IMBA Program<br>
                                Faculty of Commerce and Accountancy<br>
                                Thammasat University <br>
                                Anake Prasong II Building, 3th Floor,<br>
                                2 Prachan Rd., Pranakorn, Bangkok 10200, Thailand<br>
                                Tel: (66-2) 613-2192, (66-2) 613-2194<br>
                                Fax: (66-2) 224-8107
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
