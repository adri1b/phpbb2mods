<?php
/***************************************************************************
 *						lang_extend_qbar.php [French]
 *						--------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.0 - 28/09/2003
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
	$lang['Lang_extend_qbar']					= 'QBar/Qmenu';

	// title
	$lang['Qbar_admin']							= 'Qbar';
	$lang['Qbar_admin_explain']					= 'Vous pouvez d�finir ici les barres de navigations ainsi que les menus.';
	$lang['Qbar_admin_panel']					= 'D�finition d\'une Qbar';
	$lang['Qbar_admin_panel_explain']			= 'Vous pouvez ici cr�er et modifier les Qbars, ainsi que la fa�on selon laquelle elles appara�tront sur l\'ent�te du forum.';
	$lang['Qbar_admin_field']					= 'Options d\'une Qbar';
	$lang['Qbar_admin_field_explain']			= 'Ici vous pouvez modifier et ajouter des options � une Qbar.';
	$lang['Qbar_admin_import']					= 'Importer une option';
	$lang['Qbar_admin_import_explain']			= 'Cette fonction permet d\'importer une option d\'une autre Qbar.';
	$lang['Qbar_settings']						= 'R�glages';

	// qbar def
	$lang['Qbar_name']							= 'Nom de la Qbar';
	$lang['Qbar_name_explain']					= 'Le nom de la Qbar n\'est jamais affich� � l\'utilisateur : il s\'agit d\'une r�f�rence interne.';
	$lang['Qbar_class']							= 'Classe';
	$lang['Qbar_class_explain']					= 'La classe permet de distinguer une barre situ�e au-dessus de l\'ent�te du forum d\'un menu situ� sur l\'ent�te du forum.';
	$lang['Qbar_display']						= 'Afficher';
	$lang['Qbar_display_explain']				= 'Choisissez "Oui" pour cette option afin que la Qbar soit affich�e sur le forum.';
	$lang['Qbar_cells']							= 'Options par ligne';
	$lang['Qbar_cells_explain']					= 'Nombre d\'options par ligne : si le nombre d\'options de la Qbar d�passe cette valeur, une nouvelle ligne est cr��e lors de l\'affichage.';
	$lang['Qbar_in_table']						= 'Utiliser un tableau';
	$lang['Qbar_in_table_explain']				= 'Cette option permet d\'afficher une Qbar dans un tableau, donnant l\'impression d\'avoir des boutons plut�t que des liens.';
	$lang['Qbar_style']							= 'Lier � un style sp�cifique';
	$lang['Qbar_style_explain']					= 'Si vous s�lectionnez un style sp�cifique, la Qbar ne sera affich�e que lorsque ce style sera utilis� sur le forum.';
	$lang['Qbar_sub_template']					= 'Lier � un sous-template';
	$lang['Qbar_sub_template_explain']			= 'Si vous choisissez un sous-template, la Qbar ne sera affich�e que lorsque le forum utilisera ce sous-template. Choisissez "Aucun" pour n\'afficher la Qbar que lorsqu\'aucun sous-template n\'est utilis�, "Tous" pour l\'afficher quelque soit le sous-template.';

	// field def
	$lang['Qbar_field_name']					= 'Nom de l\'option';
	$lang['Qbar_field_name_explain']			= 'Le nom de l\'option n\'est jamais affich� � l\'utilisateur : il s\'agit d\'une r�f�rence interne.';
	$lang['Qbar_shortcut']						= 'Libell� du lien';
	$lang['Qbar_shortcut_explain']				= 'Le libell� du lien est affich� dans la Qbar. Vous pouvez entrer ici du texte, ou une cl� du tableau des langues. <br />(se r�f�rer � language/lang_<i>votre_language</i>/lang_main.php)';

	$lang['Qbar_explain']						= 'Survol par la souris';
	$lang['Qbar_explain_explain']				= 'Le contenu de cette zone sera affich� lorsque l\'utilisateur passera sa souris sur le lien ou sur l\'ic�ne (mot cl�s HTML : title & alt). Vous pouvez entrer ici du texte, ou une cl� du tableau des langues. <br />(se r�f�rer � language/lang_<i>votre_language</i>/lang_main.php)';
	$lang['Qbar_alternate']						= 'Libell� de lien contextuel';
	$lang['Qbar_alternate_explain']				= 'Le libell� de lien contextuel est utilis� pour afficher un message diff�rent en fonction du nombre de messages priv�s non lus/nouveaux. Vous pouvez entrer ici du texte, ou une cl� du tableau des langues. <br />(se r�f�rer � language/lang_<i>votre_language</i>/lang_main.php)';
	$lang['Qbar_icon']							= 'Ic�ne';
	$lang['Qbar_icon_explain']					= 'Lien vers une ic�ne ou une cl� du tableau des images ($images[]). <br />(se r�f�rer � templates/<i>votre_th�me</i>/<i>votre_th�me</i>.cfg)';
	$lang['Qbar_use_value']						= 'Afficher le lien';
	$lang['Qbar_use_value_explain']				= 'Choisissez "Oui" si vous d�sirez afficher le libell� du lien dans la Qbar.';
	$lang['Qbar_use_icon']						= 'Afficher l\'ic�ne';
	$lang['Qbar_use_icon_explain']				= 'Choisissez "Oui" si vous d�sirez afficher l\'ic�ne dans la Qbar.';
	$lang['Qbar_url']							= 'URL du programme';
	$lang['Qbar_url_explain']					= 'Si le programme se trouve dans les r�pertoires de phpBB, n\'utilisez que l\'URI, sinon renseignez l\'URL complet.';
	$lang['Qbar_internal']						= 'Programme phpBB';
	$lang['Qbar_internal_explain']				= 'En choisissant "Oui", le lien sera consid�r� comme pointant sur un programme phpBB, et son appel sera s�curis�. La cha�ne d\'appel incluera �galement l\'identifiant de session (&sid).';
	$lang['Qbar_auth_logged']					= 'Connect�';
	$lang['Qbar_auth_logged_explain']			= 'Cette option permet de n\'afficher le lien que si le statut de connection de l\'utilisateur correspond au niveau d\'autorisation demand� : "Ignorer" permettra de ne pas tenir compte du statut de connection de l\'utilisateur.';
	$lang['Qbar_auth_admin']					= 'Niveau administrateur';
	$lang['Qbar_auth_admin_explain']			= 'Cette option permet de n\'afficher le lien que si le niveau d\'autorisation de l\'utilisateur correspond au niveau d\'autorisation demand� : "Ignorer" permettra de ne pas tenir compte du niveau d\'autorisation de l\'utilisateur.';
	$lang['Qbar_auth_pm']						= 'Messages priv�s en attente';
	$lang['Qbar_auth_pm_explain']				= 'Cette option permet de n\'afficher le lien que si la situation des messages priv�s de l\'utilisateur correspond au r�glage demand� : "Ignorer" permettra de ne pas tenir compte de la situation des messages priv�s de l\'utilisateur.';
	$lang['Qbar_tree_id']						= 'Arborescence du forum';
	$lang['Qbar_tree_id_explain']				= 'Cette option permet de n\'afficher le lien que si l\'utilisateur est autoris� � voir le forum ou la cat�gorie li� � l\'option : choisir "Aucun" pour ne pas tenir compte de cette protection.';

	$lang['Qbar_auths']							= 'Autorisations';
	$lang['Qbar_private_messages']				= 'Param�trages en fonction des messages priv�s';

	// specific actions
	$lang['Qbar_delete_panel']					= 'Supprimer une Qbar';
	$lang['Qbar_delete_panel_confirm']			= 'Etes-vous s�r de vouloir supprimer la Qbar <b>%s</b> ?';

	$lang['Qbar_delete_field']					= 'Supprimer une option';
	$lang['Qbar_delete_field_confirm']			= 'Etes-vous s�r de vouloir supprimer l\'option <b>%s</b> de la Qbar %s ?';

	// error messages
	$lang['Qbar_error_panel_system']			= 'Vous ne pouvez pas modifier ou supprimer une Qbar syst�me.';
	$lang['Qbar_error_panel_exists']			= 'Le nom de cette Qbar existe d�j�.';
	$lang['Qbar_error_panel_not_found']			= 'Le nom de la Qbar est introuvable.';
	$lang['Qbar_error_panel_empty_name']		= 'Vous devez renseigner le nom de la Qbar.';
	$lang['Qbar_error_panel_empty_cells']		= 'Vous devez fixer un nombre d\'options par ligne pour l\'affichage.';

	$lang['Qbar_error_field_exists']			= 'Le nom de l\'option existe d�j�.';
	$lang['Qbar_error_field_not_found']			= 'Le nom de l\'option est introuvable.';
	$lang['Qbar_error_field_empty_name']		= 'Vous devez renseigner un nom d\'option.';
	$lang['Qbar_error_field_system']			= 'Vous ne pouvez pas modifier ou supprimer une option d\'une Qbar syst�me.';
	$lang['Qbar_error_field_empty_shortcut']	= 'Vous devez renseigner le libell� du lien si vous d�sirez l\'utiliser pour l\'affichage.';
	$lang['Qbar_error_field_empty_icon']		= 'Vous devez renseigner le lien vers l\'ic�ne si vous souhaitez l\'utiliser pour l\'affichage.';
	$lang['Qbar_error_field_display_nothing']	= 'Vous devez s�lectionner au moins le libell� du lien ou l\'ic�ne pour l\'affichage.';
	$lang['Qbar_error_field_empty_url']			= 'Vous devez renseigner l\'URL ou l\'URI du programme cible.';
	$lang['Qbar_error_field_external_url']		= 'Ne sp�cifiez pas de domaine (http://) si vous d�signez le programme comme �tant un programme phpBB.';

	// auths
	$lang['Qbar_auth_ignore']					= 'Ignorer';
	$lang['Qbar_auth_required']					= 'N�cessaire';
	$lang['Qbar_auth_prohibited']				= 'Interdit';
	$lang['Qbar_auth_pm_new']					= 'Nouveaux Messages Priv�s';
	$lang['Qbar_auth_pm_no_new']				= 'Pas de nouveau message priv�';
	$lang['Qbar_auth_pm_unread']				= 'Messages priv�s non lus';

	// classes
	$lang['Qbar_class_system']					= 'Syst�me';
	$lang['Qbar_class_bar']						= 'Barre';
	$lang['Qbar_class_menu']					= 'Menu';

	// generic actions
	$lang['Create_field']						= 'Ajouter une option';
	$lang['Create_panel']						= 'Ajouter une Qbar';

	// misc.
	$lang['Qbar_none']							= '---------- Aucun ----------';
	$lang['Import']								= 'Importer';
	$lang['Refresh']							= 'Actualiser';
	$lang['Qbar_all']							= '---------- Tous ----------';
}

$lang['FAQ_explain']				= 'Questions fr�quemment pos�es';
$lang['Search_explain']				= 'Rechercher dans les forums';
$lang['Memberlist_explain']			= 'Liste des membres enregistr�s';
$lang['Usergroups_explain']			= 'Gestion des groupes';
$lang['Profile_explain']			= 'Editer votre profil';
$lang['Private_Messaging_explain']	= 'Consultez vos messages priv�s';
$lang['Login_explain']				= 'Connectez-vous sous votre profil pour utiliser votre messagerie';
$lang['Register_explain']			= 'S\'enregistrer';
$lang['Logout_explain']				= 'Se d�connecter';
$lang['Admin_explain']				= 'Aller au panneau de configuration de l\'administrateur (ACP)';
$lang['Forum_index_explain']		= 'Index du forum';

?>