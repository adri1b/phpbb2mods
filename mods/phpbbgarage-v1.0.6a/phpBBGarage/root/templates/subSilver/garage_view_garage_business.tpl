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
				<span class="gen"><br /><b>{L_ADDRESS} : </b>{business_row.ADDRESS}<br /><b>{L_TELEPHONE} : </b>{business_row.TELEPHONE}<br /><b>{L_FAX} :</b> {business_row.FAX}<br /><b>{L_WEBSITE} : </b><a href="{business_row.WEBSITE}">{business_row.WEBSITE}</a><br /><b>{L_EMAIL} : </b>{business_row.EMAIL}<br /><b>{L_OPENING_HOURS} : </b>{business_row.OPENING_HOURS}<br /><b>{L_RATING} : </b>{business_row.RATING} {L_OUT_OF} {business_row.MAX_RATING}</span></td>
   				</tr>
 				<!-- BEGIN customers -->
				<tr>
					<th class="thHead" align="center" height="28" colspan="6">{L_LAST_CUSTOMERS}</th>
				</tr>
				<tr>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_CUSTOMER}</span></td>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_VEHICLE}</span></td>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_MODIFICATION}</span></td>
					<td class="catBottom" align="center" height="28" ><span class="gen">{L_INSTALL_RATING}</span></td>
				</tr>
 				<!-- END customers -->
				<!-- BEGIN mod_row -->
				<tr>
					<td class="row1" align="center" nowrap><span class="gensmall"><a href="{business_row.mod_row.U_VIEW_PROFILE}">{business_row.mod_row.USERNAME}</a></span></td>
					<td class="row1" align="center" nowrap><span class="gensmall"><a href="{business_row.mod_row.U_VIEW_VEHICLE}">{business_row.mod_row.VEHICLE}</a></span></td>
					<td class="row1" align="center" nowrap><span class="gensmall"><a href="{business_row.mod_row.U_VIEW_MODIFICATION}">{business_row.mod_row.MODIFICATION}</a></span></td>
					<td class="row1" align="center" nowrap><span class="gensmall">{business_row.mod_row.INSTALL_RATING}</span></td>
				</tr>
				<!-- END mod_row -->
 				<!-- BEGIN comments -->
				<tr>
					<td class="catBottom" align="center" height="28" colspan="6"><span class="gen">{L_COMMENTS}</span></td>
				</tr>
				<!-- END comments -->
 				<!-- BEGIN customer_comments -->
				<tr>
					<td class="row1" align="left" colspan="6"><span class="gensmall">{business_row.customer_comments.COMMENTS}</span></td>
				</tr>
				<!-- END customer_comments -->

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
