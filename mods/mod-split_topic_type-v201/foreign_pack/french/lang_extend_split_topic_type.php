<?php
/***************************************************************************
 *						lang_extend_split_topic_type.php [French]
 *						--------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.0 - 21/10/2003
 *
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

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_split_topic_type'] = 'Split Topic Type';
}

$lang['Split_settings']			= 'S�parer les sujets par type';
$lang['split_global_announce']	= 'S�parer les annonces globales';
$lang['split_announce']			= 'S�parer les annonces standards';
$lang['split_sticky']			= 'S�parer les sujets permanents';
$lang['split_topic_split']		= 'S�parer dans des bo�tes diff�rentes chaque type de sujets';

?>