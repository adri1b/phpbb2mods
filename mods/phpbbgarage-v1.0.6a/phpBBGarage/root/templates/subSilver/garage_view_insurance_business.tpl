		<td width="72%" valign="top">
 			<!-- BEGIN business_row -->
 			<table width="100%" cellpadding="2" cellspacing="0" border="0" class="forumline">
   				<tr>
      					<th height="25" colspan="8" class="thHead"><a href="{business_row.U_VIEW_BUSINESS}">{business_row.NAME}</a></th>
				</tr>
				<tr>
      					<td class="row1" height="25" colspan="8" ><span class="gen"><b>{L_BUSINESS_NAME} : </b><a href="{business_row.U_VIEW_BUSINESS}">{business_row.NAME}</a></span>
				<!-- BEGIN more_detail -->
				<span class="gensmall">{L_CLICK_FOR_MORE_DETAIL}</span>
 				<!-- END more_detail -->
				<span class="gen"><br /><b>{L_ADDRESS} : </b>{business_row.ADDRESS}<br /><b>{L_TELEPHONE} : </b>{business_row.TELEPHONE}<br /><b>{L_FAX} :</b> {business_row.FAX}<br /><b>{L_WEBSITE} : </b><a href="{business_row.WEBSITE}">{business_row.WEBSITE}</a><br /><b>{L_EMAIL} : </b>{business_row.EMAIL}<br /><b>{L_OPENING_HOURS} : </b>{business_row.OPENING_HOURS}</span></td>
   				</tr>
   				<tr>
      					<td class="catBottom" width="30"><span class="gen">{L_COVER_TYPE}</span></td>
					<td class="catBottom" width="25%"><span class="gen">{L_LOWEST_PREMIUM}</span></td>
					<td class="catBottom" width="25%"><span class="gen">{L_AVERAGE_PREMIUM}</span></td>
					<td class="catBottom" width="25%"><span class="gen">{L_HIGHEST_PREMIUM}</span></td>
				</tr>
  				<!-- BEGIN cover_row -->
   				<tr>
      					<td class="row1"><span class="gen">{business_row.cover_row.COVER_TYPE}</span></td>
      					<td class="row1"><span class="gensmall">{business_row.cover_row.MINIMUM}</span></td>
      					<td class="row1"><span class="gensmall">{business_row.cover_row.AVERAGE}</span></td>
      					<td class="row1"><span class="gensmall">{business_row.cover_row.MAXIMUM}</span></td>
   				</tr>
  				<!-- END cover_row -->
  				<!-- BEGIN insurance_detail -->
				<tr>
					<th class="thHead" align="center" height="28" colspan="6">{L_LAST_CUSTOMERS}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_CUSTOMER}</span></td>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_VEHICLE}</span></td>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_PREMIUM}</span></td>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_COVER_TYPE}</span></td>
				</tr>
  				<!-- BEGIN premiums -->
				<tr>
					<td class="row1" align="center" nowrap><span class="gensmall"><a href="{business_row.insurance_detail.premiums.U_VIEW_PROFILE}">{business_row.insurance_detail.premiums.USERNAME}</a></span></td>
					<td class="row1" align="center" nowrap><span class="gensmall"><a href="{business_row.insurance_detail.premiums.U_VIEW_VEHICLE}">{business_row.insurance_detail.premiums.VEHICLE}</a></span></td>
					<td class="row1" align="center" nowrap><span class="gensmall">{business_row.insurance_detail.premiums.PREMIUM}</span></td>
					<td class="row1" align="center" nowrap><span class="gensmall">{business_row.insurance_detail.premiums.COVER_TYPE}</span></td>
				</tr>
  				<!-- END premiums -->
  				<!-- END insurance_detail -->
 			</table>
 			<br /> 
 			<!-- END business_row -->
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
				<tr> 
					<td><span class="nav">{PAGE_NUMBER}</span></td>
					<td align="right"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span></td>
  				</tr>
			</table>
		</td>
