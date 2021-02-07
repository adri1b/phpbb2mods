<?php
/***************************************************************************
*						 lang_admin_color.php (French)
*							--------------
*	begin		: 30/09/2005
*	copyright	: phantomk
*	email		: phantomk@modmybb.com
*
*	Version		: 0.0.6 - 24/1/2006
*
*	Translation	: calibal
*	email		: cali@xperi-mental.com
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

if (!defined('IN_PHPBB'))
{
	die('Hacking attempt');
}

//
// CH Specific
//
$lang['Enable_cache_colors'] = 'Activer le cache de la table des groupes de couleurs';
$lang['Cache_succeed_colors'] = 'La table des groupes de couleurs � bien �t� mise en cache. Le cache � �t� activ�.';
$lang['Cache_failed_colors'] = 'Mise en cache de la table des groupes de couleurs �chou�e. Le cache � �t� d�sactiv�.';

//
// Multi-Page
//
$lang['AGCM_colors'] = 'Couleurs';
$lang['AGCM_color_admin'] = 'Administration des groupes de couleurs';
$lang['AGCM_color_admin_explain'] = 'Dans ce panneau vous pouvez s�lectionner des coulers diff�rentes pour chaque groupe de chaque th�me, ainsi que le fait d\'afficher ou non la l�gendes de ceux-ci, et leur ordre d\'affichage dans la l�gende.';

//
// Style Select
//
$lang['AGCM_select_style'] = 'Selectionnez un Th�me';
$lang['AGCM_look_up_group_color'] = 'Acc�der aux couleurs des groupes';
$lang['AGCM_edit_all'] = 'Edit all styles';

//
// Style Edit
//
$lang['AGCM_color'] = 'Couleur du groupe:';
$lang['AGCM_color_explain'] = 'Entrez un code � 6 chiffre pour la couleur de ce groupe ou cliquez sur "Trouver une couleur" pour en choisir une en cliquant sur le tableau.';
$lang['AGCM_edit_style'] = 'Editer les couleurs des groupes de: %s'; // Edit subSilver's Group Colors
$lang['AGCM_find_color'] = 'Trouver une couleur';
$lang['AGCM_legend'] = 'Ordre d\'affichage dans la l�gende:';
$lang['AGCM_down'] = 'D�placer vers le bas';
$lang['AGCM_up'] = 'D�placer vers le haut';
$lang['AGCM_session'] = 'Couleur des utilisateurs inactifs:';
$lang['AGCM_session_explain'] = 'Entrez un code � 6 chiffre pour la couleur pour les utilisateurs inactifs afin de signaler leur inactivit�e depuis un certain temps, vous pouvez cliquer sur "Trouver une couleur" pour en choisir une en cliquant sur le tableau.';
$lang['AGCM_anonymous'] = 'Couleur des utilisateurs anonymes:';
$lang['AGCM_anonymous_explain'] = 'Entrez un code � 6 chiffre pour la couleur des utilisateurs anonymes ou cliquez sur "Trouver une couleur" pour en choisir une en cliquant sur le tableau.';
$lang['AGCM_registered'] = 'Couleur des membres enregistr�s:';
$lang['AGCM_registered_explain'] = 'Entrez un code � 6 chiffre pour la couleur des Utilisateurs Enregistr�s ou cliquez sur "Trouver une couleur" pour en choisir une en cliquant sur le tableau.';
$lang['AGCM_time'] = 'S�lectionnez un temps pour les utilisateurs inactifs:';
$lang['AGCM_time_explain'] = 'La couleur des utilisateurs changera une fois le temps s�lectionn� d�pass�, afin de signaler leur �tat. (Les anonymes ne sont pas concern�s par cette option)';
$lang['AGCM_check'] = 'D�sactiver ou Activer la colorisation des utilisateurs inactifs:';
$lang['AGCM_editing_all'] = 'Editing all styles';

//
// agcm_time select
//
$lang['AGCM_15_minute'] = '15 minutes';
$lang['AGCM_1_hour'] = '1 heure';
$lang['AGCM_12_hour'] = '12 heures';
$lang['AGCM_1_day'] = '1 jour or 24 heures';
$lang['AGCM_2_day'] = '2 jours or 48 heures';
$lang['AGCM_1_week'] = '1 semaine ou 7 jours';

//
// Messages
//
$lang['AGCM_click_return_color_admin'] = 'Cliuez %sICI%s pour retourner sur l\'administration des groupes de couleurs.'; // 'Here' is a link
$lang['AGCM_update_successfull'] = 'Les couleurs des groupes de ce thme ont bien �t�s mises � jour';
$lang['AGCM_no_style_exists'] = 'Ce th�me n\'existe pas.';

//
// Version Check
//
$lang['advanced_group_color_management'] = 'Advanced Group Color Management';
$lang['mod_up_to_date'] = 'Your installation of %s is up to date, no updates are available';
$lang['mod_not_up_to_date'] = 'Your installation of %s does <b>not</b> seem to be up to date. Updates are available at <a href="http://www.modmybb.com/" target="_new">http://www.modmybb.com/</a>.';
$lang['current_mod_version'] = 'The latest available version is <b>%s</b>.';
$lang['installed_mod_version'] = 'You are running version <b>%s</b>.';
$lang['mod_version_information'] = 'ModMyBB Installed Mods Version Information';

?>