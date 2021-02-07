		<td width="72%" valign="top">
			<form enctype="multipart/form-data" method="post" name="modification" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="2">{VEHICLE_DATA}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="25" nowrap="nowrap" colspan="2"><span class="gen">{L_TITLE}</span></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_CATEGORY}</b></span></td>
					<td class="row2">{CATEGORY_LIST} <span class="gensmall" style="color:#FF0000">[{L_REQUIRED}]</span></td></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_TITLE}</b></span></td>
					<td class="row2"><input name="title" type="text" class="post" size="35" value="{TITLE}" /> <span class="gensmall" style="color:#FF0000">[{L_REQUIRED}]</span></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_PURCHASED_FROM}</b></span></td>
				  	<td class="row2">{SHOP_LIST}&nbsp;<span class="gensmall">{L_NOT_LISTED_YET}<a href="{U_SUBMIT_SHOP}">{L_HERE}</a></span></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_PURCHASED_PRICE}</b></span></td>
					<td class="row2"><input name="price" type="text" class="post" size="35" value="{PRICE}" /></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_PRODUCT_RATING}</b></span></td>
				  	<td class="row2">{PRODUCT_RATING_LIST}</td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_INSTALLED_BY}</b></span></td>
				  	<td class="row2">{GARAGE_INSTALL_LIST}&nbsp;<span class="gensmall">{L_NOT_LISTED_YET}<a href="{U_SUBMIT_GARAGE}">{L_HERE}</a></span></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_INSTALLATION_PRICE}</b></span></td>
					<td class="row2"><input name="install_price" type="text" class="post" size="35" value="{INSTALL_PRICE}" /></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_INSTALLATION_RATING}</b></span></td>
				  	<td class="row2">{INSTALL_RATING_LIST}</td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_DESCRIPTION}</b></span></td>
					<td class="row2"><textarea name="comments" cols="60" rows="4" wrap="soft"   class="multitext">{COMMENTS}</textarea></td>
				</tr>
				<tr>
					<td class="row1" width="35%"><span class="gen"><b>{L_INSTALL_COMMENTS}</b></span><br/><span class="gensmall">{L_ONLY_SHOW_IN_REVIEW}</span></td>
					<td class="row2"><textarea name="install_comments" cols="60" rows="4" wrap="soft"   class="multitext">{INSTALL_COMMENTS}</textarea></td>
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
             				<td class="row2" width="100%"><input type="radio" name="editupload" value="delete" />&nbsp;<span class="gen"><b>{L_REMOVE_IMAGE}</b></span><input type="hidden" value="{allow_images.remove_image.IMAGE_ID}" name="image_id" /></td>
			        </tr>
				<!-- END remove_image -->
				<!-- BEGIN replace_image_upload -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_IMAGE_ATTACH}<br />{L_MAXIMUM_IMAGE_FILE_SIZE} : {MAXIMUM_IMAGE_FILE_SIZE} {L_Kbytes}<br />{L_MAXIMUM_IMAGE_RESOLUTION} : {MAXIMUM_IMAGE_RESOLUTION}</b></span></td>
					<td class="row2"><span class="gen"><input type="radio" name="editupload" value="new" />&nbsp;<b>{L_REPLACE_WITH_NEW_IMAGE}</span><br /><input class="post" size="30"  type="file" size="30" name="FILE_UPLOAD" /></td>
				</tr>
				<!-- END replace_image_upload -->
				<!-- BEGIN upload_images -->
				<tr>
					<td class="row1" width="32%"><span class="gen"><b>{L_IMAGE_ATTACH}<br />{L_MAXIMUM_IMAGE_FILE_SIZE} : {MAXIMUM_IMAGE_FILE_SIZE} {L_Kbytes}<br />{L_MAXIMUM_IMAGE_RESOLUTION} : {MAXIMUM_IMAGE_RESOLUTION}</b></span></td>
					<td class="row2"><input class="post" size="30"  type="file" size="30" name="FILE_UPLOAD" /></td>
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
					<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="{CID}" name="CID" /><input type="hidden" value="{MID}" name="MID" /><input name="submit" type="submit" value="{L_BUTTON}" class="liteoption" /></td>
				</tr>
			</table>
			</form>
		</td>
