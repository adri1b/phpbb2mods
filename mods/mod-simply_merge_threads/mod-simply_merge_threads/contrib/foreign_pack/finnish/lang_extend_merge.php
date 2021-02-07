<?php
/***************************************************************************
 *						lang_extend_merge.php [French]
 *						------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 21/10/2003
 *	Translation author	: Wolferine
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
	$lang['Lang_extend_merge'] = 'Simply Merge Threads';
}

$lang['Refresh'] = 'P�ivit�'; 
$lang['Merge_topics'] = 'Yhdist� aiheet'; 
$lang['Merge_title'] = 'Aiheen otsikko'; 
$lang['Merge_title_explain'] = 'T�m� on uuden aiheen lopullinen otsikko. J�t� kentt� tyhj�ksi jos haluat otsikon olevan kohde aiheen otsikko'; 
$lang['Merge_topic_from'] = 'Yhdistett�v� aihe'; 
$lang['Merge_topic_from_explain'] = 'T�m� aihe yhdistet��n toiseen. Voit pist�� aiheen tunnistenumeron, aiheen osoitteen, tai viestin osoitteen t�ss� aiheessa'; 
$lang['Merge_topic_to'] = 'Kohdeaihe'; 
$lang['Merge_topic_to_explain'] = 'T�m� aihe hakee kaikki viestit edelt�v�st� aiheesta. voit pist�� aiheen tunnistenumeron, aiheen osoitteen, tai viestin osoitteen t�ss� aiheessa'; 
$lang['Merge_from_not_found'] = 'Yhdistett�v�� aihetta ei l�ytynyt'; 
$lang['Merge_to_not_found'] = 'Kohdeaihetta ei l�ytynyt'; 
$lang['Merge_topics_equals'] = 'Et voi yhdist�� samaa aihetta'; 
$lang['Merge_from_not_authorized'] = 'Et ole valtuutettu muokkaamaan aiheita foorumista jossa aihe on'; 
$lang['Merge_to_not_authorized'] =  'Et ole valtuutettu muokkaamaan aiheita foorumissa jonne aihe luodaan'; 
$lang['Merge_poll_from'] = 'Yhdistett�v�ss� aiheessa on ��nestys. Se kopioidaan kohdeaiheeseen'; 
$lang['Merge_poll_from_and_to'] = 'Kohdeaiheessa on jo ��nestys. Yhdistett�v�n aiheen ��nestys tuhotaan'; 
$lang['Merge_confirm_process'] = 'Oletko varma ett� haluat yhdist�� <br />"<b>%s</b>"<br />t�h�n<br />"<b>%s</b>"'; 
$lang['Merge_topic_done'] = 'Aiheet ovat onnistuneesti yhdistetty.';

?>