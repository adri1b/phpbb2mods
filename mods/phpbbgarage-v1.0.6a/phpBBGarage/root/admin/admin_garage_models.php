<?php
/***************************************************************************
 *                              admin_garage_models.php
 *                            -------------------
 *   begin                : Friday, 06 May 2005
 *   copyright            : (C) Esmond Poynton
 *   email                : esmond.poynton@gmail.com
 *   description          : Provides Vehicle Garage System For phpBB
 *
 *   $Id: admin_garage_models.php,v 0.0.9 06/06/2005 20:47:20 poynesmo Exp $
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

define('IN_PHPBB', true);

if( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$module['Garage']['Makes & Models'] = $filename;
	return;
}

//
// Let's set the root dir for phpBB
//
$phpbb_root_path = '../';
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);
require($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_garage.' . $phpEx);

//Build All Garage Functions For $garage_lib->
include($phpbb_root_path . 'includes/functions_garage.' . $phpEx);

if( isset( $HTTP_POST_VARS['mode'] ) || isset( $HTTP_GET_VARS['mode'] ) )
{
	$mode = ( isset($HTTP_POST_VARS['mode']) ) ? $HTTP_POST_VARS['mode'] : $HTTP_GET_VARS['mode'];
	//message_die(GENERAL_ERROR, 'Mode Is .... ', '', __LINE__, __FILE__, $mode);
}
else
{
	$mode = '';
}

switch($mode)
{
	case 'add_make':

		//Get All Data Posted And Make It Safe To Use
		$str_params = array('make');
		$data = $garage_lib->process_str_vars($str_params);

		//Checks All Required Data Is Present
		$params = array('make');
		$garage_lib->check_required_vars($params);

		//Update The DB With Data Acquired
		$garage_lib->insert_make($data);

		$message = $lang['New_Make_Created'] . "<br /><br />" . sprintf($lang['Click_Return_Garage_Makes'], "<a href=\"" . append_sid("admin_garage_models.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
				
		break;
	case 'modify_make':

		$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
		$make = ( isset($HTTP_GET_VARS['make']) ) ? str_replace("\'", "''", htmlspecialchars(trim($HTTP_GET_VARS['make']))) : str_replace("\'", "''", htmlspecialchars(trim($HTTP_POST_VARS['make'])));
		
		if(!$id)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Make_Specified']);
		}
		if(!$make)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Name_Specified']);
		}

		$sql = "UPDATE ". GARAGE_MAKES_TABLE ."
			SET make = '$make'
			WHERE id = $id";
	
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not create new make', '', __LINE__, __FILE__, $sql);
		}

		$message = $lang['Make_Updated'] . "<br /><br />" . sprintf($lang['Click_Return_Garage_Makes'], "<a href=\"" . append_sid("admin_garage_models.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
		
		break;
	case 'delete_make':

		$id = ( isset($HTTP_POST_VARS['id'] ) ) ? intval($HTTP_POST_VARS['id']) : intval($HTTP_GET_VARS['id']);

		if(!$id)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Make_Specified']);
		}

		$sql = "DELETE FROM ". GARAGE_MAKES_TABLE ."
			WHERE id = $id";
	
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not create new make', '', __LINE__, __FILE__, $sql);
		}

		// Return a message...
		$message = $lang['Make_Deleted'] . "<br /><br />" . sprintf($lang['Click_Return_Garage_Makes'], "<a href=\"" . append_sid("admin_garage_models.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
				
		break;	
	case 'add_model':

		//Get All Data Posted And Make It Safe To Use
		$int_params = array('make_id');
		$int_data = $garage_lib->process_int_vars($int_params);
		$str_params = array('model');
		$str_data = $garage_lib->process_str_vars($str_params);
		$data = $garage_lib->merge_int_str_data($int_data, $str_data);

		//Checks All Required Data Is Present
		$params = array('make_id', 'model');
		$garage_lib->check_required_vars($params);

		//Update The DB With Data Acquired
		$garage_lib->insert_model($data);

		// Return a message...
		$message = $lang['New_Model_Created'] . "<br /><br />" . sprintf($lang['Click_Return_Garage_Makes'], "<a href=\"" . append_sid("admin_garage_models.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
		
		break;	
	case 'modify_model_choice':

		$make_id = ( isset($HTTP_POST_VARS['id'] ) ) ? intval($HTTP_POST_VARS['id']) : intval($HTTP_GET_VARS['id']);
		if(!$make_id)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Make_Specified']);
		}

		$sql = "SELECT id,model
		FROM ".GARAGE_MODELS_TABLE."
		WHERE make_id = $make_id
		ORDER BY model ASC";
	
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not select model data', '', __LINE__, __FILE__, $sql);
		}
	
		$model_list = '';
	
		if($db->sql_numrows($result) != 0)
		{
			$template->assign_block_vars('models_exist', array());
	
			while($row = $db->sql_fetchrow($result))
			{
				$model_list .= '<option value="'.$row['id'].'">'.strip_tags(htmlspecialchars($row['model'])).'</option>';
			}
		}

		$template->set_filenames(array(
			"body" => "admin/garage_model_edit.tpl")
		);

		$template->assign_vars(array(

			'L_GARAGE_MODELS_TITLE' => $lang['Garage_Models_Title'],
			'L_GARAGE_MODELS_EXPLAIN' => $lang['Garage_Models_Explain'],
			'L_MODIFY_MODEL' => $lang['Modify_Model'],
			'L_MODIFY_MODEL_BUTTON' => $lang['Modify_Model_Button'],
			'L_VEHICLE_MAKE' => $lang['Vehicle_Make'],
			'L_VEHICLE_MODEL' => $lang['Vehicle_Model'],
			'L_CHANGE_TO' => $lang['Change_To'],
			'S_GARAGE_MODELS_ACTION' => append_sid('admin_garage_models.'.$phpEx),
			'MODEL_LIST' => $model_list,)

			);

			$template->pparse("body");

		break;

	case 'delete_model_choice':
		$make_id = ( isset($HTTP_POST_VARS['id'] ) ) ? intval($HTTP_POST_VARS['id']) : intval($HTTP_GET_VARS['id']);
		if(!$make_id)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Make_Specified']);
		}

		$sql = "SELECT id,model
		FROM ".GARAGE_MODELS_TABLE."
		WHERE make_id = $make_id
		ORDER BY model ASC";
	
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not select model data', '', __LINE__, __FILE__, $sql);
		}
	
		$model_list = '';
	
		if($db->sql_numrows($result) != 0)
		{
			$template->assign_block_vars('models_exist', array());
	
			while($row = $db->sql_fetchrow($result))
			{
				$model_list .= '<option value="'.$row['id'].'">'.strip_tags(htmlspecialchars($row['model'])).'</option>';
			}
		}

		$template->set_filenames(array(
			"body" => "admin/garage_model_delete.tpl")
		);

		$template->assign_vars(array(

			'L_GARAGE_MODELS_TITLE' => $lang['Garage_Models_Title'],
			'L_GARAGE_MODELS_EXPLAIN' => $lang['Garage_Models_Explain'],
			'L_DELETE_MODEL' => $lang['Delete_Model'],
			'L_DELETE_MODEL_BUTTON' => $lang['Delete_Model_Button'],
			'L_VEHICLE_MAKE' => $lang['Vehicle_Make'],
			'L_VEHICLE_MODEL' => $lang['Vehicle_Model'],
			'L_CHANGE_TO' => $lang['Change_To'],
			'S_GARAGE_MODELS_ACTION' => append_sid('admin_garage_models.'.$phpEx),
			'MODEL_LIST' => $model_list,)

			);

			$template->pparse("body");

		break;

	case 'delete_model':

		$id = ( isset($HTTP_POST_VARS['id'] ) ) ? intval($HTTP_POST_VARS['id']) : intval($HTTP_GET_VARS['id']);

		if(!$id)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Model_Specified']);
		}

		$sql = "DELETE FROM ". GARAGE_MODELS_TABLE ."
			WHERE id = $id";
	
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not create new make', '', __LINE__, __FILE__, $sql);
		}

		// Return a message...
		$message = $lang['Model_Deleted'] . "<br /><br />" . sprintf($lang['Click_Return_Garage_Makes'], "<a href=\"" . append_sid("admin_garage_models.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
				
		break;

	case 'modify_model':

		$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
		$model = ( isset($HTTP_GET_VARS['model']) ) ? str_replace("\'", "''", htmlspecialchars(trim($HTTP_GET_VARS['model']))) : str_replace("\'", "''", htmlspecialchars(trim($HTTP_POST_VARS['model'])));
		
		if(!$id)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Model_Specified']);
		}
		if(!$model)
		{
			message_die(GENERAL_MESSAGE, $lang['No_Name_Specified']);
		}

		$sql = "UPDATE ". GARAGE_MODELS_TABLE ."
			SET model = '$model'
			WHERE id = $id";
	
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not create new make', '', __LINE__, __FILE__, $sql);
		}

		$message = $lang['Model_Updated'] . "<br /><br />" . sprintf($lang['Click_Return_Garage_Makes'], "<a href=\"" . append_sid("admin_garage_models.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
		
		break;

	default:

		$sql = "SELECT id,make 
		FROM ".GARAGE_MAKES_TABLE."
		ORDER BY make ASC";
	
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not select makes data', '', __LINE__, __FILE__, $sql);
		}
	
		$make_list = '';
	
		if($db->sql_numrows($result) != 0)
		{
			$template->assign_block_vars('makes_exist', array());
	
			while($row = $db->sql_fetchrow($result))
			{
				$make_list .= '<option value="'.$row['id'].'">'.strip_tags(htmlspecialchars($row['make'])).'</option>';
			}
		}

		$template->set_filenames(array(
			"body" => "admin/garage_model.tpl")
		);

		$template->assign_vars(array(

			'L_GARAGE_MODELS_TITLE' => $lang['Garage_Models_Title'],
			'L_GARAGE_MODELS_EXPLAIN' => $lang['Garage_Models_Explain'],
			'L_ADD_MAKE' => $lang['Add_Make'],
			'L_ADD_MAKE_BUTTON' => $lang['Add_Make_Button'],
			'L_MODIFY_MAKE' => $lang['Modify_Make'],
			'L_MODIFY_MAKE_BUTTON' => $lang['Modify_Make_Button'],
			'L_DELETE_MAKE' => $lang['Delete_Make'],
			'L_DELETE_MAKE_BUTTON' => $lang['Delete_Make_Button'],
			'L_ADD_MODEL' => $lang['Add_Model'],
			'L_ADD_MODEL_BUTTON' => $lang['Add_Model_Button'],
			'L_MODIFY_MODEL' => $lang['Modify_Model'],
			'L_CHOOSE_MODIFY_MODEL_BUTTON' => $lang['Choose_Modify_Model_Button'],
			'L_DELETE_MODEL' => $lang['Delete_Model'],
			'L_CHOOSE_DELETE_MODEL_BUTTON' => $lang['Choose_Delete_Model_Button'],
			'L_VEHICLE_MAKE' => $lang['Vehicle_Make'],
			'L_VEHICLE_MODEL' => $lang['Vehicle_Model'],
			'L_CHANGE_TO' => $lang['Change_To'],
			'S_GARAGE_MODELS_ACTION' => append_sid('admin_garage_models.'.$phpEx),
			'MAKE_LIST' => $make_list,)

);

$template->pparse("body");

}
// FINISH CHECKING FOR WHATEVER MODE WE AER IN THAT VARS ARE THERE


include('./page_footer_admin.'.$phpEx);

?>
