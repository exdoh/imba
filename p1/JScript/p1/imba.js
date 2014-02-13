function imba(){
	
}

imba.prototype.reset = function()
{	
	/*$('#home').attr('onclick','diamond_brand.click_active("home")');
	$('#products').attr('onclick','diamond_brand.click_active("products")');
	$('#aboutcontact').attr('onclick','diamond_brand.click_active("aboutcontact")');
	
	$('#moredetail').attr('onclick','diamond_brand.click_active("moredetail")');
	
	$('#english').attr('onclick','diamond_brand.change_language("en")');
	$('#thailand').attr('onclick','diamond_brand.change_language("th")');*/
	
	//this.getNumdata();
	
	//this.render_table_diamond_brand_help();	
}

//////Render///////
imba_brand.prototype.render_carousel = function(){
	var param = {
        mode: 'get_categorys'
    };
    
	ajax(service_path+'/products.php', param, 'text', '', function(data){
		var cat = JSON.parse(data).categorys;
		
		if(diamond_brand.languaue == 'en')
		{	
			var content = '<h2 id="our-quality">' + diamond_brand.l_en_home[1] + '</h2>';
		} else {
			var content = '<h2 id="our-quality">' + diamond_brand.l_th_home[1] + '</h2>';
		}
		
		for(var i = 0 ; i < cat.length ; i++)
		{
			content += '<div class="span4">';
				content += '<div class="border-img" onclick="diamond_brand.click_active(\'' + diamond_brand.div_name_slideto_cat[i] + '\')">';
					content += '<img src="images/' + cat[i].image + '" class="img-circle">';
				content += '</div>';
				
			if(diamond_brand.languaue == 'en')
			{	
				content += '<div><h3>' + cat[i].name_en + '</h3></div>';
				content += '<p class="font-standard">' + cat[i].content_en + '</p>';
			} else {
				content += '<div><h3>' + cat[i].name_th + '</h3></div>';
				content += '<p class="font-standard">' + cat[i].content_th + '</p>';
			}
			
			content += '</div>';
		}
		
		$('#home_mid').html(content);
 	});
}

//////Render///////

//////Action///////
//////Action///////