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
// This software is designed to work with phpBB Version 2.0.19

if ( !defined('IN_PHPBB') )
{
   die('Hacking attempt');
}

$lang['smartfeed_atom_10'] = 'Atom 1.0';
$lang['smartfeed_rss_20'] = 'RSS 2.0';
$lang['smartfeed_rss_10'] = 'RSS 1.0';
$lang['smartfeed_rss_091'] = 'RSS 0.91 (RDF) - 15 art�culos m�ximo';

$lang['smartfeed_copyright'] = ''; // Add a copyright statement for your site if it applies
$lang['smartfeed_editor'] = ''; // Most likely your site will not have a managing editor. If so enter email address of managing editor
$lang['smartfeed_webmaster'] = ''; // If so inclined, enter email address of the webmaster of the phpBB forum

// Various error messages. Customize or internationalize as you prefer.
$lang['smartfeed_error_title'] = 'Error en su direcci�n URL SmartFeed';
$lang['smartfeed_error_introduction'] = 'Hay un error en la direcci�n URL que uso para recibir las noticias de este newsfeed. Por ello, no obtuviste ning�n contenido. Utiliza este mensaje de error como gu�a para solucionar el problema. Por favor toma nota de lo que debes hacer <a href="%s">este programa</a> para crear una direcci�n URL que pueda utilizarse con el SmartFeed de YOURNAMESITE.com El error es: ';
$lang['smartfeed_no_e_param'] = 'El parametro "u" debe ser usado con el parametro "e"';
$lang['smartfeed_no_u_param'] = 'El parametro "e" debe ser usado con el parametro "u"';
$lang['smartfeed_user_table_count_error'] = 'Erro de la base de datos en obtener la informaci�n de la tabla de usuarios.';
$lang['smartfeed_user_id_does_not_exist'] = '"u" parameter does not match a user_id %s on this site, therefore no articles can be returned.';
$lang['smartfeed_user_table_password_error'] = 'Database error in obtaining password from users table.';
$lang['smartfeed_bad_password_error'] = 'Authentication failure. "e" parameter "%s" is invalid with "u" parameter of "%s". This error may be caused by changing your phpBB password, or due to an upgrade in this SmartFeed software. To solve this problem, create a new SmartFeed URL at %s, then copy and paste the generated URL into your newsreader application.';
$lang['smartfeed_forum_access_reg'] = 'Error retrieving a list forum_ids that all members can access.';
$lang['smartfeed_forum_access_priv'] = 'Error retrieving a list forum_ids that are private.';
$lang['smartfeed_user_error'] = 'Error retrieving user_lastvisit from users table.';
$lang['smartfeed_limit_format_error'] = 'Limit parameter is not a recognized value.';
$lang['smartfeed_retrieve_error'] = 'Unable to retrieve information from database to create newsfeed.';
$lang['smartfeed_feed_type_error'] = 'SmartFeed does not accept the feed type requested.';
$lang['smartfeed_sort_by_error'] = 'SmartFeed cannot accept the sort type requested.';
$lang['smartfeed_topics_only_error'] = 'SmartFeed does not accept the topic type value requested.';
$lang['smartfeed_lastvisit_param'] = 'The lastvisit parameter specified is invalid.';
$lang['smartfeed_reset_error'] = 'Database error: Unable to reset your last visit date.';
$lang['smartfeed_ip_auth_error'] = 'This URL cannot be used to retrieve a newsfeed from this IP address. Run smartfeed_url.' . $phpEx . ' from this machine and use the newly generated URL to retrieve a newsfeed.';
$lang['smartfeed_not_logged_in'] = '<b>Debido a que Ud. no est� logeado en este sitio solo puede suscribirse a la lista de foros p�blicos que se muestran abajo. Por favor <a href="' . append_sid("login.$phpEx?redirect=smartfeed_url.$phpEx", true) . '">conectese</a> como usuario registrado o <a href="./profile.$phpEx?mode=register">registrese</a> si todavia no lo esta en el caso de que desee suscribirse a los foros privados.</b>';
$lang['smartfeed_remove_yours_error'] = 'The removemine parameter value is invalid';
$lang['smartfeed_no_arguments'] = 'This program requires arguments.';
$lang['smartfeed_max_word_size_error'] = 'The max_word_size parameter is invalid.';
$lang['smartfeed_first_post_only_error'] = 'The firstpostonly parameter is invalid. If present it should only have a value of 1.';
$lang['smartfeed_pms_not_for_public_users'] = 'pms parameter is not allowed for non-registered users.';
$lang['smartfeed_bad_pms_value'] = 'The pms parameter (for private messages) must have a value of 1';
$lang['smartfeed_pm_retrieve_error'] = 'Unable to retrieve private message information from database.';
$lang['smartfeed_pm_count_error'] = 'Unable to retrieve the number of private message for user from database.';
$lang['smartfeed_p_parameter_obsolete'] = 'Authentication failure. Due to a software upgrade, the "p" parameter is no longer allowed. To solve this problem, create a new SmartFeed URL at %s, then copy and paste the generated URL into your newsreader application.';

// Miscellaneous variables
$lang['smartfeed_feed_title'] = $board_config['sitename'];
$lang['smartfeed_feed_description'] = $board_config['site_desc'];
$lang['smartfeed_image_title'] = $board_config['site_desc'] . ' Logo';
$lang['smartfeed_wrote'] = 'escrito por';
$lang['smartfeed_reply'] = 'respuesta por';
$lang['smartfeed_at'] = 'at';
$lang['smartfeed_version'] = 'Versi�n';

// These are used by smartfeed_url.php
$lang['smartfeed_feed_type'] = '<b>Selecione el tipo de formato newsfeed:</b><br />(Asegurese que su lector newsreader soporta el formato que usted va a escoger)';
$lang['smartfeed_page_title'] = 'Sindicar post (mensajes) de YOURNAMESITE por SmartFeed';
$lang['smartfeed_explanation'] = "Mucha gente est� descubriendo la conveniencia del contenido sindicado. Al usar las newsfeeds Ud no tiene que vistar este sitio para leer su contenido. Un programa llamado <i>web agregator</i> (agregador de noticias) recupera y presenta las novedades de distintos sitios web.<br /><br />\r\nAlgunos foros en este sitio pueden ser leidos por miembros solamente, o requieren de suscripci�n a un grupo de usuarios apropiado. Normalmente, estos foros no pueden ser accesibles como newsfeed publico. Sin embargo, este sitio est� habilitado con <em>SmartFeed</em>. Esta es una modificaci�n para phpBB que permite a los usuarios conectados accesar a la vez el material restringido y el publico mediante un newsfeed. Esto se lleva a cabo autenticando al usuario con un URL especial que se crea usando esta pagina. Seleccione los foros en este sitio que sean de su inter�s para incluirlo en su newsfeed personalizado. Adem�s debe elegir el formato de newsfeed que prefiera. SmartFeed soporta los protocolos RSS y Atom. Asegurese de elegir el formato adecuado para su agregador de noticias (newsreader). Al presionar el bot�n de Generaci�n de URL al final de esta pagina, ver� el URL especial que usted usar�. Copie y pegue esta informaci�n dentro de su lector de noticias para visualizar este sitio con su agregador preferido.newsreader.<br /><br />\r\nSi usted es nuevo en las newsfeeds y los agregadores web, le sugerimos que lea <a href=\"http://es.wikipedia.org/wiki/Feed\">esta p�gina de Wikipedia</a>. Este art�culo contiene enlaces a varios agregadores de noticias que probablemente le gustar�a usar. Quiz� pueda preferir acceder a sus newsfeed mediante sitios web tal como <a href=\"http://www.bloglines.com\">Bloglines</a> creado para tal fin.<br />Le recomendamos se pase por la <a href=\"http://www.YOURNAMESITE.com/index.php?page=4&mode=forum\">secci�n de Ayuda de YOURNAMESITE</a> y busque donde pone </b>Sindicar noticias por Feeds</b><br /><br />Si a�n no se ha registrado en este sitio, de cualquier manera puede obtener ciertos newsfeed. Sin embargo, solo podr� seleccionar entre los foros publicos.";
$lang['smartfeed_lastvisit'] = '<b>Reset your last visit date when you access the newsfeed?</b><br />(Select "Yes" if you will ordinarily use a newsfeed to read content on this site. Select "No" if you regularly visit this site <i>and</i> you want items in the newsfeed to appear as unread when you visit the site. Caution: Selecting "No" may give you very long newsfeeds. In addition, you may notice redundant articles the next time you access your newsfeed.)';
$lang['smartfeed_yes'] = 'Si';
$lang['smartfeed_no'] = 'No';
$lang['smartfeed_all_forums']='Suscribirse a todos los foros';
$lang['smartfeed_select_forums']='<b>El Newsfeed debe incluir los posts de los siguientes foros:</b>';
$lang['smartfeed_generate_url_text']='Generar URL';
$lang['smartfeed_reset_text']='Reiniciar';
$lang['smartfeed_auth_reg_text']='<i>(Solo Usuarios Registrados)</i>';
$lang['smartfeed_auth_acl_text']='<i>(Solo Miembros de un Grupo)</i>';
$lang['smartfeed_auth_mod_text']='<i>(Solo Moderadores)</i>';
$lang['smartfeed_auth_admin_text']='<i>(Solo Administradores)</i>';
$lang['smartfeed_limit_text']='<b>Cuando se recuperen los posts, limitar newsfeed a posts:</b><br />(Si usa un navegador con extensiones como Sage para Firefox como agregador de noticias, los cookies anotar�n la �ltima vez que Ud. accedio al newsfeed. Note que muchos agregadores de noticias de escritorio ignorar�n estos cookies.)';
$lang['smartfeed_since_last_fetch_or_visit']='Desde �ltima recuperaci�n de newsfeed o visita al foro';
$lang['smartfeed_since_last_fetch_or_visit_value']='LF';
$lang['smartfeed_last_week']='Desde la �ltima semana';
$lang['smartfeed_last_week_value']='7 DIAS';
$lang['smartfeed_last_day']='En las pasadas 24 Horas';
$lang['smartfeed_last_day_value']='1 DIAS';
$lang['smartfeed_last_12_hours']='En las pasadas 12 Horas';
$lang['smartfeed_last_12_hours_value']='12 HORAS';
$lang['smartfeed_last_6_hours']='En las pasadas 6 Horas';
$lang['smartfeed_last_6_hours_value']='6 HORAS';
$lang['smartfeed_last_3_hours']='En las pasadas 3 Horas';
$lang['smartfeed_last_3_hours_value']='3 HORAS';
$lang['smartfeed_last_1_hours']='En las �ltima hora';
$lang['smartfeed_last_1_hours_value']='1 HORAS';
$lang['smartfeed_last_30_minutes']='En las �ltimos 30 Minutos';
$lang['smartfeed_last_30_minutes_value']='30 MINUTOS';
$lang['smartfeed_last_15_minutes']='En las �ltimos 15 Minutos';
$lang['smartfeed_last_15_minutes_value']='15 MINUTOS';
$lang['smartfeed_sort_by']='<b>Ordenar por:</b><br />(Orden Standard is the order posts are presented in this forum, por ej. Orden de Categor�a, Orden de los Foros, Forum Topic Last Post Time (Desc), Topic Post Fecha/Hora)';
$lang['smartfeed_sort_forum_topic']='Orden Standard';
$lang['smartfeed_sort_forum_topic_desc']='Orden Standard, �ltimos Posts primero';
$lang['smartfeed_sort_post_date']='Post Fecha/Hora';
$lang['smartfeed_sort_post_date_desc']='Post Fecha/Hora, �ltimos Posts primero';
$lang['smartfeed_count_limit'] = '<b>N�mero m�ximo de post (mensajes) en el feed:</b><br />(Introduzca un n�mero positivo. Elija \'Todo\' para ver todos los post encontrados seg�n su criterio.)';
$lang['smartfeed_no_forums_selected']='Usted no ha saleccionado ning�n foro, as� que no se ha generado la URL. Por favor seleccione al menos un foro.';
$lang['smartfeed_topics_only']='<b>�Mostrar solo nuevos t�picos?</b>';
$lang['smartfeed_url_label']='Despues de hacer click en el bot�n de Generar URL, la direcci�n URL que necesitas aparecer� debajo.  <b>Copia y Pega esa direcci�n URL en tu programa de newsreader.</b> Si cambias las opciones de arriba, y vuelves ha hacer click sobre el bot�n de Generar URL, la direcci�n URL de debajo cambiar� ya que se habr� actualizado.';
$lang['smartfeed_ip_auth']='<b>Enable Newsfeed IP Authentication?</b><br />(This can be used as an addition security precaution to limit URL hijacking. The URL that is generated will only be good for the range of IP addresses associated with your computer. For example, if your current IP is 123.45.67.89 and IP Authentication is enabled then the feed will only work in the address range 123.45.67.*.)';
$lang['smartfeed_remove_yours']='<b>Remove your posts from the feed?</b>';
$lang['smartfeed_max_size']='<b>N�mero m�ximo de palabras por post:</b><br />(Introduzca un n�mero positivo. Elija \'Todo\' para ver los mensajes enteros. Peligro: selecionar un n�mero determinado de palabras puede causar errores en el feed.)';
$lang['smartfeed_max_words_wanted']='Todo';
$lang['smartfeed_size_error']='Usted debe introducir un valor positivo o la palabra \'Todo\' en esta casilla';
$lang['smartfeed_count_limit_error']='The count_limit parameter must be greater than 0.';
$lang['smartfeed_count_limit_consistency_error']= 'The count_limit parameter may only used when sort_by parameter is "postdate_desc"';
$lang['smartfeed_first_post_only']='El l�mite a Anuncia Primero S�lo (Aplica s�lo si "S�")';
$lang['smartfeed_private_messages_in_feed']='<b>�Muestra los mensajes privados en la comida?</b>';
$lang['smartfeed_no_mcrypt'] = '<b>*** Warning! PHP mcrypt extension is not available! Consequently only public forums can be selected. ***</b>';

// Used in Admininstrator interface to smartfeed_url.php
$lang['smartfeed_advertising_interface_title'] = 'Opciones de Publicidad de Administrador';
$lang['smartfeed_enable_ads'] = '<b>�Demuestra anuncios en su newsfeed? </b>';
$lang['smartfeed_set_ad_options'] = 'Ponga las opciones de la publicidad';
$lang['smartfeed_set_top_options'] = 'Coloque un anuncio a la cabeza de su newsfeed';
$lang['smartfeed_set_middle_options'] = 'Coloque anuncios entre art�culos en su newsfeed';
$lang['smartfeed_set_bottom_options'] = 'Coloque un anuncio en el fondo de su newsfeed';
$lang['smartfeed_ad_item_title'] = '<b>El t�tulo de anuncio</b><br />(Requiri� si esta secci�n se permite. Utilice texto simple s�lo; ningunos caracteres ni el protocolo de HTML.)';
$lang['smartfeed_ad_item_link'] = '<b>Ligue m�s detallar</b><br />(Usted puede salir este blanco si no aplicable. Cerci�rese los comienzos de la conexi�n con http://)';
$lang['smartfeed_ad_item_desc'] = '<b>Descripci�n repleta de anuncio</b><br />(Usted puede salir este blanco si no aplicable. En la mayor�a de los casos que usted querr� poner detalles adicionales en cuanto al producto o el servicio se ofreciendo. Usted puede utilizar texto simple, el protocolo de HTML de XML espec�ficamente dise�ado para RSS o el Atom alimentan. La advertencia: no todos locutores traducir�n exactamente ni analizar�n sint�cticamente el protocolo de transferencia de hipertexto. Por favor no utilice Javascript como la mayor�a de los locutores no pueden ejecutar Javascript. Los caracteres de la barra inversa (\) ser� quitado.)';
$lang['smartfeed_ad_item_header_top'] = 'La cima de la publicidad de newsfeed';
$lang['smartfeed_ad_item_header_middle'] = 'El centro de la publicidad de newsfeed';
$lang['smartfeed_ad_item_header_bottom'] = 'El fondo de la publicidad de newsfeed';
$lang['smartfeed_ad_item_repeat'] = '<b>Entre el n�mero de art�culos de newsfeed para mostrar antes de meter un anuncio</b><br />(Requerido y debe ser m�s que 0.)';
$lang['smartfeed_ad_clear'] = 'Vac�e Todos Campos de la Secci�n de la Publicidad';
$lang['smartfeed_repeat_must_be_numeric'] = 'Los art�culos de Newsfeed para mostrar debe ser num�rico';
$lang['smartfeed_repeat_must_be_greater_0'] = 'Los art�culos de Newsfeed valoran debe ser m�s que 0';
$lang['smartfeed_title_required'] = 'Si una secci�n se permite, el campo del t�tulo tiene el contenido.';
$lang['smartfeed_advertising_introduction'] = 'Esta secci�n aparece s�lo a Administradores.<br /><br />Smartfeed permite la publicidad para ser metida en el newsfeeds proporcion� a suscriptores. Utilice esto comunica para permitir, incapacitar y poner la publicidad. La publicidad aparece como apenas otro art�culo en la comida, pero se identifica claramente anunciando como. La publicidad se puede colocar en tres �reas en la comida: antes del primer art�culo de comida, en el fondo de la comida, y peri�dicamente dentro de la comida. (Nota que algunos locutores, quieren IE 7, permiten al usuario a cambiar la orden que art�culos se muestran en la comida. Consecuentemente no hay garant�a que los anuncios aparecer�n en el lugar que ellos fueron escritos a en el newsfeed.) Cada secci�n se puede prender o lejos. El contenido puede ser basculado en o lejos con la caja magistral. Si apag�, cualquier informaci�n en los campos de la publicidad se puede permitir m�s tarde. <br /><br />Por favor nota que al esta escritura Google Adsense no sostiene RSS, y consecuentemente Javascript proporcionado con Google Adsense probablemente no trabajar�. Usted debe verificar el contenido de comida con la publicidad para usted mismo en una variedad de locutores para asegurar que el texto pueda ser analizado sint�cticamente y su contenido mostrar� limpiamente. Por favor nota que locutores diferentes pueden mostrar los resultados diferentes. <br /><br />Cerci�rese por favor a su browser es configurado para permitir el taponazo arriba ventanas para este sitio. De otro modo, si hay mensajes de error, usted no los puede ver.';
$lang['smartfeed_advertising_path_error'] = 'Incapaz de leer o crear el archivo que contiene los datos de opciones de publicidad. Puede ser que la gu�a donde el archivo debe residir no tiene los permisos apropiados.';
$lang['smartfeed_ad_data_saved'] = 'Sus datos de opciones de publicidad se salvaron';
$lang['smartfeed_ad_data_invalid_user'] = 'Sus datos de opciones de publicidad no se salvaron. Una tentativa que taja ocurri� probablemente, porque el usuario que trata de salvar los datos de la publicidad no tienen los privilegios de Administrador. ';
$lang['smartfeed_ad_data_access_error'] = 'Incapaz de conseguir acceso al archivo que contiene la informaci�n de la publicidad. Esto es probable un problema de permisos de archivo. ';
$lang['smartfeed_ad_feed_category'] = 'Publicidad'; // The feed item category to use for ads, and also in the item title to distinguish the item as advertising
$lang['smartfeed_show_ads_to_public_only'] = 'Muestre los anuncios al p�blico (no-registrado) usuarios s�lo (aplica s�lo si los anuncios se permiten)';

?>