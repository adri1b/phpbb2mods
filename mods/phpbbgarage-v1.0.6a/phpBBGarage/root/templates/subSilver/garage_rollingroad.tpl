		<td width="72%" valign="top">
			<form enctype="multipart/form-data" method="post" name="rollingroad" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="2">{VEHICLE_DATA}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><span class="gen">{L_TITLE}</span></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen">{L_DYNO_CENTER}</span></td>
					<td class="row2"><input name="dynocenter" type="text" class="post" size="50" value ="{DYNOCENTER}" /></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen">{L_BHP}</span></td>
					<td class="row2"><input name="bhp" type="text" class="post" size="15" value ="{BHP}" />&nbsp;{BHP_UNIT_LIST} <span class="gensmall" style="color:#FF0000">[{L_REQUIRED}]</span</td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen">{L_TORQUE}</span></td>
					<td class="row2"><input name="torque" type="text" class="post" size="15" value ="{TORQUE}" />&nbsp;{TORQUE_UNIT_LIST}</td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen">{L_BOOST}</span></td>
					<td class="row2"><input name="boost" type="text" class="post" size="15" value ="{BOOST}" />&nbsp;{BOOST_UNIT_LIST}</td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen">{L_NITROUS}</span></td>
					<td class="row2">{NITROUS_UNIT_LIST}</td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen">{L_PEAKPOINT}</span></td>
					<td class="row2"><input name="peakpoint" type="text" class="post" size="15" value ="{PEAKPOINT}"  /></td>
				</tr>
				<!-- BEGIN allow_images -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><span class="gen">{L_IMAGE_ATTACHMENTS}</span></td>
				</tr>
				<!-- BEGIN keep_image -->
				<tr>
					<td class="row1"></td>
			        	<td class="row2" width="100%"><input type="radio" name="editupload" value="keep" checked />&nbsp;<span class="gen"><b>{L_KEEP_CURRENT_IMAGE}</b> ( {allow_images.keep_image.CURRENT_IMAGE} )</span></td>
				</tr>
				<!-- END keep_image -->
				<!-- BEGIN remove_image -->
				<tr>
					<td class="row1"></td>
			             	<td class="row2" width="100%"><input type="radio" name="editupload" value="delete">&nbsp;<span class="gen"><b>{L_REMOVE_IMAGE}</b></span><input type="hidden" value="{allow_images.remove_image.IMAGE_ID}" name="image_id" /></td>
			        </tr>
				<!-- END remove_image -->
				<!-- BEGIN replace_image_upload -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_IMAGE_ATTACH}<br />{L_MAXIMUM_IMAGE_FILE_SIZE} : {MAXIMUM_IMAGE_FILE_SIZE} {L_Kbytes}<br />{L_MAXIMUM_IMAGE_RESOLUTION} : {MAXIMUM_IMAGE_RESOLUTION}</b></span></td>
					<td class="row2"><span class="gen"><input type="radio" name="editupload" value="new" />&nbsp;<b>{L_REPLACE_WITH_NEW_IMAGE}</span><br /><input class="post" size="30"  type="file" size="30" name="FILE_UPLOAD"/></td>
				</tr>
				<!-- END replace_image_upload -->
				<!-- BEGIN upload_images -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_IMAGE_ATTACH}<br />{L_MAXIMUM_IMAGE_FILE_SIZE} : {MAXIMUM_IMAGE_FILE_SIZE} {L_Kbytes}<br />{L_MAXIMUM_IMAGE_RESOLUTION} : {MAXIMUM_IMAGE_RESOLUTION}</b></span></td>
					<td class="row2"><input class="post" size="30"  type="file" size="30" name="FILE_UPLOAD"/></td>
				</tr>
				<!-- END upload_images -->
				<!-- BEGIN replace_remote_image -->
				<tr>
					<td class="row1" width="32%"><span class="gen"></b></span></td>
					<td class="row2"><span class="gen"><input type="radio" name="editupload" value="new" />&nbsp;<b>{L_REPLACE_WITH_NEW_REMOTE_IMAGE}</span><br /><input name="url_image" type="text" class="post" size="40" maxlength="255" value="http://" /></td>
				</tr>
				<!-- END replace_remote_image -->
				<!-- BEGIN remote_images -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_ENTER_IMAGE_URL}</b></span></td>
					<td class="row2"><input name="url_image" type="text" class="post" size="40" maxlength="255" value="http://" /></td>
				</tr>
				<!-- END remote_images -->
				<!-- END allow_images -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="{CID}" name="CID" /><input type="hidden" value="{RRID}" name="RRID" /><input type="hidden" value="{PENDING_REDIRECT}" name="pending_redirect" /><input name="submit" type="submit" value="{L_BUTTON}" class="liteoption" /></td>
				</tr>
			</form>
			</table>
		</td>
