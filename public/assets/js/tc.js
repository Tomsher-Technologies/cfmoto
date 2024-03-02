function tanchu(n,m)  
                  {  
				  var myPlayer = videojs('my-video');			
				  if($("#"+n).css("display")=="none"){
                   $("#"+n).fadeIn();
				   $("#"+n).find(".tc_k").stop().animate({opacity: 1, top:'50%' });						
						myPlayer.play();
			
				  }else{					     
					 myPlayer.pause();			
				     $("#"+n).find(".tc_k").stop().animate({opacity: 0, top:'20%' });			  
					 $("#"+n).fadeOut();				
					  }
                  }

function tanchu3(n)  
                  {  		
				  		
                    if($("#"+n).css("display")=="none"){
						var pk=document.body.clientWidth;  //获取网页可见宽度			
	             if(pk>=1100){
				   $("#"+n).css("display","block").stop().animate({opacity: 1, top:'50%' });
				 }else{
					  $(".ml_dt_bj").fadeIn();
					 $("#"+n).css("display","block").stop().animate({opacity: 1, top:'15%' });
					 }
					}
                  }

function tanchu3_close(n)  
                  {  
				  var pk=document.body.clientWidth;  //获取网页可见宽度			
	             if(pk>=1100){
				     $("#"+n).css("display","none").stop().animate({opacity: 0, top:'40%' });	
				 }else{
					 $("#"+n).css("display","none").stop().animate({opacity: 0, top:'10%' });
					  $(".ml_dt_bj").fadeOut();	
					 }
					
                  }

//相关改装件弹出层
function tanchu2(n,m)  
			  {  
			   if($("#"+n).css("display")=="none"){
			   $("#"+n).fadeIn();
				$("#owl-demo9").trigger('owl.goTo',m);	
			  }else{					  
				  $("#"+n).fadeOut();					
				  }
			  }
				  

