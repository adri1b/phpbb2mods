		<td width="72%" valign="top" >
    			<table cellpadding="4" cellspacing="1" border="0" width="100%" class="forumline">
     				<tr>
      					<th height="25" colspan="2" class="thHead">{YEAR} {MAKE} {MODEL}</th>
     				</tr>
				<tr>
      					<td class="catBottom" width="50%"><span class="gen"></span></td>
      					<td class="catBottom" width="50%"><span class="gen"></span></td>
				</tr>
        			<tr>
            				<td class="row1" width="40%" valign="top">
                				<table width="100%" cellpadding="4" cellspacing="1" border="0">
                    					<tr>
    								<td class="row1"><span class="gen"><b>{L_OWNER}</b></span></td>
							</tr>
                    					<tr>
	                        				<td align="center">{AVATAR_IMG}<br /><span class="normalname"><a href="{U_VIEW_PROFILE}">{USERNAME}</a></span><br />{MODIFICATION_IMAGE}</td>
                    					</tr>
                				</table>
            				</td>
            				<td class="row1" valign="top">
                				<table cellpadding="4" cellspacing="1" width="100%">
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_MODIFICATION}</b></span></td>
                        					<td><span class="gen">{TITLE}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_CATEGORY}</b></span></td>
                        					<td><span class="gen">{CATEGORY}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_VEHICLE}</b></span></td>
                        					<td><span class="gen">{YEAR} {MAKE} {MODEL}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_UPDATED}</b></span></td>
                        					<td><span class="gen">{DATE_UPDATED}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_PURCHASED_FROM}</b></span></td>
                        					<td><span class="gen"><a href="{U_VIEW_SHOP_BUSINESS}">{BUSINESS_NAME}</a></span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_PURCHASED_PRICE}</b></span></td>
                        					<td><span class="gen">{PRICE} {CURRENCY}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_PRODUCT_RATING}</b></span></td>
                        					<td><span class="gen">{PRODUCT_RATING}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_INSTALLED_BY}</b></span></td>
                        					<td><span class="gen"><a href="{U_VIEW_GARAGE_BUSINESS}">{BUSINESS}</a></span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_INSTALLATION_PRICE}</b></span></td>
                        					<td><span class="gen">{INSTALL_PRICE} {CURRENCY}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_INSTALLATION_RATING}</b></span></td>
                        					<td><span class="gen">{INSTALL_RATING}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" nowrap="nowrap"><span class="gen"><b>{L_COMMENTS}</b></span></td>
                        					<td><span class="gen">{COMMENTS}</span></td>
                    					</tr>
                				</table>
            				</td>
        			</tr>
    			</table>
			<br />
 	
			<!-- BEGIN cat_row -->
 			<table width="100%" cellpadding="2" cellspacing="0" border="0" class="forumline">
   				<tr>
      					<th height="25" colspan="7" class="thHead">{cat_row.CATEGORY_TITLE}</th>
				</tr>
   				<tr>
      					<td class="catBottom" width="3%"><span class="gen"></span></td>
      					<td class="catBottom" width="30"><span class="gen">{L_MODIFICATION}</span></td>
      					<td class="catBottom" width="8%"><span class="gen">{L_RATING}</span></td>
      					<td class="catBottom" width="8%"><span class="gen">{L_COST}</span></td>
      					<td class="catBottom" width="9%"><span class="gen">{L_INSTALL}</span></td>
      					<td class="catBottom" width="25%"><span class="gen">{L_CREATED}</span></td>
      					<td class="catBottom" width="25%"><span class="gen">{L_UPDATED}</span></td>
   				</tr>
  				<!-- BEGIN user_row -->
   				<tr>
      					<td class="row1"><span class="gen"></span></td>
      					<td class="row1"><span class="gen">{cat_row.user_row.MODIFICATION}</span></td>
      					<td class="row1"><span class="gen">{cat_row.user_row.RATING}</span></td>
      					<td class="row1"><span class="gen">{cat_row.user_row.COST}</span></td>
      					<td class="row1"><span class="gen">{cat_row.user_row.INSTALL}</span></td>
      					<td class="row1"><span class="gen">{cat_row.user_row.CREATED}</span></td>
      					<td class="row1"><span class="gen">{cat_row.user_row.UPDATED}</span></td>
				</tr>
  				<!-- END user_row -->
 			</table>
 			<br /> 
 			<!-- END cat_row -->
		</td>
