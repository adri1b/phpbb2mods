<?php
/***************************************************************************
 *						lang_extend_merge.php [French]
 *						------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 21/10/2003
 *	Translation author	: Carpe Diem
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

$lang['Refresh'] = 'Uppdatera'; 
$lang['Merge_topics'] = 'Sammansl� str�ngar'; 
$lang['Merge_title'] = 'Ny str�ngtitel'; 
$lang['Merge_title_explain'] = 'Detta kommer att bli den nya titeln f�r str�ngen. L�mna det blankt om du ist�llet vill att systemet ska anv�nda destinationsstr�ngens titel'; 
$lang['Merge_topic_from'] = 'Str�ng att sl� samman'; 
$lang['Merge_topic_from_explain'] = 'Denna str�ng kommer att sl�s samman med den andra str�ngen. Du kan mata in str�ngens id, hela url:en f�r str�ngen, eller url:en f�r en enskild post i denna str�ng'; 
$lang['Merge_topic_to'] = 'Destinationsstr�ng'; 
$lang['Merge_topic_to_explain'] = 'Denna str�ng kommer att �rva samtliga enskilda poster som fanns i den f�reg�ende str�ngen. Du kan mata in str�ngens id, hela url:en f�r str�ngen, eller url:en f�r en enskild post i denna str�ng'; 
$lang['Merge_from_not_found'] = 'Kunde ej finna n�gon str�ng att sl� samman'; 
$lang['Merge_to_not_found'] = 'Kunde ej finna destinationsstr�ngen att sl� samman med'; 
$lang['Merge_topics_equals'] = 'Du kan ej sl� samman en str�ng med sig sj�lv!'; 
$lang['Merge_from_not_authorized'] = 'Du �r ej beh�rig att v�lja g�ra sammanslagning av str�ngar som kommer fr�n det valda forumet'; 
$lang['Merge_to_not_authorized'] =  'Du �r ej beh�rig att v�lja g�ra sammanslagning till str�ngar som finns i det valda destinationsforumet'; 
$lang['Merge_poll_from'] = 'Det finns en r�ststr�ng att utf�ra sammanslagning p�. R�ststr�ngen kommer att kopieras till destinationsstr�ngen'; 
$lang['Merge_poll_from_and_to'] = 'Destinationsstr�ngen inneh�ller redan en r�ststr�ng. R�ststr�ngen som finns i den gamla str�ngen kommer d�rf�r att raderas bort.'; 
$lang['Merge_confirm_process'] = '�r du s�ker p� att du vill sl� samman <br />"<b>%s</b>"<br />med<br />"<b>%s</b>"'; 
$lang['Merge_topic_done'] = 'Str�ngarna har nu slagits samman p� ett korrekt s�tt';

?>