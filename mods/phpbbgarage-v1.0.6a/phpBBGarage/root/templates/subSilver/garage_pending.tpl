		<td width="72%" valign="top">
			<form action="{S_ACTION}" method="post" name="garage_pending">
			<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
				<tr>
					<th align="centre">{L_PENDING_ITEMS}</th>
				<tr>
				<tr>
					<td class="row1">
					<!-- BEGIN rollingroad_pending -->
					<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
						<tr>
      							<th colspan="14">{L_ROLLINGROAD_PENDING}</th>
						</tr>
						<tr>
							<td class="catBottom">&nbsp;</td>
							<td class="catBottom" ><span class="gen"></td>
							<td class="catBottom" ><span class="gen">{L_USERNAME}</td>
							<td class="catBottom" ><span class="gen">{L_VEHICLE}</td>
			  				<td class="catBottom" ><span class="gen">{L_DYNOCENTER}</td>
						  	<td class="catBottom" ><span class="gen">{L_BHP}</td>
						  	<td class="catBottom" ><span class="gen">{L_BHP_UNIT}</td>
						  	<td class="catBottom" ><span class="gen">{L_TORQUE}</td>
						  	<td class="catBottom" ><span class="gen">{L_TORQUE_UNIT}</td>
						  	<td class="catBottom" ><span class="gen">{L_BOOST}</td>
						  	<td class="catBottom" ><span class="gen">{L_BOOST_UNIT}</td>
						  	<td class="catBottom" ><span class="gen">{L_NITROUS}</td>
						  	<td class="catBottom" ><span class="gen">{L_PEAKPOINT}</td>
						  	<td class="catBottom" ></td>
						</tr>
						<!-- BEGIN row -->
						<tr>
							<td class="{rollingroad_pending.row.ROW_CLASS}" ><input type="checkbox" name="rr_id[]" value="{rollingroad_pending.row.RRID}" /></td>
						  	<td class="{rollingroad_pending.row.ROW_CLASS}" align="center"><span class="gen">{rollingroad_pending.row.IMAGE_LINK}</span></td>
						  	<td class="{rollingroad_pending.row.ROW_CLASS}" align="center"><span class="gen"><a href="{rollingroad_pending.row.U_VIEWPROFILE}" class="gen">{rollingroad_pending.row.USERNAME}</a></span></td>
						  	<td class="{rollingroad_pending.row.ROW_CLASS}" align="center"><span class="gen"><a href="{rollingroad_pending.row.U_VIEWVEHICLE}" class="gen">{rollingroad_pending.row.VEHICLE}</a></span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.DYNOCENTER}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.BHP}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.BHP_UNIT}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.TORQUE}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.TORQUE_UNIT}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.BOOST}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.BOOST_UNIT}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.NITROUS}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.PEAKPOINT}</span></td>
							<td class="{rollingroad_pending.row.ROW_CLASS}"><span class="gen">{rollingroad_pending.row.EDIT_LINK}</span></td>
						</tr>
						<!-- END row -->
					</table>
					<!-- END rollingroad_pending -->
					</br>

					<!-- BEGIN quartermile_pending -->
					<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
						<tr>
      							<th colspan="13">{L_QUARTERMILE_PENDING}</span></th>
						</tr>
						<tr>
							<td class="catBottom">&nbsp;</td>
							<td class="catBottom" ><span class="gen"></td>
							<td class="catBottom" ><span class="gen">{L_USERNAME}</td>
							<td class="catBottom" ><span class="gen">{L_VEHICLE}</td>
						  	<td class="catBottom" ><span class="gen">{L_RT}</td>
						  	<td class="catBottom" ><span class="gen">{L_SIXTY}</td>
						  	<td class="catBottom" ><span class="gen">{L_THREE}</td>
						  	<td class="catBottom" ><span class="gen">{L_EIGTH}</td>
						  	<td class="catBottom" ><span class="gen">{L_EIGTHMPH}</td>
						  	<td class="catBottom" ><span class="gen">{L_THOU}</td>
						  	<td class="catBottom" ><span class="gen">{L_QUART}</td>
						  	<td class="catBottom" ><span class="gen">{L_QUARTMPH}</td>
						  	<td class="catBottom" ></td>
						</tr>
						<!-- BEGIN row -->
						<tr>
							<td class="{quartermile_pending.row.ROW_CLASS}" ><input type="checkbox" name="qm_id[]" value="{quartermile_pending.row.QMID}" /></td>
			  				<td class="{quartermile_pending.row.ROW_CLASS}" align="center"><span class="gen">{quartermile_pending.row.IMAGE_LINK}</span></td>
			  				<td class="{quartermile_pending.row.ROW_CLASS}" align="center"><span class="gen"><a href="{quartermile_pending.row.U_VIEWPROFILE}" class="gen">{quartermile_pending.row.USERNAME}</a></span></td>
	  						<td class="{quartermile_pending.row.ROW_CLASS}" align="center"><span class="gen"><a href="{quartermile_pending.row.U_VIEWVEHICLE}" class="gen">{quartermile_pending.row.VEHICLE}</a></span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.RT}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.SIXTY}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.THREE}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.EIGTH}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.EIGHTM}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.THOU}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.QUART}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.QUARTM}</span></td>
							<td class="{quartermile_pending.row.ROW_CLASS}"><span class="gen">{quartermile_pending.row.EDIT_LINK}</span></td>
						</tr>
						<!-- END row -->
					</table>
					</br>
					<!-- END quartermile_pending -->

					<!-- BEGIN business_pending -->
					<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
						<tr>
      							<th colspan="13">{L_BUSINESS_PENDING}</th>
						</tr>
						<tr>
							<td class="catBottom" >&nbsp;</td>
							<td class="catBottom" ><span class="gen">{L_BUSINESS_NAME}</td>
							<td class="catBottom" ><span class="gen">{L_ADDRESS}</td>
						  	<td class="catBottom" ><span class="gen">{L_TELEPHONE}</td>
						  	<td class="catBottom" ><span class="gen">{L_FAX}</td>
						  	<td class="catBottom" ><span class="gen">{L_WEBSITE}</td>
						  	<td class="catBottom" ><span class="gen">{L_EMAIL}</td>
						  	<td class="catBottom" ><span class="gen">{L_OPENING_HOURS}</td>
						  	<td class="catBottom" ><span class="gen">{L_TYPE}</td>
						  	<td class="catBottom" ></td>
						</tr>
						<!-- BEGIN row -->
						<tr>
							<td class="{business_pending.row.ROW_CLASS}" ><input type="checkbox" name="bus_id[]" value="{business_pending.row.BUSID}" /></td>
			 				<td class="{business_pending.row.ROW_CLASS}" align="center"><span class="gen">{business_pending.row.NAME}</span></td>
							<td class="{business_pending.row.ROW_CLASS}" align="center"><span class="gen">{business_pending.row.ADDRESS}</span></td>
							<td class="{business_pending.row.ROW_CLASS}"><span class="gen">{business_pending.row.TELEPHONE}</span></td>
							<td class="{business_pending.row.ROW_CLASS}"><span class="gen">{business_pending.row.FAX}</span></td>
							<td class="{business_pending.row.ROW_CLASS}"><span class="gen">{business_pending.row.WEBSITE}</span></td>
							<td class="{business_pending.row.ROW_CLASS}"><span class="gen">{business_pending.row.EMAIL}</span></td>
							<td class="{business_pending.row.ROW_CLASS}"><span class="gen">{business_pending.row.OPENING_HOURS}</span></td>
							<td class="{business_pending.row.ROW_CLASS}"><span class="gen">{business_pending.row.TYPE}</span></td>
							<td class="{business_pending.row.ROW_CLASS}"><span class="gen">{business_pending.row.EDIT_LINK}</span></td>
						</tr>
						<!-- END row -->
					</table>
					</br>
					<!-- END business_pending -->

					<!-- BEGIN make_pending -->
					<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
						<tr>
      							<th colspan="13">{L_MAKE_PENDING}</th>
						</tr>
						<tr>
							<td class="catBottom">&nbsp;</td>
						  	<td class="catBottom"><span class="gen">{L_MAKE}</td>
						</tr>
						<!-- BEGIN row -->
						<tr>
							<td class="{make_pending.row.ROW_CLASS}" ><input type="checkbox" name="mk_id[]" value="{make_pending.row.MAKE_ID}" /></td>
							<td class="{make_pending.row.ROW_CLASS}"><span class="gen">{make_pending.row.MAKE}</span></td>
						</tr>
						<!-- END row -->
					</table>
					</br>
					<!-- END make_pending -->

					<!-- BEGIN model_pending -->
					<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
						<tr>
      							<th colspan="13">{L_MODEL_PENDING}</th>
						</tr>
						<tr>
							<td class="catBottom">&nbsp;</td>
						  	<td class="catBottom"><span class="gen">{L_MAKE}</td>
						  	<td class="catBottom"><span class="gen">{L_MODEL}</td>
						</tr>
						<!-- BEGIN row -->
						<tr>
							<td class="{model_pending.row.ROW_CLASS}" ><input type="checkbox" name="mdl_id[]" value="{model_pending.row.MODEL_ID}" /></td>
							<td class="{model_pending.row.ROW_CLASS}"><span class="gen">{model_pending.row.MAKE}</span></td>
							<td class="{model_pending.row.ROW_CLASS}"><span class="gen">{model_pending.row.MODEL}</span></td>
						</tr>
						<!-- END row -->
					</table>
					</br>
					<!-- END model_pending -->


					<tr>
						<td class="catbottom" colspan="9">
							<select name="action" class="post">
							<option value="APPROVE">{L_APPROVE}</option>
							<option value="REASSIGN">{L_REASSIGN}</option>
							<option value="REMOVE">{L_REMOVE}</option>
							</select>
							<input type="submit" name="go" value="{L_GO}" class="mainoption" />
						</td>
					</tr>
			</table>
		</td>
