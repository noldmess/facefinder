$(document).ready(function(){
	$('#photoview').hide();
	//$('#photoview img').attr("src", 'http://localhost/owncloud/?app=gallery&getfile=ajax%2FviewImage.php?img=DSC_0019.jpg');//+this.alt);
	alert("dsfdf");
	$('#photoview_load').hide();



$('div.day a img ').click(function(event){
				
			$('#photoview_load').show();
			$('#photoview img').attr("src", '/owncloud/?app=gallery&getfile=ajax%2FviewImage.php?img='+this.alt);
			$('#photoview img').load(function(){
				$('#photoview_load').hide();
			});
			
			$('#photoview img').ready(function(){
				$('#photo p').remove(":contains('dsfsdfsdfsd')");
				$('#photoview img').show();
			});
			$('#new_1').hide();
			$('#photoview').show();
			
			
		

});
$('div.tool_title').click(function(){
	if( $(this).parent().children("div.tool_items").is(":visible")){
		$(this).parent().children("div.tool_items").slideUp(500);
	}else{
		$(this).parent().children("div.tool_items").slideDown(500);
	}
});

$(document).keypress(function(e) {
  alert(e.keyCode);
   if ( e.keyCode== 27){
      $('#photoview').hide();
      $('#new_1').show();
   }
});


});