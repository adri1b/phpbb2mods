<?php
/***************************************************************************
 *						lang_extend_sub_template.php [French]
 *						----------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.4 - 28/10/2003
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
	$lang['Lang_extend_sub_template'] = 'Sub-template';

	$lang['Subtemplate'] = 'Sub-templates';
	$lang['Subtemplate_explain'] = 'Ici vous vouvez attacher un sous-template � des forums ou des cat�gories';
	$lang['Choose_main_style'] = 'Choisissez un th�me principal';
	$lang['main_style'] = 'Th�me principal';
	$lang['subtpl_name'] = 'Nom du sous-template';
	$lang['subtpl_dir'] = 'R�pertoire du sous-template';
	$lang['subtpl_imagefile'] = 'Fichier de configuration des images';
	$lang['subtpl_create'] = 'Cr�er un nouveau sous-template';
	$lang['subtpl_usage'] = 'Sous-template utilis� dans';
	$lang['Select_dir'] = 'Choisissez un r�pertoire';

	$lang['subtpl_error_name_missing'] = 'Le nom du sous-template est obligatoire';
	$lang['subtpl_error_dir_missing'] = 'Le r�pertoire du sous-template est obligatoire';
	$lang['subtpl_error_no_selection'] = 'Vous n\'avez s�lectionn� ce sous-template dauns aucuns forums ou cat�gories';

	$lang['subtpl_click_return'] = 'Mise � jour effectu�e. Cliquez %sici%s pour retourner � l\'�cran d\'administration des sous-templates';
}

?>