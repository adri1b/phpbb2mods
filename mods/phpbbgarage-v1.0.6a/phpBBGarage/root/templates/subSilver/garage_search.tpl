		<td width="72%" valign="top">
			<form method="post" name="search_by_vehicle" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="2">{L_SEARCH_GARAGE_TITLE}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><span class="gen">{L_SEARCH_BY_VEHICLE}</span></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MAKE}</b></span></td>
					<td class="row2"><select name="make_id" onchange="updateModelSelect(this.form.model_id, this.options[this.selectedIndex].text, '');" class="forminput"><option value="">{L_SELECT_MODEL}</option></select></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MODEL}</b></span></td>
					<td class="row2"><select name="model_id" class="forminput"><option value="">{L_ANY_MODEL}</option></select></td>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="browse" name="mode" /><input type="hidden" value="yes" name="search" /><input name="submit" type="submit" value="{L_SEARCH}" class="liteoption" /></td>
				</tr>
        		</table>
			</form>

			<form method="post" action="{S_MODE_ACTION}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="2">{L_SEARCH_GARAGE_TITLE}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><span class="gen">{L_SEARCH_BY_MEMBER}</span></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MEMBER_NAME}</b></span></td>
					<td class="row2"><input name="user" type="text" class="post" size="35" value="" /></td>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="browse" name="mode" /><input type="hidden" value="yes" name="search" /><input name="submit" type="submit" value="{L_SEARCH}" class="liteoption" /></td>
				</tr>
        		</table>
			</form>

			<form method="post" name="search_by_insurance" action="{S_MODE_ACTION_2}">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thHead" height="25" nowrap="nowrap" colspan="2">{L_SEARCH_GARAGE_TITLE}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><span class="gen">{L_SEARCH_INSURANCE}</span></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MAKE}</b></span></td>
					<td class="row2"><select name="make_id" onchange="updateModelSelect(this.form.model_id, this.options[this.selectedIndex].text, '');" class="forminput"><option value="">{L_SELECT_MODEL}</option></select></td>
				</tr>
				<tr>
					<td class="row1" width="30%"><span class="gen"><b>{L_MODEL}</b></span></td>
					<td class="row2"><select name="model_id" class="forminput"><option value="">{L_ANY_MODEL}</option></select></td>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" colspan="2"><input type="hidden" value="search_insurance" name="mode" /><input name="submit" type="submit" value="{L_SEARCH}" class="liteoption" /></td>
				</tr>
        		</table>
			</form>
		</td>
<script language="JavaScript1.1" type="text/javascript">
<!--
// Update the make dropdown.
updateMakeSelect(document.search_by_vehicle.make_id, '');
updateModelSelect(document.search_by_vehicle.model_id, '');
//-->
</script>

<script language="JavaScript1.1" type="text/javascript">
<!--
// Update the make dropdown.
updateMakeSelect(document.search_by_insurance.make_id, '');
updateModelSelect(document.search_by_insurance.model_id, '');
//-->
</script>
