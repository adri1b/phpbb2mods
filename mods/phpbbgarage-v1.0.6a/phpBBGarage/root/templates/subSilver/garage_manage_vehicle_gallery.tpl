		<td width="72%" valign="top">
			<form enctype="multipart/form-data" method="post" name="manage_gallery" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="3">{L_MANAGE} {VEHICLE_DATA} {L_GALLERY}</th>
				</tr>
				<!-- BEGIN allow_images -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="3"><span class="gen">{L_IMAGE_ATTACHMENTS}</span></td>
				</tr>
				<!-- BEGIN upload_images -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_IMAGE_ATTACH}<br />{L_MAXIMUM_IMAGE_FILE_SIZE} : {MAXIMUM_IMAGE_FILE_SIZE} {L_Kbytes}<br />{L_MAXIMUM_IMAGE_RESOLUTION} : {MAXIMUM_IMAGE_RESOLUTION}</b></span></td>
					<td class="row2" colspan="2"><input class="post" size="30"  type="file" size="30" name="FILE_UPLOAD" /></td>
				</tr>
				<!-- END upload_images -->
				<!-- BEGIN remote_images -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_ENTER_IMAGE_URL}</b></span></td>
					<td class="row2" colspan="2"><input name="url_image" type="text" class="post" size="40" maxlength="255" value="http://" /></td>
				</tr>
				<!-- END remote_images -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="3"><span class="gen"><input type="hidden" value="insert_gallery_image" name="mode" /><input type="hidden" value="{CID}" name="CID" /><input name="submit" type="submit" value="Add New Image" class="liteoption" /></span></td>
				</tr>
				<!-- END allow_images -->
				<tr>
					<td class="row1" width="32%" colspan="3"><span class="gen">{L_NOTE}</span></td>
				</tr>
			 	<tr>
					<td class="catBottom" width="32%" align="center"><span class="gen">{L_IMAGE}</span></td>
			      		<td class="catBottom" width="32%" align="center"><span class="gen">{L_REMOVE_IMAGE}</span></td>
					<td class="catBottom" width="32%" align="center"><span class="gen">{L_HILITE_IMAGE}</span></td>
			   	</tr>
			  	<!-- BEGIN pic_row -->
			   	<tr>
			      		<td class="row1" align="center"><span class="gen">{pic_row.THUMB_IMAGE}</span></td>
			      		<td class="row1" align="center"><span class="gen"><a href="{pic_row.U_REMOVE_IMAGE}">{L_REMOVE_IMAGE}</a></span></td>
				      	<td class="row1" align="center"><span class="gen">{pic_row.HILITE}</span></td>
			   	</tr>
			  	<!-- END pic_row -->
			</form>
			</table>
		</td>
