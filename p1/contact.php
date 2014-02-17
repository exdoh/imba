<?php require("include/header.php");?>

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

		<div id="carousel">
			<img src="images/p1/carousel/contactus.jpg">
		</div>
		
		<div class="container">
			<div class="content">
				<div class="rows">
					<div class="col-100">	
						<h2>CONTACT US</h2>
						<hr>
					</div>
				</div>
				
				<div class="rows">
					<div class="col-63 left-inline-block">
						<div class="text-description-1">
							Thank you for visiting the IMBA website. Please provide us your personal details. 
							We will contact you back within 3 working days.
						</div>
						
						<br>
						
						<div class="text-content-666 font-bold">
							<div class="col-contact-1 left-inline-block">
								<div>Name</div>
								<div>Email</div>
								<div>Telephone</div>
								<div>Address</div>
								<div class="text-padding-subject">Subject</div>
								<div>Message</div>
							</div>
							<div class="col-contact-2 left-inline-block">
								<form name="formact" method="post" action="contactAct.php">
									<div><input type="text" name="name" maxlength="200"></div>
									<div><input type="text" name="email" maxlength="200"></div>
									<div><input type="text" name="phone" maxlength="200"></div>
									<div><textarea id="addr" name="addr"></textarea></div>
									<div>
										<select name="subject">
											  <option value="" selected>Please select the subject</option>
											  <option value="General Enquiries">General Enquiries</option>
											  <option value="Request a Brochure">Request a Brochure</option>
										</select>
									</div>
									<div><textarea id="msg" name="msg"></textarea></div>
									<div style="float: right;"><input name="submit_b" type="button" value="" onClick="submitData();"></div>
								</form>							
							</div>
						</div>
					</div>
					
					<div class="span-3 left-inline-block"></div>
					
					<div class="col-34 left-inline-block">
						<div class="text-content-green font-bold">
							IMBA Program, Thammasat Business School
						</div>
						<div class="text-content-666">
							Faculty of Commerce and Accountancy<br>
							Thammasat University<br> 
							Anake Prasong II Building, 3rd Floor,<br>
							2 Prachan Rd., Pranakorn, Bangkok 10200, Thailand<br><br>
							
							T.     (66) 2 613 2192, (66) 2 613 2194<br>
							F.     (66) 2 224 8107
						</div>
					</div>
				</div>
								
				<div style="padding-bottom: 45px;" class="clear"></div>
				
			</div>
		</div>
<?php require("include/footer.php");?>