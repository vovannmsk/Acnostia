$(document).ready(function(){
    // Hidden menu
	$('.button_hidden_menu, .hidden_menu ul li a').on('click', function(){
		$('.hidden_menu').toggle();
	});
});