			<td width="72%" valign="top" >
			<form id="edit_vehicle" enctype="multipart/form-data" method="post" name="edit_vehicle" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="2">{VEHICLE_DATA}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><span class="gen">{L_TITLE}</span></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_YEAR}</b></span></td>
					<td class="row2">{YEAR_LIST} <span class="gensmall" style="color:#FF0000">[{L_REQUIRED}]</span></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MAKE}</b></span></td>
					<td class="row2"><select name="make_id" onchange="updateModelSelect(this.form.model_id, this.options[this.selectedIndex].text, '');" class="forminput"><option value="{MAKE_ID}">{L_SELECT_MODEL}</option></select> <span class="gensmall" style="color:#FF0000">[{L_REQUIRED}]</span>

					<!-- BEGIN enable_user_submit_make -->
						&nbsp;<span class="gensmall">{L_NOT_LISTED_YET}<a href="{U_USER_SUBMIT_MAKE}">{L_HERE}</a></span>
					<!-- END enable_user_submit_make -->
					</td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MODEL}</b></span></td>
					<td class="row2"><select name="model_id" class="forminput"><option value="">{L_ANY_MODEL}</option></select> <span class="gensmall" style="color:#FF0000">[{L_REQUIRED}]</span>
					<!-- BEGIN enable_user_submit_model -->
						&nbsp;<span class="gensmall">{L_NOT_LISTED_YET}<input type="hidden" name="adding_model" value="{ADDING_MODEL}" /><a href="javascript:add_model('YES')">{L_HERE}</a></span>
					<!-- END enable_user_submit_model -->
					</td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_COLOUR}</b></span></td>
					<td class="row2"><input name="colour" type="text" class="post" size="35" value="{COLOUR}" /></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MILEAGE}</b></span></td>
					<td class="row2"><input name="mileage" type="text" class="post" size="15" value="{MILEAGE}" /> {MILEAGE_UNIT_LIST}</td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_PURCHASED_PRICE}</b></span></td>
					<td class="row2"><input name="price" type="text" class="post" size="10" value="{PRICE}" /><span class="gen"> {L_CURRENCY}: </span>{CURRENCY_LIST}</td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_PM_GUESTBOOK_NOTIFICATIONS}</b></span></td>
					<td class="row2"><input type="checkbox" name="guestbook_pm_notify" {CHECKED} ><span class="gensmall">{L_CHECK_FOR_PM}</span></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_DESCRIPTION}</b></span></td>
					<td class="row2"><textarea name="comments" cols="60" rows="5" wrap="soft" class="multitext" value="{COMMENTS}">{COMMENTS}</textarea></td>
				</tr>
				<!-- BEGIN allow_images -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><span class="gen">{L_IMAGE_ATTACHMENTS}</span></td>
				</tr>
				<!-- BEGIN upload_images -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_IMAGE_ATTACH}<br />{L_MAXIMUM_IMAGE_FILE_SIZE} : {MAXIMUM_IMAGE_FILE_SIZE} {L_KBYTES}<br />{L_MAXIMUM_IMAGE_RESOLUTION} : {MAXIMUM_IMAGE_RESOLUTION}</b></span></td>
					<td class="row2"><input class="post" size="30"  type="file" size="30" name="FILE_UPLOAD" /></td>
				</tr>
				<!-- END upload_images -->
				<!-- BEGIN remote_images -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_ENTER_IMAGE_URL}</b></span></td>
					<td class="row2"><input name="url_image" type="text" class="post" size="40" maxlength="255" value="http://" /></td>
				</tr>
				<!-- END remote_images -->
				<!-- END allow_images -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="{CID}" name="CID" /><input name="edit_vehicle" type="submit" value="{L_BUTTON}" class="liteoption" /></td>
				</tr>
			</form>
			</table>
		</td>
<script language="JavaScript1.1" type="text/javascript">
<!--
// Update the make dropdown.
updateMakeSelect(document.edit_vehicle.make_id, '{MAKE}');
updateModelSelect(document.edit_vehicle.model_id, '{MAKE}', '{MODEL}');
//-->
</script>

<script language="JavaScript" type="text/javascript">
<!--
function add_model ( selected )
{
  document.edit_vehicle.adding_model.value = selected ;
  document.edit_vehicle.submit() ;
}
-->
</script>

