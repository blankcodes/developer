$("#_open_navbar_menu").on('click', function (){
	$(this).attr('hidden','hidden');
	$("#_close_navbar_menu").removeAttr('hidden','hidden');
});
$("#_close_navbar_menu").on('click', function (){
	$(this).attr('hidden','hidden');
	$("#_open_navbar_menu").removeAttr('hidden','hidden');
});