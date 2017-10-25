<?php
/************************
*
*	Göktuğ Hatipoğlu
*	2017	
*	http://github.com/d35k
*
*************************/

return [
	
	'path' => app_path('Modules'),

	'checkTime' => 30, // Minute 
	
	'modules' => 'App\Modules\\',
	
	'theme' => 'default',
	
	'adminTheme' => 'default',

    'enabledModules' => array(

    ),

    'baseModules' => array(
    	'Users',
    	'Main'
    )
];