<h1>{L_GARAGE_ORPHANS_TITLE}</h1>

<p>{L_GARAGE_ORPHANS_EXPLAIN}</p>

{SCRIPT}

<form action="{S_ACTION}" method="post" name="theAdminForm">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thHead" height="25" nowrap="nowrap" colspan="4">{L_GARAGE_ORPHANS_TABLE_TITLE}</th>
	</tr>
	<tr>
		<td class="catBottom" align="center" height="28" colspan="4"></td>
	</tr>
	<!-- BEGIN file -->
	<tr>
		<td class="row1" nowrap="nowrap"><input type="checkbox" name="orphan_attach[]" value="{file.ORPHAN}" />&nbsp;<a href="{file.ORPHAN_LINK}">{file.ORPHAN}</a></td>
	</tr>
	<!-- END file -->
	<tr>
		<td class="catBottom" align="center" height="28" colspan="4"><input type="hidden" value="orphan_remove" name="mode" /><input name="submit" type="submit" value="{L_REMOVE_SELECTED_ORPHANS}" class="liteoption" /></td>
	</tr>
</table>

