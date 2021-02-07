<?php

/***************************************************************************
 *                            def_qbar.php
 *                            ------------
 *	begin			: 22/07/2003
 *	copyright		: Ptirhiik
 *	email			: admin@rpgnet-fr.com
 *	version			: 1.0.3 - 29/10/2003
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

//----------------------------------------------------------------------------
//	$qbar_maps[map_name]
//  --------------------
//		[class]				constant : class of bar : System, Bar, Menu
//		[display]			switch : do we display this qbar (System never are)
//		[cells]				value : number of cells used to display the bar before carriage return
//		[in_table]			switch : Do we draw a table around the qbar
//		[style]				value : Qbar specific to a style
//		[sub_template]		value : Qbar specific to a sub-template (optionnal) : *ALL means ignore
//		[fields]			array : options of the qbar
//			[shortcut]		value : lang[] key or value for the shortcut displayed
//			[alternate]		value : lang[] key or value for shortcut when pms are more than one
//			[explain]		value : lang[] key or value for the shortcut used as title or alt on mouseover
//			[icon]			value : images[] key or url to the icon
//			[use_value]		switch : we use the value to display
//			[use_icon]		switch : we use the icon to display
//			[url]			value : url of the prog to call while clicking on shortcut
//			[internal]		switch : does tbe program is in phpBB dirs ? if true, do append_sid() with
//			[auth_logged]	switch : ignore/required/denied to : the option will be display if
//			[auth_admin]	switch : ignore/required/denied to : admin user check
//			[auth_pm]		switch : ignore/new_pm/unread pm/no new nor unread : pm check
//			[tree_id]		value : if the user is authorized to the forum tree level (auth view)
//----------------------------------------------------------------------------

$qbar_maps = array(

	'Menu' => array(
		'class'			=> 'Menu',
		'display'		=> true,
		'cells'			=> 5,
		'in_table'		=> false,
		'style'			=> 0,
		'sub_template'	=> '',
		'fields'		=> array(
			'FAQ' => array(
				'shortcut' 		=> 'FAQ',
				'explain' 		=> 'FAQ_explain',
				'icon' 			=> 'menu_faq',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'faq.php',
				'internal' 		=> true,
			),
			'Search' => array(
				'shortcut' 		=> 'Search',
				'explain' 		=> 'Search_explain',
				'icon' 			=> 'menu_search',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'search.php',
				'internal' 		=> true,
			),
			'Memberlist' => array(
				'shortcut' 		=> 'Memberlist',
				'explain' 		=> 'Memberlist_explain',
				'icon' 			=> 'menu_memberlist',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'memberlist.php',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'Usergroups' => array(
				'shortcut' 		=> 'Usergroups',
				'explain' 		=> 'Usergroups_explain',
				'icon' 			=> 'menu_usergroups',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'groupcp.php',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'Admin_configuration_panel' => array(
				'shortcut' 		=> 'Admin',
				'explain' 		=> 'Admin_explain',
				'icon' 			=> 'menu_admin',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'admin/index.php',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_admin' 	=> 1,
			),
			'Profile' => array(
				'shortcut' 		=> 'Profile',
				'explain' 		=> 'Profile_explain',
				'icon' 			=> 'menu_profile',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'profile.php?mode=editprofile',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'PM_Unlogged' => array(
				'shortcut' 		=> 'Login_check_pm',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'login.php',
				'internal' 		=> true,
				'auth_logged' 	=> 2,
			),
			'PM_New_text' => array(
				'shortcut' 		=> 'New_pm',
				'alternate' 	=> 'New_pms',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'privmsg.php?folder=inbox',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_pm' 		=> 1,
			),
			'PM_Unread_text' => array(
				'shortcut' 		=> 'Unread_pm',
				'alternate' 	=> 'Unread_pms',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'privmsg.php?folder=inbox',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_pm' 		=> 2,
			),
			'PM_No_new_text' => array(
				'shortcut' 		=> 'No_new_pm',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'privmsg.php?folder=inbox',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_pm' 		=> 3,
			),
			'Register' => array(
				'shortcut' 		=> 'Register',
				'explain' 		=> 'Register_explain',
				'icon' 			=> 'menu_register',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'profile.php?mode=register',
				'internal' 		=> true,
				'auth_logged' 	=> 2,
			),
			'Login' => array(
				'shortcut' 		=> 'Login',
				'explain' 		=> 'Login_explain',
				'icon' 			=> 'menu_login',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'login.php',
				'internal' 		=> true,
				'auth_logged' 	=> 2,
			),
			'Logout' => array(
				'shortcut' 		=> 'Logout',
				'explain' 		=> 'Logout_explain',
				'icon' 			=> 'menu_logout',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'login.php?logout=true',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
		),
	),

	'default_menu' => array(
		'class'			=> 'System',
		'display'		=> false,
		'cells'			=> 0,
		'in_table'		=> false,
		'style'			=> 0,
		'sub_template'	=> '',
		'fields'		=> array(
			'FAQ' => array(
				'shortcut' 		=> 'FAQ',
				'explain' 		=> 'FAQ_explain',
				'icon' 			=> 'menu_faq',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'faq.php',
				'internal' 		=> true,
			),
			'Search' => array(
				'shortcut' 		=> 'Search',
				'explain' 		=> 'Search_explain',
				'icon' 			=> 'menu_search',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'search.php',
				'internal' 		=> true,
			),
			'Memberlist' => array(
				'shortcut' 		=> 'Memberlist',
				'explain' 		=> 'Memberlist_explain',
				'icon' 			=> 'menu_memberlist',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'memberlist.php',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'Usergroups' => array(
				'shortcut' 		=> 'Usergroups',
				'explain' 		=> 'Usergroups_explain',
				'icon' 			=> 'menu_usergroups',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'groupcp.php',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'Profile' => array(
				'shortcut' 		=> 'Profile',
				'explain' 		=> 'Profile_explain',
				'icon' 			=> 'menu_profile',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'profile.php?mode=editprofile',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'PM_simple' => array(
				'shortcut' 		=> 'Private_Messaging',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'privmsg.php?folder=inbox',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'PM_Unlogged' => array(
				'shortcut' 		=> 'Login_check_pm',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'login.php',
				'internal' 		=> true,
				'auth_logged' 	=> 2,
			),
			'PM_New_text' => array(
				'shortcut' 		=> 'New_pm',
				'alternate' 	=> 'New_pms',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'privmsg.php?folder=inbox',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_pm' 		=> 1,
			),
			'PM_Unread_text' => array(
				'shortcut' 		=> 'Unread_pm',
				'alternate' 	=> 'Unread_pms',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'privmsg.php?folder=inbox',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_pm' 		=> 2,
			),
			'PM_No_new_text' => array(
				'shortcut' 		=> 'No_new_pm',
				'explain' 		=> 'Private_Messaging_explain',
				'icon' 			=> 'menu_messages',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'privmsg.php?folder=inbox',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_pm' 		=> 3,
			),
			'Register' => array(
				'shortcut' 		=> 'Register',
				'explain' 		=> 'Register_explain',
				'icon' 			=> 'menu_register',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'profile.php?mode=register',
				'internal' 		=> true,
				'auth_logged' 	=> 2,
			),
			'Login' => array(
				'shortcut' 		=> 'Login',
				'explain' 		=> 'Login_explain',
				'icon' 			=> 'menu_login',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'login.php',
				'internal' 		=> true,
				'auth_logged' 	=> 2,
			),
			'Logout' => array(
				'shortcut' 		=> 'Logout',
				'explain' 		=> 'Logout_explain',
				'icon' 			=> 'menu_logout',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'login.php?logout=true',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
			),
			'Admin_configuration_panel' => array(
				'shortcut' 		=> 'Admin',
				'explain' 		=> 'Admin_explain',
				'icon' 			=> 'menu_admin',
				'use_value' 	=> true,
				'use_icon' 		=> true,
				'url' 			=> 'admin/index.php',
				'internal' 		=> true,
				'auth_logged' 	=> 1,
				'auth_admin' 	=> 1,
			),
		),
	),

	// standard forum tree
	'default_tree' => array(
		'class'			=> 'System',
		'display'		=> false,
		'cells'			=> 0,
		'in_table'		=> false,
		'sub_template'	=> '*ALL',
		'fields'		=> array(
		),
	),
);

?>