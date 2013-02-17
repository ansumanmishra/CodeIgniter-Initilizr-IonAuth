$(function(){
	$("#main_content").fadeIn('slow');

	$("table").tablesorter();
    
     $('.btn').on('click', function () {
		$(this).button("loading");
	});
});