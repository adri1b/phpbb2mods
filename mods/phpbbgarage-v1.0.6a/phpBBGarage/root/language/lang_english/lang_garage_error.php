<?php
/***************************************************************************
 *                              lang_garage_error.php [English]
 *                            -------------------
 *   begin                : Friday, 06 May 2005
 *   copyright            : (C) Esmond Poynton
 *   email                : esmond.poynton@gmail.com
 *   description          : Provides Vehicle Garage System For phpBB
 *
 *   $Id: lang_garage.php,v 0.1.1 20/07/2005 20:47:20 poynesmo Exp $
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

$lang['Garage_Error_Default'] = '<b>Unknown Problem</b><br /><br />Sorry But We Seem To Have Had A Problem, However It Was Not Listed In Our Error Database.<br /><br />Please Contact The Administrator And Detail Exactly What You Were Doing When The Problem Occured';
$lang['Garage_Error_1'] = '<b>No Business Approved To Be Listed Yet</b><br /><br />Either No Insurance Business Has Been Added Or Any Insurance Business Approved By The Site Administrator To Be Listed Here Yet';
$lang['Garage_Error_2'] = '<b>Need To Sign In</b><br /><br />You must be signed in to create a new vehicle. Please sign in and try again';
$lang['Garage_Error_3'] = '<b>Required Field Missing</b><br /><br />A Field Marked As <span style="color:#FF0000">[Required]</span> Was Not Filled In<br /> Please Use Your Browsers Back Button And Fill It In';
$lang['Garage_Error_4'] = '<b>Vehicle Image Threshold</b><br /><br />You Have Reached The Number Of Images Per Vehicle That The Administrator Has Set. To Upload Anymore Please Delete An Existing Image';
$lang['Garage_Error_5'] = '<b>Vehicle Garage Full</b><br /><br />You Have Reached The Number Of Vehicles That Your Personal Garage Can Hold Set By The Administrator. To Create Anymore Vehicles You Will Need To Delete An Existing Vehicle';
$lang['Garage_Error_6'] = '<b>Image Upload Failed</b><br /><br />The Upload Of The Image Failed. Please Try Upload The Image Again.<br /><br />If You Were Creating/Editting A New Vehicle/Modification/Quartermile Time/Rollingroad Run It Will Still Have Worked, However The Image Will Not Be Attached To It';
$lang['Garage_Error_7'] = '<b>Image Upload Threshold</b><br /><br />The Upload Of The Image Failed Because Its Size Was Greater Than That Allowed By The Administrator. Please Try Upload The Image Again With A Smaller Filesize.<br /><br />If You Were Creating/Editing A New Vehicle/Modification/Quartermile Time/Rollingroad Run It Will Still Have Worked, However The Image Will Not Be Attached To It';
$lang['Garage_Error_8'] = '<b>Image Upload Threshold</b><br /><br />The Upload Of The Image Failed Because Its Resolution Was Greater Than That Allowed By The Administrator. Please Try Upload The Image Again With A Smaller Resolution.<br /><br />If You Were Creating/Editing A New Vehicle/Modification/Quartermile Time/Rollingroad Run It Will Still Have Worked, However The Image Will Not Be Attached To It';
$lang['Garage_Error_9'] = '<b>Dynamic Remote Image</b><br /><br />The Use Of A Remote Image Failed Because It Appears To Be A Dynamic Image Which We Do Not Support.<br />Please Contact The Site And See If They Provide A Static Image Link And Try Again.';
$lang['Garage_Error_10'] = '<b>Remote Image Not Found</b><br /><br />The Use Of A Remote Image Failed Because We Were Unable To Find The Image You Tried To Link To. Please Check The Image Exists.<br /><br />If You Were Creating/Editing A New Vehicle/Modification/Quartermile Time/Rollingroad Run It Will Still Have Worked, However The Image Will Not Be Attached To It';
$lang['Garage_Error_11'] = '<b>Remote Image & Image Upload Both Used</b><br /><br />You Entered Both A Remote Image & A Image For Upload, You Need To Enter One Or The Other.<br /><br />If You Were Creating/Editing A New Vehicle/Modification/Quartermile Time/Rollingroad Run It Will Still Have Worked, However The Image Will Not Be Attached To It';
$lang['Garage_Error_12'] = '<b>Unsupported File Type</b><br /><br />You Entered Both A Image With A Unsupported File Type. We Support The Following File Types : JPG/PNG/GIF<br /><br />If You Were Creating/Editing A New Vehicle/Modification/Quartermile Time/Rollingroad Run It Will Still Have Worked, However The Image Will Not Be Attached To It';
$lang['Garage_Error_13'] = '<b>Not Authorized</b><br /><br />You Have Attempted To Perform A Action That Only A Moderator Or Administration Can Perform';
$lang['Garage_Error_14'] = '<b>Not Authorized</b><br /><br />You Have Attempted To Perform A \'<b>ADD</b>\' Action.<br /><br />The Site Administrator Has Configured The Garage Such That Your Combination Of User Level & User Groups Are Not Allowed Perform This Action.';
$lang['Garage_Error_15'] = '<b>Not Authorized</b><br /><br />You Have Attempted To Perform A \'<b>BROWSE</b>\' Action.<br /><br />The Site Administrator Has Configured The Garage Such That Your Combination Of User Level & User Groups Are Not Allowed Perform This Action.';
$lang['Garage_Error_16'] = '<b>Not Authorized</b><br /><br />You Have Attempted To Perform A \'<b>UPLOAD</b>\' Action.<br /><br />The Site Administrator Has Configured The Garage Such That Your Combination Of User Level & User Groups Are Not Allowed Perform This Action.';
$lang['Garage_Error_17'] = '<b>Not Authorized</b><br /><br />You Have Attempted To Perform A \'<b>INTERACT</b>\' Action.<br /><br />The Site Administrator Has Configured The Garage Such That Your Combination Of User Level & User Groups Are Not Allowed Perform This Action.';
//New In 0.1.1
$lang['Garage_Error_18'] = '<b>Feature Disabled</b><br /><br />You Have Attempted To Access A Feature That The Administrator Has Disabled.';
$lang['Garage_Error_19'] = '<b>No GD Configured In PHP Build</b><br /><br />Your build of PHP is missing the required GDv2 library that is used for all image processing.<br />Any item you were creating will have been created but no image attached. Please configure your PHP build with GDv2 and try again';
$lang['Garage_Error_20'] = '<b>GDv1 Configured In PHP Build</b><br /><br />Your build of PHP is missing the required GDv2 library that is used for all image processing.<br />Any item you were creating will have been created but no image attached. Please configure your PHP build with GDv2 and try again';
$lang['Garage_Error_21'] = '<b>Unable To Rate Vehicle You Own</b><br /><br />Sorry but you are not allowed to rate your own vehicle.';
$lang['Garage_Error_22'] = '<b>You Selected More Than One Business</b><br /><br />Sorry but you are not allowed to select more than one business from the pending list when you are performing this action.';
?>
