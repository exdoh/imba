	
	    <footer>
	    	<div id="copyright">
	    		<sapn>Copyright © 2013</span> 
	    		<span style="font-weight: bold;">IMBA Program,</span> 
	    		<span>Thammasat Business School.  All Rights Reserved.</span>
	    	</div>
	    	<a href="https://www.facebook.com/IMBAThammasat" target="_blank"><div id="logo-facebook"></div></a>
	    </footer>
  	  </div>
  	  
  	  <script src="JScript/Jquery/jquery-2.0.3.min.js"></script>
  	  
  	  <script type="text/javascript">
			function action_click(name,status)
			{
				if(status == 0)
				{
					$('#' + name + '-des').show();
					$('#' + name).attr('onclick','action_click("' + name + '",1)')
				}
				else if (status == 1)
				{
					$('#' + name + '-des').hide();
					$('#' + name).attr('onclick','action_click("' + name + '",0)')
				}
			}
		</script>
  </body>
</html>