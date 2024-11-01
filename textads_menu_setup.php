<?php 

add_action( 'admin_menu', 'textads_setMenu' );


		
function textads_setMenu(  )

{

	add_menu_page('<span style="color:#f18500">باگ های امنیتی</span>', '<span style="color:#f18500">باگ های امنیتی</span>', 'activate_plugins', "textads_security", 'load_textads_bugs'); 
	add_submenu_page("textads_security", "پکیج های آموزشی", "پکیج های آموزشی", 'activate_plugins', "textads_security_packages", "load_textads_packages");
	add_submenu_page("textads_security", "افزونه و قالب ها", "افزونه و قالب ها", 'activate_plugins', "textads_security_plugins_themes", "load_textads_plugins_themes");	

}



function load_textads_packages(  )
{
	include dirname(__file__)."/textads_packages.php";
}

function load_textads_plugins_themes(  )
{
	include dirname(__file__)."/textads_pluginsthemes.php";
}


function load_textads_bugs(  )
{
	include dirname(__file__)."/textads_bugs.php";
}