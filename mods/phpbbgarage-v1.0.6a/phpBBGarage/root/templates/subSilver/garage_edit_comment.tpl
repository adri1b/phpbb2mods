		<td width="72%" valign="top">
			<form method="post" name="edit_comment" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="5">{L_GUESTBOOK_TITLE}</th>
				</tr>
				<tr>
					<td class="row1" width="20%"><span class="gen">{L_EDIT_COMMENT}</span></td>
					<td class="row2" colspan="4"><textarea name="comments" cols="70" rows="7" wrap="soft" class="multitext">{COMMENTS}</textarea></td>
				</tr>
					<td class="catBottom" align="center" height="28" colspan="5"><input type="hidden" value="update_comment" name="mode" /><input type="hidden" value="{CID}" name="CID" /><input type="hidden" value="{COMMENT_ID}" name="COMMENT_ID" /><input name="submit" type="submit" value="{L_EDIT_COMMENT}" class="liteoption" /></td>
				</tr>
        		</table>
			</form>
		</td>
