<h1>{L_GARAGE_TOOLS_TITLE}</h1>

<p>{L_GARAGE_TOOLS_EXPLAIN}</p>

<form action="{S_GARAGE_ACTION}" method="post">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thHead" height="25" nowrap="nowrap" colspan="2">{L_GARAGE_TOOLS_REBUILD}</th>
	</tr>
	<tr>
		<td class="row1" width="50%"><span class="gen">{L_GARAGE_TOOLS_REBUILD_ALL}</span></td>
	  	<td class="row2"><input class="post" type="text" maxlength="12" size="12" name="cycle" value="{CYCLE}" />&nbsp;{L_PER_CYCLE}</td>

	</tr>
	<tr>
		<td class="row1" width="50%"><span class="gen">{L_GARAGE_TOOLS_CREATE_LOG}</span></td>
		 <td class="row2">{L_BASE_DIRECTORY}&nbsp;<input class="post" type="text" maxlength="12" size="12" name="file" value="{FILE}" /></td>
	</tr>
	<tr>
		<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="rebuild_thumbs" name="mode" /><input name="submit" type="submit" value="{L_GARAGE_TOOLS_REBUILD}" class="liteoption" /></td>
	</tr>
</table>
</form>
<br />

<form action="{S_GARAGE_ACTION}" method="post">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thHead" height="25" nowrap="nowrap" colspan="1">{L_GARAGE_TOOLS_ORPHANED_TITLE}</th>
	</tr>
	<tr>
		<td class="row1" width="20%"><span class="gen">{L_GARAGE_TOOLS_ORPHANED}</span></td>
	</tr>

	<tr>
		<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="orphan_search" name="mode" /><input name="submit" type="submit" value="{L_GARAGE_TOOLS_ORPHANED_BUTTON}" class="liteoption" /></td>
	</tr>
</table>
</form>

