  		<td width="72%" valign="top">
			<form method="post" name="guestbook" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="5">{L_GUESTBOOK_TITLE}</th>
				</tr>
				<!-- BEGIN first_comment -->
				<tr>
					<td class="row1" align="center" height="28" colspan="5"><span class="gen">{LEAVE_FIRST_COMMENT}</span></td>
				</tr>
				<!-- END first_comment -->
				<!-- BEGIN comments -->
				<tr>
					<td class="row2" align="center" height="28" ><span class="name"><a name="{comments.U_POST_ID}"></a><b>{comments.POSTER_NAME}</b></span><br /><span class="postdetails">{comments.POSTER_RANK}<br />{comments.RANK_IMAGE}<br />{comments.POSTER_AVATAR}<br /> {comments.POSTER_JOINED}<br />{comments.POSTER_FROM}<br /><br /><a href="{comments.VIEW_POSTER_CARPROFILE}" >{comments.POSTER_CAR_YEAR} {comments.POSTER_CAR_MARK} {comments.POSTER_CAR_MODEL}</a><br /></span></td>
					<td class="row2" align="left" valign="top" height="28" colspan="4" ><span class="gensmall"><b>{L_POSTED}:</b> <span class="gensmall">{comments.POSTED} </span><span align="right">{comments.EDIT_IMG} {comments.DELETE_IMG}</span><br /><br /><span class="postbody" align="left">{comments.POST}</span></td>
				</tr>
				<tr>
					<td class="row2" align="center" height="10"> </td>
					<td class="row2" valign="middle" height="10" colspan="1">{comments.PROFILE_IMG} {comments.PM_IMG} {comments.EMAIL_IMG} {comments.WWW_IMG} </td>
				</tr>
				<tr>
					<td class="row1" align="center" height="3" colspan="5"></td>
				</tr>
				<!-- END comments -->
				<!-- BEGIN leave_comment -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="5"><span class="gen">{L_ADD_COMMENT}</span></td>
				</tr>
				<tr>
					<td class="row1" width="20%"><span class="gen">{L_ADD_COMMENT}</span></td>
					<td class="row2" colspan="4"><textarea name="comments" cols="70" rows="7" wrap="soft" class="multitext">{COMMENTS}</textarea></td>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="5"><input type="hidden" value="insert_comment" name="mode" /><input type="hidden" value="{CID}" name="CID" /><input name="submit" type="submit" value="{L_POST_COMMENT}" class="liteoption" /></td>
				</tr>
				<!-- END leave_comment -->
        		</table>
			</form>
		</td>
