##############################################################
## MOD Title: (Polish translation) Oznaczanie post�w jako nieprzeczytane.
## MOD Author: Nux < egil -at- wp.pl > (Maciej Jaros) N/A
## MOD Description:
##		Prosz� nie instalowa� tego t�umaczenia EasyMODem! 
##		Please do not install this translation with EasyMOD.
##
##		MOD daje wszystkim u�ytkownikom mo�liwo�� zmiany daty 
##		ostatniej wizyty. Czas ten (na sp�k� z tzw. ciasteczkami)
##		umo�liwia oznaczanie temat�w jako nieprzeczytanych.
##		Dla przyk�adu je�li kto� zmieni t� dat� na 18 may 2005,
##		to b�dzie mia� wszystkie posty od tej daty b�d� oznaczone 
##		jako nie przeczytane (je�li nie zosta�y ju� zaznaczone jako 
##		przeczytane przez ciasteczka).
##		U�ytkownik mo�e r�wnie� zobaczy� wszystkie tematy 
##		od ustawionej daty (w tym wypdaku ciasteczka nie maj� 
##		znaczenia). Mo�na to osi�gn�� naciskaj�c link 
##		'Zobacz posty od ostatniej wizyty'.
##		
## MOD Version:   1.0.0
##
## Installation Level: Easy
## Installation Time: 1 Minute
##
## Files To Edit: 
##		language/lang_polish/lang_main.php
##
## Included Files:
##		N/A
##
## License: http://opensource.org/licenses/gpl-license.php GNU General Public License v2 
############################################################## 
## For security purposes, please check: http://www.phpbb.com/mods/
## for the latest version of this MOD. Although MODs are checked
## before being allowed in the MODs Database there is no guarantee
## that there are no security problems within the MOD. No support
## will be given for MODs not found within the MODs Database which
## can be found at http://www.phpbb.com/mods/
############################################################## 
## Author Notes: 
##
##	Uwaga: Ten mod dotyczy _tylko_ zmian w pliku j�zykowym, 
##	wi�c najpierw nale�y dokona� zmian wed�ug og�lnego pliku 
##	'change_last_visit.mod'. 
##	Mo�na oczywi�cie pomin�� zmiany wykonywane na pliku 
##	j�zyka angielskiego (je�li nie jest u�ywany).
##
##	R�czna instalacja:
##	 + Je�li natrafisz na polecenie 'AFTER, ADD',
##	   to wstaw kod w nim zawarty ZA ostatni� lini� znalezion�
##	   w poprzednim poleceniu 'FIND'
##	 + Je�li natrafisz na polecenie 'BEFORE, ADD',
##	   to wstaw kod w nim zawarty PRZED pierwsz� lini� znalezion�
##	   w poprzednim poleceniu 'FIND'
##	 + Je�li natrafisz na polecenie 'REPLACE WITH',
##	   to wstaw kod w nim zawarty ZAMIAST wszystkich linii, kt�re
##	   zosta�y odnalezione w poprzednim poleceniu 'FIND'
##
############################################################## 
## MOD History: 
## 
##	2006-01-19 - Version 1.0.0 (RC1)
##	 - pierwsza oficjalna publikacja MODa
##
##	2006-01-17 - Version 0.1.2 (beta)
##	 - naprawione bugi w JavaSkrypcie zwi�zane z obsuwk� czasu/daty
##	 - par� zmian w notatkach MOD�w
##	 - zmiana nazwy MODa
##
##	2006-01-13 - Version 0.1.1 (beta)
##	 - naprawiony bug w JavaSkrypcie
##
##	2006-01-13 - Version 0.1.0 (beta)
##	 - kalendarz w JavaSkrypcie
##
##	2005-05-27 - Version 0.0.2 (beta)
##	 - poprawka w b��du zwi�zanego ze zmian� roku
##
##  	2005-05-26 - Version 0.0.1 (beta)
##	 - pierwsza beta
## 
############################################################## 
## Before Adding This MOD To Your Forum, You Should Back Up All Files Related To This MOD 
##############################################################

#
#------------------[ OPEN ]------------------
#
language/lang_polish/lang_main.php

#
#------------------[ FIND ]------------------
#
# prawie na pocz�tku pliku
#
<?php

#
#------------------[ AFTER, ADD ]------------------
#
# po to, �eby oznaczy� plik jako zmieniony
#
// MOD: modvisit

#
#------------------[ FIND ]------------------
#
# tu� przed ko�cem pliku
#
?>

#
#------------------[ BEFORE, ADD ]------------------
#
# je�li instalowa�e�/-a� EasyMODem, to skasuj napierw
# niepotrzebne zmienne j�zykowe - mi�dzy tym:
# // MOD: modvisit :BEGIN
# a tym:
# // MOD: modvisit :END
#
#
// MOD: modvisit :BEGIN
$lang['Change'] = 'Zmie�';
$lang['Click_return_login'] = 'Kliknij %sTutaj%s aby spr�bowa� ponownie';
$lang['modvisit_title'] = 'Zmiana ustawie� dotycz�cych post�w nieprzeczytanych.';
$lang['modvisit_date_title'] = 'Oznacz jako nieprzeczytane posty od daty:';
$lang['modvisit_explain'] = 'Zostanie zmieniona data Twojej ostatniej wizyty, kt�ra obs�uguje oznaczanie post�w (na sp�k� z tzw. cookiesami) jako przeczytane lub nie.';
$lang['modvisit_date_invalid'] = 'Data jest nieprawid�owa.';
// tu maja byc pojedyncze cudzyslowy, zeby zostalo prawidlowo zinterpretowane przez JavaScript
$lang['modvisit_time_invalid'] = 'Nieprawid�owy format czasu!\nSpr�buj 13:10, albo 14:57:29.';
// MOD: modvisit :END

#
#-----[ SAVE/CLOSE ALL FILES ]------------------------------------------
#
# EoM