<?php
/***************************************************************************
 *						lang_extend_last_topic_from.php [French]
 *						-------------------------------
 *	begin				: 19/10/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.0 - 19/10/2003
 *
 * redefinition of existing keys
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
	$lang['Lang_extend_last_topics_from'] = 'Last topics from';
}

$lang['Topic_last']						= 'Derniers sujets';
$lang['Topic_last_settings']			= 'Derniers sujets d\'un utilisateur';
$lang['Topic_last_started']				= 'Derniers sujets lanc�s par %s';
$lang['Topic_last_started_title']		= 'Derniers sujets lanc�s par un utilisateur';
$lang['Topic_last_started_explain']		= 'Renseignez ici le nombre de derniers sujets lanc�s par un utilisateur que vous d�sirez voir appara�tre sur son profil. 0 signifie pas d\'affichage.';
$lang['Topic_last_replied']				= 'Derniers sujets auquel %s a particip�';
$lang['Topic_last_replied_title']		= 'Derniers sujets auquel un utilisateur a particip�';
$lang['Topic_last_replied_explain']		= 'Renseignez ici le nombre de derniers sujets auquel un utilisateur a particip� que vous d�sirez voir appara�tre sur son profil. 0 signifie pas d\'affichage.';
$lang['Topic_last_ended']				= 'Derniers sujets clos par %s';
$lang['Topic_last_ended_title']			= 'Derniers sujets clos par un utilisateur';
$lang['Topic_last_ended_explain']		= 'Renseignez ici le nombre de derniers sujets clos par un utilisateur que vous d�sirez voir appara�tre sur son profil. 0 signifie pas d\'affichage.';
$lang['Topic_last_split']				= 'S�parer les sujets par type';
$lang['Topic_last_split_explain']		= 'Ajouter une ligne de s�paration dans les bo�tes d\'affichage par type de messages (annonces, sujets, etc.).';
$lang['Topic_last_forum']				= 'Forum';
$lang['Topic_last_forum_explain']		= 'Afficher le nom du forum o� se situe le sujet.';

?>