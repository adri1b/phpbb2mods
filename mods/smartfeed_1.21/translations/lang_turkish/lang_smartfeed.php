<?php 
/***************************************************************************
                             lang_smartfeed.php
                             -------------------
    begin                : Mon, Sep 3, 2007
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
$lang['smartfeed_error_title'] = 'SmartFeed URL\'nizde hata';
$lang['smartfeed_error_introduction'] = 'Bu haber ak���n� toplamakta kulland���n�z URL\'de bir hata var. Bunun sonucunda, hi�bir i�erik geri d�nmedi. Bu bilgiyi problemi d�zeltmek i�in bir k�lavuz olarak kullan�n. SmartFeed taraf�ndan kullan�labilen bir URL yaratmak i�in l�tfen <a href="%s">Bu ba�lant�y�</a> kullanman�z gerekti�ini not ediniz. Hata: ';
$lang['smartfeed_no_e_param'] = 'Buradaki "u" parametresi "e" parametresi ile birlikte kullan�lmal�d�r. ';
$lang['smartfeed_no_u_param'] = 'Buradaki "e" parametresi "u" parametresi ile birlikte kullan�lmal�d�r. ';
$lang['smartfeed_user_table_count_error'] = 'Kulan�c� tablolar�nda <i>user_id</i> haberlerin derlenmesi s�ras�nda veritabana hatas�.'; // Changed!
$lang['smartfeed_user_id_does_not_exist'] = 'Buradaki "u" parametresi bu sitenin hi�bir kullan�c�s�yla uyu�muyor. Kullan�c� hesab� silinmi� olabilir.';
$lang['smartfeed_user_table_password_error'] = 'Kulan�c� tablolar�n�n �ifrelerinin derlenmesi s�ras�nda veritabana hatas�.';
$lang['smartfeed_bad_password_error'] = 'Tan�t�m ba�ar�s�z. "e" "%s" parametresi "u" parametresiyle ge�ersiz "%s". Bu hata phpbb �ifrenizin de�i�tirilmesinden yada SmartFeed g�ncellenmesinden kaynaklanabilir. Bu sorunu gidermek i�in, %s de yeni bir SmartFeed URL\'si olu�turunuz, daha sonra kopyalay�p haber ak��� okuyucunuza yap��t�r�n�z.';
$lang['smartfeed_forum_access_reg'] = 'T�m �yelerin eri�iminin oldu�u <i>forum_ids</i> forumlar�n listesinin toplan�p derlenmesi s�ras�nda hata.';
$lang['smartfeed_forum_access_priv'] = '�zel <i>forum_ids</i> listesinin derlenmesi s�ras�nda hata.';
$lang['smartfeed_user_error'] = 'Kullan�c� tablolar�n�n <i>user_lastvisit</i> verilerinin derlenmesi s�ras�nda hata.';
$lang['smartfeed_limit_format_error'] = 'S�n�rlay�c� parametre tan�nan bir de�erde de�il.';
$lang['smartfeed_retrieve_error'] = 'Haber ak��� veritaban� bilgilerini derlenememektedir.';
$lang['smartfeed_feed_type_error'] = 'SmartFeed bu t�r ak�� iste�ini kabul etmemektedir.';
$lang['smartfeed_sort_by_error'] = 'SmartFeed s�ralama metodu iste�ini kabul etmemektedir.';
$lang['smartfeed_topics_only_error'] = 'SmartFeed bu tip konu de�eri iste�ini kabul etmemektedir.';
$lang['smartfeed_lastvisit_param'] = 'Belirtilen son ziyaret parametresi ge�ersiz.';
$lang['smartfeed_reset_error'] = 'Veritaban� hatas�: Son ziyaret tarihiniz tekrar g�r�nt�lenemektedir.';
$lang['smartfeed_ip_auth_error'] = 'Bu IP adresinden haber ak���n� derlemek �zere bu URL kullan�labilir. Bu mesajdan smartfeed_url.' . $phpEx . ' yi �al��t�r�n ve bu haber ak���n� derlemek �zere yeni bir URL elde edin.'; 
$lang['smartfeed_not_logged_in'] = '<b>Siteye giri� yapmad���n�z i�in, sadece a�a��da listelenen genel forumlar listesine kaydolabilirsiniz. Ayn� zamanda �zel forumlara da kaydolmak isterseniz l�tfen <a href="' . append_sid("login.$phpEx?redirect=smartfeed_url.$phpEx", true) . "\">giri�</a> yap�n�z yada <a href=\"./profile.$phpEx?mode=register\">kaydolunuz</a> .</b>";
$lang['smartfeed_remove_yours_error'] = 'Buradaki <i>removemine</i> parametresi de�eri ge�ersiz.';
$lang['smartfeed_no_arguments'] = 'Bu script arg�manlar gerektirmektedir.';
$lang['smartfeed_max_word_size_error'] = 'Buradaki <i>max_word_size</i> parametresi ge�ersiz.';
$lang['smartfeed_first_post_only_error'] = 'Buradaki <i>firstpostonly</i> parametresi ge�ersiz. E�er varsa, sadece 1 de�erinde olmal�d�r.';
$lang['smartfeed_pms_not_for_public_users'] = 'Kaydolmam�� �yeler i�in <i>pms</i> parametresi yetkili de�il.';
$lang['smartfeed_bad_pms_value'] = 'Buradaki <i>pms</i> Parametresi (�zel mesajlar i�in) 1 de�erinde olmal�d�r.';
$lang['smartfeed_pm_retrieve_error'] = '�zel mesaj veritaban�yla ilgili bilgiler derlenememektedir.';
$lang['smartfeed_pm_count_error'] = 'Veritaban�ndaki kullan�c� �zel mesaj say�s� elde edilememektedir.';
$lang['smartfeed_p_parameter_obsolete'] = 'Authentication failure. Due to a software upgrade, the "p" parameter is no longer allowed. To solve this problem, create a new SmartFeed URL at %s, then copy and paste the generated URL into your newsreader application.';

// Miscellaneous variables
$lang['smartfeed_feed_title'] = $board_config['sitename'];
$lang['smartfeed_feed_description'] = $board_config['site_desc'];
$lang['smartfeed_image_title'] = $board_config['site_desc'] . ' Logo';
$lang['smartfeed_reply'] = 'Cevap';
$lang['smartfeed_reply_by'] = 'Cevaplayan';
$lang['smartfeed_posted_by'] = 'G�nderen';
$lang['smartfeed_version'] = 'Versiyon';

// These are used by smartfeed_url.php
$lang['smartfeed_feed_type'] = '<b>Haber Ak��� tipini se�iniz:</b><br />Haber ak��� okuyucunuza uygun bir format� se�ti�inizden emin olunuz.';
$lang['smartfeed_page_title'] = 'SmartFeed';
$lang['smartfeed_explanation'] = "Kullan�c�lar g�n�m�zde her ge�en g�n ilgilendikleri konularda bilgi ve haber ak��lar�n� ilgili sitelere girmeden bilgisayarlar�ndan izlemenin avantajlar�n� g�rmektedir. Bu �zellik, ilgilendi�iniz konulardaki son i�erikleri okumak i�in siteleri ziyaret etmeden, bir <i>Haber Ak��� Okuyucusu</i> ile bu bilgileri biraraya getirerek bir�ok sitenin son geli�melerini, bilgilerini ve haberlerini sizin i�in g�r�nt�lemektedir.<br /><br />\r\n Bu sitenin baz� forumlar� �yeler taraf�ndan okunabilir, fakat di�erleri �zel bir gruba kaydolman�z� gerektirir. Normal olarak, Bu t�r forumlara genel haber ak��� yoluyla eri�im yoktur. Bu nedenle, sitemiz <i>SmartFeed</i> kullanarak isteklerinize cevap vermektedir. Smartfeed, sitemize giri� yapan �yelerin genel ve �zel forumlardaki konu, bilgi ve haber ak��lar�na ak�� okuyucular�yla (RSS) eri�imini sa�layan bir phpBB modifikasyonudur. Sitemize giri� yapt�ktan sonra bu sayfada olu�turdu�unuz bir �zel URL yoluyla t�m i�eriklere eri�im m�mk�n hale gelmektedir. Sizi ilgilendiren, ki�iselle�tirmek istedi�iniz ve haber ak���na dahil etmek istedi�iniz forumlar� buradan se�ebilirsiniz. Tercih etti�iniz haber ak��� format�n� da se�ebilirsiniz. SmartFeed RSS ve Atom protokolerini desteklemektedir. Uygun format� se�me konusunda dikkatli olun. A�a��da <i>URL olu�tur</i> butonuna t�klayarak kullanaca��n�z �zel URLyi elde edeceksiniz. Bu bilgiyi kopyalay�p siteye eri�imi sa�lamak �zere haber ak��� okuyucunuza yap��t�r�n�z.<br /><br />\r\n Haber okuyucusu ve haber ak��� konular�nda yeniyseniz, sizi <a href=\"http://fr.wikipedia.org/wiki/Agr%C3%A9gateur\" target=\"_blank\">Wikip�dia n�n bu makalesini</a> okumaya davet ediyoruz. Burada y�klemek isteyebilece�iniz bir �ok haber okuyucusuna y�nlenidirlmi� bir link verilmi�tir. Web tel siteleri yoluyla da haberlere eri�imi tercih edebilirsiniz ki <a href=\"http://www.bloglines.com\" target=\"_blank\">Bloglines</a>, linki �zel olarak bu konuyu kapsamktad�r.<br /><br />Bu siteye kay�tl� �ye de�ilseniz, yine de haber ak���na eri�imi sa�layabilirsiniz. Ancak, sadece genel forumlar�n listesine kaydolabilirsiniz.";
$lang['smartfeed_lastvisit'] = '<b>Ak��a eri�im sa�lamak istedi�inizde son giri� tarihinizi yenilediniz mi?</b><br /> Sitemizin i�eri�ini okumak i�in s�zkonusu ak��� kullan�yorsan�z <i>Evet</i> se�in. Bu siteyi d�zenli olarak ziyaret ediyorsan�z <i>ve</i> siteyi ziyaret etti�inizde ak��taki konular�n okunmad� olarak g�r�nmesini istiyorsan�z <i>Hay�r</i> se�in. Dikkat: �nemli boyutlardaki ak��a d�nmek i�in <i>Hay�r</i> se�in. �lave olarak, ak���n g�ncellenmesi esnas�nda makalelere cevaplar� i�aretleyebilirsiniz.';
$lang['smartfeed_yes'] = 'Evet';
$lang['smartfeed_no'] = 'Hay�r';
$lang['smartfeed_all_forums']='B�t�n Forumlar (��aretle yada i�aretleri kald�r)';
$lang['smartfeed_select_forums']='<b>Haber ak��� bu forumlardan i�aretli olanlara ait mesajlar� ak���n�za dahil edecektir:</b>';
$lang['smartfeed_generate_url_text']='URL olu�tur';
$lang['smartfeed_reset_text']='Yenile';
$lang['smartfeed_auth_reg_text']='<i>(Sadece kay�tl� �yeler)</i>';
$lang['smartfeed_auth_acl_text']='<i>(Sadece �zel eri�imi olan �yeler)</i>';
$lang['smartfeed_auth_mod_text']='<i>(Sadece Moderat�rler)</i>';
$lang['smartfeed_auth_admin_text']='<i>(Sadece Y�neticiler)</i>';
$lang['smartfeed_limit_text']='<b>Mesajlar�n derlenmesi s�ras�nda, buradan yay�nlanan mesaj ak��lar�n� s�n�rland�r�n:</b><br />E�er haber ak��� okuyucusu olarak navigat�r�n�zde ilave bir mod�l kulan�yorsan�z (Firefox i�in Sage gibi), olu�turulacak ak��ta d�zenli olarak bir cookie son eri�im zaman�n�z� tutacakt�r. Haber okuyucular�n�n �o�unlu�unun cookies\'leri tan�mad���n� da belirtmek isteriz.';
$lang['smartfeed_since_last_fetch_or_visit']='Haber ak��� son g�ncelleme veya son site ziyareti';
$lang['smartfeed_since_last_fetch_or_visit_value']='LF';
$lang['smartfeed_last_week']='7 g�n';
$lang['smartfeed_last_week_value']='7 DAY';
$lang['smartfeed_last_day']='24 saat';
$lang['smartfeed_last_day_value']='1 DAY';
$lang['smartfeed_last_12_hours']='12 saat';
$lang['smartfeed_last_12_hours_value']='12 HOUR';
$lang['smartfeed_last_6_hours']='6 saat';
$lang['smartfeed_last_6_hours_value']='6 HOUR';
$lang['smartfeed_last_3_hours']='3 saat';
$lang['smartfeed_last_3_hours_value']='3 HOUR';
$lang['smartfeed_last_1_hours']='1 saat';
$lang['smartfeed_last_1_hours_value']='1 HOUR';
$lang['smartfeed_last_30_minutes']='30 dakika';
$lang['smartfeed_last_30_minutes_value']='30 MINUTE';
$lang['smartfeed_last_15_minutes']='15 dakika';
$lang['smartfeed_last_15_minutes_value']='15 MINUTE';
$lang['smartfeed_sort_by']='<b>S�rala:</b><br />Standart uygulama bu forumda g�r�nen mesajlar�n uygulamas�d�r, Yani kategoriler, Forum, Konu (Desc), Mesaj�n tarih/saati.';
$lang['smartfeed_sort_forum_topic']='Standart Uygulama';
$lang['smartfeed_sort_forum_topic_desc']='Standart uygulama, ilk s�rada son mesajlar';
$lang['smartfeed_sort_post_date']='Mesaj�n tarih/saati';
$lang['smartfeed_sort_post_date_desc']='Mesaj�n tarih/saati, ilk s�rada son mesajlar';
$lang['smartfeed_count_limit'] = '<b>Ak��taki maksimum mesaj say�s�:</b><br />Pozitif n�merik bir de�er giriniz. Kritlerlerinze uygun b�t�n mesajlar� elde etmek i�in <i>All</i> giriniz.';
$lang['smartfeed_no_forums_selected']='Hi�bir forum se�mediniz, bu nedenle, bir URL olu�turulamad�. En az bir forum se�iniz.';
$lang['smartfeed_topics_only']='<b>Sadece yeni konular� g�ster?</b>';
$lang['smartfeed_url_label']='Gereksinim duyaca��n�z haber ak��� URLsi <i>URL olu�tur</i> butonuna bast�ktan sonra alttaki kutucukta g�r�necektir. <b>Bu bilgiyi kopyalay�p haber ak��� okuyucunuza yap��t�r�n�z.</b> Se�eneklerinizi de�i�tirirseniz, yeniden <i>URL Olu�tur</i> butonuna t�klay�n ve yeni bir URL elde edin.';
$lang['smartfeed_ip_auth']='<b>Haber ak���na IP ile tan�mlanmay� aktive ettiniz mi?</b><br />Bu belki URL korsanl��� sald�r�lar�na kar�� ilave g�venlik tedbiri olarak kullan�labilir. Olu�turulan URL sadece bilgisayar�n�zda desteklenen IP adres havuzu i�in ge�erli olacakt�r. �rne�in, Ip ile haber ak��� tan�mlamas� aktif iken ve �u anki IP adresiniz 123.45.67.89 ise, ak�� sadece 123.45.67.*. adresleri aral���ndakilere sayfalar�n i�ine eri�ebilir olacakt�r.';
$lang['smartfeed_remove_yours']='<b>Ak��taki mesajlar�m� d��ar� ��kart?</b>';
$lang['smartfeed_max_size']='<b>Mesaj ba��na g�sterilecek maksimum kelime say�s�:</b><br />Pozitif n�merik bir de�er giriniz. T�m mesajlar� g�stermek i�in <i>All</i> giriniz. Dikkat: Bir say� girmek haber ak���nda hatalara neden olabilir.';
$lang['smartfeed_max_words_wanted']='All';
$lang['smartfeed_size_error']='Bu alana pozitif n�merik bir de�er yada  All kelimesi girilmelidir.';
$lang['smartfeed_count_limit_error']='Burada <i>count_limit</i> parametresi 0\'dan b�y�k olmal�d�r.';
$lang['smartfeed_count_limit_consistency_error']= 'Burada <i>count_limit</i> parametresi sadece <i>sort_by</i> parametresi <i>postdate_desc</i> �zerinde ayarland���nda kullan�labilir.';
$lang['smartfeed_first_post_only']='sadece ilk mesaj?';
$lang['smartfeed_private_messages_in_feed']='<b>Ak��ta �zel mesajlar� g�ster?</b>';
$lang['smartfeed_no_mcrypt'] = '<b>*** Warning! PHP mcrypt extension is not available! Consequently only public forums can be selected. ***</b>';

// Used in Admininstrator interface to smartfeed_url.php
$lang['smartfeed_advertising_interface_title'] = 'Y�neticinin reklam se�enekleri';
$lang['smartfeed_enable_ads'] = '<b>Ak��ta reklamlar� g�ster?</b>';
$lang['smartfeed_set_ad_options'] = 'Reklam fonksiyonunu aktive et';
$lang['smartfeed_set_top_options'] = 'Sayfan�n �zerinde bir reklam g�ster';
$lang['smartfeed_set_middle_options'] = 'Ak�� i�inde konular aras�nda bir reklam g�ster';
$lang['smartfeed_set_bottom_options'] = 'Sayfa alt�nda bir reklam g�ster';
$lang['smartfeed_ad_item_title'] = '<b>Reklam Ba�l���</b><br />Bu b�l�m aktive edildiyse istenmektedir. Sadece basit metin kullan�n; hi� bir �zel karakter veya HTML kullanmay�n.';
$lang['smartfeed_ad_item_link'] = '<b>�lave ayr�nt�lara link</b><br />Uygulanabilir de�ilse bu alan� bo� b�rakabilirsiniz. Linkin http:// ile ba�lad���ndan emin olun';
$lang['smartfeed_ad_item_desc'] = '<b>Reklam�n tam tan�m�</b><br />Uygulanabilir de�ilse bu alan� bo� b�rakabilirsiniz. Bir �ok durumda, sunulan hizmet veya �r�nle ilgili ilave ayr�nt�lar� ekleyebilirsiniz. basit metin kullanabilirsiniz, HTML veya XML i�eri�i RSS veya Atom ak���na spesifik olarak ilave edilmi�tir. Not: Bu b�t�n haber ak��� okuyucular�n�n HTML �evrimi yapt��� yada haber ak��lar�n� d�zg�n bir �ekilde g�sterdi�i anlam�na gelmemelidir. Haber ak��� okuyucular�n�n �o�u desteklemedi�inden Javascript kullanmay�n�z. B�t�n (\) bar� i�indekiler silindi.';
$lang['smartfeed_ad_item_header_top'] = 'Reklam sayfa �zerinde';
$lang['smartfeed_ad_item_header_middle'] = 'Reklam ak���n ortas�nda';
$lang['smartfeed_ad_item_header_bottom'] = 'Reklam sayfa alt�nda';
$lang['smartfeed_ad_item_repeat'] = '<b>Araya reklam girmeden �nce ak��ta g�sterilecek konu say�s�n� giriniz</b><br />�stenmekte ve 0\'dan b�y�k olmal�d�r.';
$lang['smartfeed_ad_clear'] = 'B�t�n reklam b�l�mleri alanlar&#305;n&#305; sil';
$lang['smartfeed_repeat_must_be_numeric'] = 'Ak��ta g�sterilecek mesaj say�s� say�sal olmal�d�r.';
$lang['smartfeed_repeat_must_be_greater_0'] = 'Ak��ta g�sterlecek mesaj say�s� 0\\\'dan b�y�k olmal�d�r.';
$lang['smartfeed_title_required'] = 'Bir b�l�m aktive edildi�inde, ba�l�k alan� bilgilendirilmelidir.';
$lang['smartfeed_advertising_introduction'] = 'Bu b�l�m sadece y�neticilere g�r�n�r.<br /><br />Smartfeed kullan�c�lara sunulan ak�� i�ine reklam girmeye izin verir. Reklamlar� aktive, dezaktive etmek, ayarlamak i�in bu ara y�z� kullan�n. Bunlar di�er b�t�n konular gibi ak��ta g�r�n�rler, fakat reklamlar olarak a��k�a tan�mlanm�� olmal�d�r. Reklamlar ak��ta �� yerde g�sterilebilir: ilk konudan �nce, ak���n alt�nda, veya periyodik olarak ak�� i�inde. IE 7 gibi baz� ak�� okuyucular� i�inde g�sterilecek konularla ilgili uygulamay� de�i�tirmeye izin verdi�ini unutmay�n. Sonu� olarak, reklam�n ak��ta belirtilen yerde g�sterilece�ini garanti edemeyiz. B�l�mlerin her biri aktive edilebilir yada edilmeyebilir. ��aretlenen ba�l�ca kutucuklarla i�erik belki aktive edilmi� yada edilmemi� olabilir. E�er dezaktive edilmi�se, reklam alan�nda mevcut olan b�t�n bilgi daha sonra aktive edilebilir.<br /><br />Bu hatlar�n yaz�m� s�ras�nda Google Adsense RSS ve sonu�lar�n� desteklememektedir. Google Adsense ile sa�lanan javascript bu durumda ��phesiz �al��mayacakt�r. Bizzat ilanlarla haber ak���n�n i�eri�ini bir haber ak��� okuyucusu de�i�keni yard�m�yla reklam metinin d�zg�n bir �ekilde g�r�nt�lenip g�r�nt�lenmedi�ini ve i�eri�inizin uygun olup olmad���n� anlamak �zere g�zden ge�irmelisiniz. Farkl� haber ak��� okuyucular�n�n tamamen farkl� sonu�lar verebilece�ini unutmay�n.<br /><br />Navigat�r�n�z�n bu site �zerinden popup penceresi a��lmas�na izin verecek �ekilde ayarland���n� kontrol edin. ayr�ca, hata mesajlar� al�nd�ysa, g�sterim i�in tedbir alm�� olmad���n�zdand�r.';
$lang['smartfeed_advertising_path_error'] = 'Reklam verilerinizi i�eren dosyalar? olu?turulam?yor ve okunam?yor. Bu durum, haz?r i?levi yerine getirecek klas�r veya dosyan?n gerekli yetkilere sahip olmad???n? g�sterir.';
$lang['smartfeed_ad_data_saved'] = '�lan se�enekleriniz kaydedildi';
$lang['smartfeed_ad_data_invalid_user'] = '�lan se�enekleriniz kaydedilmedi. ��phesiz bir korsan te�ebb�s� bu hatan�n kayna��d�r. ��nk� reklam verilerini yedekleyen kullan�c� y�netici ayr�cal���nda de�il.';
$lang['smartfeed_ad_data_access_error'] = 'Reklam bilgilerini i�eren dosyaya ula��lam�yor. ��phesiz bu dosya izinleriyle ilgili bir problemdir.';
$lang['smartfeed_ad_feed_category'] = 'Reklam'; // The feed item category to use for ads, and also in the item title to distinguish the item as advertising
$lang['smartfeed_show_ads_to_public_only'] = 'Reklamlar� genel kullan�c�lara g�ster (kay�tl� olmayanlar). sadece reklamlar aktive edilmi�se uygulanabilir';

?>
