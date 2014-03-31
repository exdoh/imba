	
	    <footer>
	    	<div id="copyright">
	    		<sapn>Copyright © 2013</span> 
	    		<span style="font-weight: bold;">IMBA Program,</span> 
	    		<span>Thammasat Business School.  All Rights Reserved.</span>
	    	</div>
	    	<a href="https://www.facebook.com/IMBAThammasat" target="_blank"><div id="logo-facebook"></div></a>
	    </footer>
  	  </div>
  	  
  	  
  </body>



</html>


<script src="JScript/Jquery/jquery-1.11.0.min.js"></script>
  	  
  	  <script type="text/javascript">

  	  		function isIE( version, comparison ){
			    var $div = $('<div style="display:none;"/>').appendTo($('body'));
			    $div.html('<!--[if '+(comparison||'')+' IE '+(version||'')+']><a>&nbsp;</a><![endif]-->');
			    var ieTest = $div.find('a').length;
			    $div.remove();
			    return ieTest;
			}

			$(document).ready(function(){
				if(isIE(8)){ $('#popup-browser').show(); }
			});
			
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