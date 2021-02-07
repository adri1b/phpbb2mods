<?php 
/***************************************************************************
                             lang_smartfeed.php
                             -------------------
    begin                : Mon, Jan 15, 2007
    copyright            : (c) Mark D. Hamill
    email                : mhamill@computer.org

    $Id: $

 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

// lang_smartfeed.php
// Written by Mark D. Hamill, mhamill@computer.org
// This software is designed to work with phpBB Version 2.0.22

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

$lang['smartfeed_atom_10'] = 'Atom 1.0';
$lang['smartfeed_rss_20'] = 'RSS 2.0';
$lang['smartfeed_rss_10'] = 'RSS 1.0';
$lang['smartfeed_rss_091'] = 'RSS 0.91 (RDF) - 15 items maximum';

$lang['smartfeed_copyright'] = ''; // Add a copyright statement for your site if it applies
$lang['smartfeed_editor'] = ''; // Most likely your site will not have a managing editor. If so enter email address of managing editor 
$lang['smartfeed_webmaster'] = ''; // If so inclined, enter email address of the webmaster of the phpBB forum

// Various error messages. Customize or internationalize as you prefer.
$lang['smartfeed_error_title'] = 'Erreur dans vote URL SmartFeed';
$lang['smartfeed_error_introduction'] = 'Il y a une erreur dans l\'URL utilis�e pour r�cup�rer ce flux. Par cons�quent, aucun contenu n\'a �t� retourn�. Utilisez cette information comme guide afin de corriger le probl�me. Veuillez prendre note que vous devez utiliser <a href="%s">ce lien</a> afin de cr�er une URL qui peut �tre utilis�e par SmartFeed. Erreur: ';
$lang['smartfeed_no_e_param'] = 'Le param�tre "u" doit �tre utilis� avec le param�tre "e". ';
$lang['smartfeed_no_u_param'] = 'Le param�tre "e" doit �tre utilis� avec le param�tre "u". ';
$lang['smartfeed_user_table_count_error'] = 'Erreur de la base de donn�es lors de la r�cup�ration du <i>user_id</i> de la table des utilisateurs.';
$lang['smartfeed_user_id_does_not_exist'] = 'Le param�tre "u" ne concorde avec aucun utilisateur de ce site. Le compte pourrait avoir �t� supprim�.';
$lang['smartfeed_user_table_password_error'] = 'Erreur de la base de donn�es lors de la r�cup�ration des mots de passe de la table des utilisateurs.';
$lang['smartfeed_bad_password_error'] = 'L\'identification a �chou�e. Le param�tre "e" "%s" est invalide avec le param�tre "u" de "%s". Cette erreur peut �tre caus�e par la modification de votre mot de passe phpBB, ou une mise � jour de SmartFeed. Pour corriger ce probl�me, veuillez cr�er une nouvelle URL SmartFeed au %s, puis copiez et collez celle-ci dans votre lecteur de flux.';
$lang['smartfeed_forum_access_reg'] = 'Erreur lors de la r�cup�ration d\'une liste de <i>forum_ids</i> � laquelle tous les membres ont acc�s.';
$lang['smartfeed_forum_access_priv'] = 'Erreur lors de la r�cup�ration d\'une liste de <i>forum_ids</i> priv�es.';
$lang['smartfeed_user_error'] = 'Erreur lors de la r�cup�ration de la donn�e <i>user_lastvisit</i> de la table des utilisateurs.';
$lang['smartfeed_limit_format_error'] = 'Le param�tre limitateur n\'est pas d\'une valeur reconnue.';
$lang['smartfeed_retrieve_error'] = 'Impossible de receuillir l\'information de la base de donn�es afin de cr�er le flux.';
$lang['smartfeed_feed_type_error'] = 'SmartFeed n\'accepte pas le type de flux demand�.';
$lang['smartfeed_sort_by_error'] = 'SmartFeed n\'accepte pas la m�thode de tri demand�e.';
$lang['smartfeed_topics_only_error'] = 'SmartFeed n\'accepte pas la valeur du type de sujet demand�e.';
$lang['smartfeed_lastvisit_param'] = 'Le param�tre de la derni�re visite sp�cifi� n\'est pas valide.';
$lang['smartfeed_reset_error'] = 'Erreur de la base de donn�es: impossible de r�initialiser la date de votre derni�re visite.';
$lang['smartfeed_ip_auth_error'] = 'Cette URL ne peut �tre utilis�e afin de r�cup�rer un flux � partir de cette adresse IP. Ex�cutez smartfeed_url.' . $phpEx . ' � partir de ce poste et utilisez la nouvelle URL g�n�r�e afin de r�cup�rer un flux.'; 
$lang['smartfeed_not_logged_in'] = '<b>Puisque vous n\'�tes pas connect� au site, vous pouvez uniquement souscrire � la liste des forums publics affich�e ci-dessous. Veuillez vous  <a href="' . append_sid("login.$phpEx?redirect=smartfeed_url.$phpEx", true) . "\">connecter</a> ou vous <a href=\"./profile.$phpEx?mode=register\">enregistrer</a> si vous d�sirez �galement souscrire aux forums priv�s.</b>";
$lang['smartfeed_remove_yours_error'] = 'La valeur du param�tre <i>removemine</i> est invalide.';
$lang['smartfeed_no_arguments'] = 'Ce script n�cessite des arguments.';
$lang['smartfeed_max_word_size_error'] = 'Le param�tre <i>max_word_size</i> est invalide.';
$lang['smartfeed_first_post_only_error'] = 'Le param�tre <i>firstpostonly</i> est invalide. Si pr�sent, il ne devrait avoir qu\'une valeur de 1.';
$lang['smartfeed_pms_not_for_public_users'] = 'Le param�tre <i>pms</i> n\'est pas autoris� pour les utilisateurs non enregistr�s.';
$lang['smartfeed_bad_pms_value'] = 'Le param�tre <i>pms</i> (pour les messages priv�s) doit avoir une valeur de 1';
$lang['smartfeed_pm_retrieve_error'] = 'Impossible de r�cup�rer les informations concernant la messagerie priv�e de la base de donn�es.';
$lang['smartfeed_pm_count_error'] = 'Impossible d\'obtenir le nombre de messages priv�s de l\'utilisateur de la base de donn�es.';
$lang['smartfeed_p_parameter_obsolete'] = 'Authentication failure. Due to a software upgrade, the "p" parameter is no longer allowed. To solve this problem, create a new SmartFeed URL at %s, then copy and paste the generated URL into your newsreader application.';

// Miscellaneous variables
$lang['smartfeed_feed_title'] = $board_config['sitename'];
$lang['smartfeed_feed_description'] = $board_config['site_desc'];
$lang['smartfeed_image_title'] = $board_config['site_desc'] . ' Logo';
$lang['smartfeed_reply'] = 'R�ponse';
$lang['smartfeed_reply_by'] = 'R�ponse par';
$lang['smartfeed_version'] = 'version';

// These are used by smartfeed_url.php
$lang['smartfeed_feed_type'] = '<b>S�lectionnez le type de flux:</b><br />Soyez certain de choisir un format compatible avec votre lecteur de flux.';
$lang['smartfeed_page_title'] = 'SmartFeed';
$lang['smartfeed_explanation'] = "De plus en plus de gens d�couvrent les avantages que procurent les flux de nouvelles. En utilisant ceux-ci, vous n'avez pas � visiter le site afin de lire son contenu. Un <i>lecteur de flux</i> r�cup�re et affiche les nouvelles de sites Web multiples pour vous.<br /><br />\r\nCertains forums sur ce site ne peuvent �tre lus que par les membres, alors que d'autres requi�rent votre inscription � un Groupe particulier. Normalement, ces forums ne seraient pas accessibles via un flux public. Cependant, ce site utilise <i>SmartFeed</i>. Il s'agit d'un module phpBB qui permet aux utilisateurs connect�s d'avoir acc�s aux flux des forums publics et priv�s de ce site. Le tout est rendu possible par votre identification via une URL particuli�re que vous cr�ez sur cette page. Vous s�lectionnez les forums sur ce site qui vous int�ressent et que vous d�sirez inclure dans votre flux personnalis�. Vous pouvez choisir le format de flux que vous pr�f�rez. SmartFeed supporte les protocoles RSS et Atom. Prenez soin de s�lectionner le format appropri�. En cliquant sur le bouton <i>G�n�rer l'URL</i> pr�s du bas de cette page, vous obtiendrez l'URL particuli�re que vous utiliserez. Copiez et collez cette information dans votre lecteur de flux afin d'acc�der au site avec celui-ci.<br /><br />\r\nSi vous �tes d�butant avec les flux et les lecteurs de nouvelles, nous vous invitons � lire <a href=\"http://fr.wikipedia.org/wiki/Agr%C3%A9gateur\" target=\"_blank\">cet article de Wikip�dia</a>. Il inclus un lien vers de nombreux lecteurs de flux que vous voudrez peut-�tre t�l�charger. Vous pr�f�rerez peut-�tre acc�der aux flux via des sites Web tel que <a href=\"http://www.bloglines.com\" target=\"_blank\">Bloglines</a>, con�u sp�cialement � cet effet.<br /><br />Si vous n'�tes pas enregistr� sur ce site, vous pouvez tout de m�me r�cup�rer un flux. Cependant, vous pouvez uniquement souscrire � la liste des forums publics.";
$lang['smartfeed_lastvisit'] = '<b>R�initialiser la date de votre derni�re visite lorsque vous acc�dez au flux?</b><br />S�lectionnez <i>Oui</i> si vous utiliserez normalement le flux afin de lire le contenu de ce site. S�lectionnez <i>Non</i> si vous visitez r�guli�rement ce site <i>et</i> vous d�sirez que les items du flux apparaissent comme �tant non lus lorsque vous visitez celui-ci. Attention: s�lectionner <i>Non</i> pourrait retourner un flux de taille importante. De plus, vous pourriez remarquer une redondance des articles lors de la mise � jour du flux.';
$lang['smartfeed_yes'] = 'Oui';
$lang['smartfeed_no'] = 'Non';
$lang['smartfeed_all_forums']='Tous les forums';
$lang['smartfeed_select_forums']='<b>Le flux devrait inclure les messages de ces forums:</b>';
$lang['smartfeed_generate_url_text']='G�n�rer l\'URL';
$lang['smartfeed_reset_text']='R�initialiser';
$lang['smartfeed_auth_reg_text']='<i>(Membres enregistr�s uniquement)</i>';
$lang['smartfeed_auth_acl_text']='<i>(Membres acc�s sp�cial uniquement)</i>';
$lang['smartfeed_auth_mod_text']='<i>(Mod�rateurs uniquement)</i>';
$lang['smartfeed_auth_admin_text']='<i>(Administrateurs uniquement)</i>';
$lang['smartfeed_limit_text']='<b>Lors de la r�cup�ration des messages, limiter le flux aux messages publi�s depuis:</b><br />Si vous utilisez un module compl�mentaire pour votre navigateur comme lecteur de flux (tel que Sage pour Firefox), un cookie permanent contenant le moment de votre dernier acc�s au flux sera cr��. Veuillez noter que la majorit� des lecteurs de flux personnels ignorent les cookies.';
$lang['smartfeed_since_last_fetch_or_visit']='La derni�re mise � jour du flux ou visite du site';
$lang['smartfeed_since_last_fetch_or_visit_value']='LF';
$lang['smartfeed_last_week']='7 jours';
$lang['smartfeed_last_week_value']='7 DAY';
$lang['smartfeed_last_day']='24 heures';
$lang['smartfeed_last_day_value']='1 DAY';
$lang['smartfeed_last_12_hours']='12 heures';
$lang['smartfeed_last_12_hours_value']='12 HOUR';
$lang['smartfeed_last_6_hours']='6 heures';
$lang['smartfeed_last_6_hours_value']='6 HOUR';
$lang['smartfeed_last_3_hours']='3 heures';
$lang['smartfeed_last_3_hours_value']='3 HOUR';
$lang['smartfeed_last_1_hours']='1 heure';
$lang['smartfeed_last_1_hours_value']='1 HOUR';
$lang['smartfeed_last_30_minutes']='30 minutes';
$lang['smartfeed_last_30_minutes_value']='30 MINUTE';
$lang['smartfeed_last_15_minutes']='15 minutes';
$lang['smartfeed_last_15_minutes_value']='15 MINUTE';
$lang['smartfeed_sort_by']='<b>Trier par:</b><br />L\'ordre standard est l\'ordre dans lequel les messages apparaissent sur ce Forum, c\'est-�-dire par Cat�gorie, Forum, Sujet (Desc), Date/heure du message.';
$lang['smartfeed_sort_forum_topic']='Ordre standard';
$lang['smartfeed_sort_forum_topic_desc']='Ordre standard, derniers messages en premier';
$lang['smartfeed_sort_post_date']='Date/heure du message';
$lang['smartfeed_sort_post_date_desc']='Date/heure du message, derniers messages en premier';
$lang['smartfeed_count_limit'] = '<b>Nombre maximum de messages dans le flux:</b><br />Entrez une valeur num�rique positive. Entrez <i>All</i> afin d\'obtenir tous les messages qui r�pondent � vos crit�res.';
$lang['smartfeed_no_forums_selected']='Vous n\'avez s�lectionn� aucun forum; ainsi, aucune URL ne peut �tre g�n�r�e. Veuillez s�lectionner au moins un forum.';
$lang['smartfeed_topics_only']='<b>N\'afficher que les nouveaux sujets?</b>';
$lang['smartfeed_url_label']='Apr�s avoir cliqu� sur le bouton <i>G�n�rer l\'URL</i>, celle dont vous avez besoin appara�tra dans la bo�te ci-dessous. <b>Copiez et collez cette information dans votre lecteur de flux.</b> Si vous modifiez vos options, cliquez de nouveau sur <i>G�n�rer l\'URL</i> et vous en obtiendrez une nouvelle.';
$lang['smartfeed_ip_auth']='<b>Activer l\'identification au flux par IP?</b><br />Ceci peut �tre utilis� comme mesure de s�curit� suppl�mentaire afin de pr�venir le piratage d\'URL. L\'URL g�n�r�e ainsi sera valide uniquement pour la plage d\'adresses IP associ�e � votre ordinateur. Par exemple, si votre adresse IP actuelle est 123.45.67.89 et que l\'identification au flux par IP est activ�e, le flux ne sera accessible qu\'� l\'int�rieur de la plage d\'adresses 123.45.67.*.';
$lang['smartfeed_remove_yours']='<b>Exclure mes messages du flux?</b>';
$lang['smartfeed_max_size']='<b>Nombre maximum de mots affich�s par message:</b><br />Entrez une valeur num�rique positive. Entrez <i>All</i> afin d\'afficher le message en entier. Attention: entrer un nombre peut causer des erreurs de validation de flux.';
$lang['smartfeed_max_words_wanted']='All';
$lang['smartfeed_size_error']='Vous devez entrer une valeur num�rique positive ou le mot All dans ce champ.';
$lang['smartfeed_count_limit_error']='Le param�tre <i>count_limit</i> do�t �tre sup�rieur � 0.';
$lang['smartfeed_count_limit_consistency_error']= 'Le param�tre <i>count_limit</i> ne peut �tre utilis� que lorsque le param�tre <i>sort_by</i> est r�gl� sur <i>postdate_desc</i>.';
$lang['smartfeed_first_post_only']='Premier message uniquement?';
$lang['smartfeed_private_messages_in_feed']='<b>Afficher les messages priv�s dans le flux?</b>';
$lang['smartfeed_no_mcrypt'] = '<b>*** Warning! PHP mcrypt extension is not available! Consequently only public forums can be selected. ***</b>';

// Used in Admininstrator interface to smartfeed_url.php
$lang['smartfeed_advertising_interface_title'] = 'Options publicitaires de l\'administrateur';
$lang['smartfeed_enable_ads'] = '<b>Afficher des publicit�s dans le Flux?</b>';
$lang['smartfeed_set_ad_options'] = 'Activer les options publicitaires';
$lang['smartfeed_set_top_options'] = 'Afficher une pub en haut de page';
$lang['smartfeed_set_middle_options'] = 'Afficher une pub entre les items � l\'int�rieur du flux';
$lang['smartfeed_set_bottom_options'] = 'Afficher une pub en bas de page';
$lang['smartfeed_ad_item_title'] = '<b>Titre de la publicit�</b><br />Requis si cette section est activ�e. N\'utilisez que du texte simple; aucun caract�re sp�cial ou HTML.';
$lang['smartfeed_ad_item_link'] = '<b>Lien vers des d�tails suppl�mentaires</b><br />Vous pouvez laisser ce champ vide si non applicable. Assurez-vous que le lien d�bute par http://';
$lang['smartfeed_ad_item_desc'] = '<b>Description compl�te de la publicit�</b><br />Vous pouvez laisser ce champ vide si non applicable. Dans la plupart des cas, vous voudrez ajouter des d�tails suppl�mentaires � propos du produit ou du service offert. Vous pouvez utiliser du texte simple, HTML ou du contenu XML sp�cifiquement adapt� pour les flux RSS ou Atom. Avertissement: ce ne sont pas tous les lecteurs de flux qui afficheront ou convertiront ad�quatement le HTML. Veuillez ne PAS utiliser de Javascript puisque la majorit� des lecteurs de flux ne peuvent ex�cuter le Javascript. Toute barre oblique invers�e (\) sera supprim�e.';
$lang['smartfeed_ad_item_header_top'] = 'Pub en haut de page';
$lang['smartfeed_ad_item_header_middle'] = 'Pub au milieu du flux';
$lang['smartfeed_ad_item_header_bottom'] = 'Pub en bas de page';
$lang['smartfeed_ad_item_repeat'] = '<b>Entrez le nombre d\'items du flux � afficher avant l\'insertion de la publicit�</b><br />Requis et doit �tre sup�rieur � 0.';
$lang['smartfeed_ad_clear'] = 'Effacer tous les champs de la section publicitaire';
$lang['smartfeed_repeat_must_be_numeric'] = 'Le nombre de messages du flux � afficher doit �tre num�ral';
$lang['smartfeed_repeat_must_be_greater_0'] = 'Le nombre de messages du flux � afficher doit �tre sup�rieur � 0';
$lang['smartfeed_title_required'] = 'Si une section est activ�e, son champ titre doit �tre renseign�.';
$lang['smartfeed_advertising_introduction'] = 'Cette section n\'appara�t qu\'aux administrateurs.<br /><br />Smartfeed permet l\'insertion de publicit�s dans les flux offerts aux usagers. Utilisez cette interface pour activer, d�sactiver et configurer les publicit�s. Celles-ci apparaissent comme tout autre item dans le flux, mais sont clairement identifi�es comme �tant des publicit�s. Les publicit�s peuvent appara�trent � trois endroits dans le flux: avant le premier item, au bas du flux, ou p�riodiquement � l\'int�rieur du flux. Prenez note que certains lecteurs de flux, tel que IE 7, permettent � l\'utilisateur de modifier l\'ordre dans lequel les items sont affich�s. Par cons�quent, on ne peut garantir que les publicit�s s\'afficheront � l\'endroit sp�cifi� dans le flux. Chacune des sections peut �tre activ�e ou non. Le contenu peut �tre activ� ou non via la case � cocher principale. S\'il est d�sactiv�, toute information pr�sente dans les champs publicitaires peut �tre activ�e plus tard.<br /><br />Veuillez prendre note qu\'au moment d\'�crire ces lignes, Google Adsense ne supporte pas le RSS et que cons�quemment, le Javascript fournit avec Google Adsense ne fonctionnera sans doute pas. Vous devriez v�rifier le contenu de votre flux avec publicit� vous-m�me � l\'aide d\'une vari�t� de lecteurs de flux afin de vous assurer que le texte s\'affiche correctement et que votre contenu est rendu convenablement. Notez qe des lecteurs de flux diff�rents peuvent donner des r�sultats tout aussi diff�rents.<br /><br />Veuillez vous assurer que votre navigateur est configur� de telle sorte qu\'il accepte l\'ouverture de fen�tres pop-up sur ce site. Autrement, s\'il devait y avoir des messages d\'erreurs, vous pourriez ne pas �tre en mesure de les afficher.';
$lang['smartfeed_advertising_path_error'] = 'Impossible de lire ou de cr�er les fichiers contenant les donn�es de votre publicit�. Ceci pourrait �tre d� au fait que le r�pertoire o� le fichier doit r�sider ne poss�de pas les autorisation n�cessaires.';
$lang['smartfeed_ad_data_saved'] = 'Vos options publicitaires ont �t� enregistr�es';
$lang['smartfeed_ad_data_invalid_user'] = 'Vos options publicitaires n\'ont PAS �t� enregistr�es. Une tentative de piratage est sans doute � l\'origine de cette erreur, pusique l\'utilisateur qui a tent� de sauvegarder les donn�es publicitaires n\'a pas les privil�ges d\'un administrateur.';
$lang['smartfeed_ad_data_access_error'] = 'Impossible d\'acc�der au fichier contenant les informations publicitaires. Sans doute un probl�me li� aux permissions du fichier.';
$lang['smartfeed_ad_feed_category'] = 'Publicit�'; // The feed item category to use for ads, and also in the item title to distinguish the item as advertising
$lang['smartfeed_show_ads_to_public_only'] = 'Afficher des publicit�s aux utilisateurs publics (non enregistr�s) seulement (ne s\'applique que si les publicit�s sont activ�es)';

?>