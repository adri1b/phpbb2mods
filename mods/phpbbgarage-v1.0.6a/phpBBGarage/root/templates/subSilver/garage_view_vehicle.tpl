<script type="text/javascript">
<!--
function confirm_delete_car(car_id)
{
	if ( confirm("{L_CONFIRM_DELETE_VEHICLE}") )
	{

		window.location.href = "{U_DELETE_VEHICLE}&CID=" + car_id;
	}
}
// -->
</script>

<script type="text/javascript">
<!--
function confirm_delete_mod (car_id, mod_id)
{
	if ( confirm("{L_CONFIRM_DELETE_MODIFICATION}") )
	{
		window.location.href = "{U_DELETE_MODIFICATION}&MID=" + mod_id + "&CID=" + car_id;
	}
}
// -->
</script>

<script type="text/javascript">
<!--
function confirm_delete_insurance (car_id, ins_id)
{
	if ( confirm("{L_CONFIRM_DELETE_PREMIUM}") )
	{
		window.location.href = "{U_DELETE_PREMIUM}&INS_ID=" + ins_id + "&CID=" + car_id;
	}
}
// -->
</script>

<script type="text/javascript">
<!--
function confirm_delete_quartermile (car_id, qm_id)
{
	if ( confirm("{L_CONFIRM_DELETE_QUARTERMILE}") )
	{
		window.location.href = "{U_DELETE_QUARTERMILE}&QMID=" + qm_id + "&CID=" + car_id;
	}
}
// -->
</script>

<script type="text/javascript">
<!--
function confirm_delete_rollingroad (car_id, rr_id)
{
	if ( confirm("{L_CONFIRM_DELETE_ROLLINGROAD}") )
	{
		window.location.href = "{U_DELETE_ROLLINGROAD}&RRID=" + rr_id + "&CID=" + car_id;
	}
}
// -->
</script>
		<td width="72%" valign="top">
			<!-- BEGIN switch_top_block -->
    			<table cellpadding="4" cellspacing="1" border="0" width="100%" class="forumline">
     				<tr>
      					<th height="25" colspan="2" class="thHead">{YEAR} {MAKE} {MODEL}</th>
     				</tr>
				<tr>
      					<td class="catBottom" width="50%" colspan="2"></td>
				</tr>
        			<tr>
            				<td class="row1" width="57%" valign="top">
                				<table width="100%" cellpadding="4" cellspacing="1" border="0">
		    					<!-- BEGIN owned_no -->
		    					<tr>
   								<td class="row1"><span class="gen"><b>{L_OWNER}</b></span></td>
		    					</tr>
                    					<tr>
					                        <td align="center">{AVATAR_IMG}<br /><span class="gen">{PROFILE_LINK}</span></td>
		   					</tr>
							<tr>
    								<td class="row1"><span class="gen"><b>{L_HILITE_IMAGE}</b></span></td>
	           					</tr>
							<tr>
                        					<td align="center">{HILITE_IMAGE}<br /><span class="gensmall">{L_TOTAL_VIEWS}: {TOTAL_IMAGE_VIEWS}</span></td>
                    					</tr>
							<tr>
                        					<td align="center"><span class="gen">{MODERATE_VEHICLE}</span></td>
                    					</tr>
		    					<!-- END owned_no -->
		    					<!-- BEGIN owned_yes -->
                    					<tr>
    								<td class="row1"><span class="gen"><b>{L_MANAGE_VEHICLE_LINKS}</b><br /></span></td>
  		    					</tr>
                    					<tr>
                        					<td align="center" >
                        						<span class="gen">{VIEW_VEHICLE_LINK} {EDIT_VEHICLE_LINK} {DELETE_VEHICLE_LINK} {ADD_MODIFICATION_LINK}
									<!-- BEGIN enable_insurance -->
                        						{ADD_INSURANCE_LINK}
									<!-- END enable_insurance -->
									<!-- BEGIN enable_quartermile -->
                        						{ADD_QUARTERMILE_LINK}
									<!-- END enable_quartermile -->
									<!-- BEGIN enable_rollingroad -->
                        						{ADD_ROLLINGROAD_LINK}
									<!-- END enable_rollingroad -->
									<!-- BEGIN manage_vehicle_gallery -->
                        						{MANAGE_VEHICLE_GALLERY_LINK}
									<!-- END manage_vehicle_gallery -->
									<!-- BEGIN set_main_vehicle -->
                       							{SET_MAIN_VEHICLE_LINK}
									<!-- END set_main_vehicle -->
									<br />
                    							{HILITE_IMAGE}
									<br /></span><span class="gensmall">{L_TOTAL_VIEWS}: {TOTAL_IMAGE_VIEWS}</span>
                        					</td>
                    					</tr>
							<!-- END owned_yes -->
                				</table>
            				</td>
            				<td class="row1" width="43%" valign="top">
						<form method="post" name="view_vehicle" action="{S_MODE_ACTION}">
                				<table cellpadding="4" cellspacing="1" width="100%">
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_VEHICLE}</b></span></td>
                        					<td><span class="gen">{YEAR} {MAKE} {MODEL}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_COLOUR}</b></span></td>
                        					<td><span class="gen">{COLOUR}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_UPDATED}</b></span></td>
                        					<td><span class="gen">{DATE_UPDATED}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_MILEAGE}</b></span></td>
                        					<td><span class="gen">{MILEAGE} {MILEAGE_UNITS}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_PRICE}</b></span></td>
                        					<td><span class="gen">{PRICE} {CURRENCY}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_TOTAL_MODS}</b></span></td>
                        					<td><span class="gen">{TOTAL_MODS}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_TOTAL_SPENT}</b></span></td>
                        					<td><span class="gen">{TOTAL_SPENT} {CURRENCY}</span></td>
                    					</tr>
                    					<tr>
                        					<td class="row1" ><span class="gen"><b>{L_TOTAL_VIEWS}</b></span></td>
                        					<td><span class="gen">{TOTAL_VIEWS}</span></td>
                    					</tr>
            	    					<tr>
                        					<td class="row1"  valign="top"><span class="gen"><b>{L_VEHICLE_RATING}</b></span></td>
                        					<td width="95%"><span class="gen">{RATING}</span></td>
                    					</tr>
							<!-- BEGIN owned_no -->
							<!-- BEGIN rating -->
            	    					<tr>
                        					<td class="row1"  valign="top" ><span class="gen"><b>{L_PLEASE_RATE}</b></span></td>
                        					<td width="85%">{RATE_VEHICLE} <input type="hidden" value="rate_vehicle" name="mode" /><input type="hidden" value="{CID}" name="CID" />
								<!-- BEGIN rate -->
								<input name="submit" type="submit" value="{L_RATE}" class="liteoption" />
								<!-- END rate -->
								<span class="gensmall"><i> {L_RATING_NOTICE}</i></span></td>
                    					</tr>
							<!-- END rating -->
							<!-- END owned_no -->
    							<tr>
                        					<td class="row1"  valign="top"><span class="gen"><b>{L_DESCRIPTION}</b></span></td>
                        					<td width="95%"><span class="gen">{DESCRIPTION}</span></td>
                    					</tr>
							<!-- BEGIN owned_no -->
							<!-- BEGIN guestbook -->
        					 	<tr>
                        					<td class="row1"  valign="top"><span class="gen"><b>{L_GUESTBOOK}</b></span></td>
                        					<td width="95%"><span class="gensmall" align="center"><i>{COMMENT_COUNT}</i></span><br /><span class="gensmall" style="color:666666">{COMMENTS}</span><span class="gensmall">{GUESTBOOK_LINK}</span></td>
                    					</tr>
							<!-- END guestbook -->
							<!-- END owned_no -->
                				</table>
						</form>
            				</td>
        			</tr>
    			</table>
			<br />

			<!-- BEGIN owned_no -->
			<!-- BEGIN gallery_all -->
    			<table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumline">
				<tr>
      					<th height="25" class="thHead">{L_GALLERY}</th>
    				</tr>
   				<tr>
			      		<td class="catBottom" width="100%"><span class="gen">{L_VEHICLE_PICTURES}</span></td>
			     	</tr>
			        <tr>
					<td class="row1">{switch_top_block.owned_no.gallery_all.VEHICLE_IMAGES}</td>
			        </tr>
				<tr>
      					<td class="catBottom" width="100%"><span class="gen">{L_MODIFICATION_PICTURES} <i>({L_SHOWING} {SHOWING_MOD_IMAGES} {L_OF} {TOTAL_MOD_IMAGES} {L_IMAGES})</i></span></td>
     				</tr>
        			<tr>
            				<td class="row1">{switch_top_block.owned_no.gallery_all.MODIFICATION_IMAGES}</td>
        			</tr>
    			</table>
			<!-- END gallery_all -->
			<!-- BEGIN gallery_vehicle -->
    			<table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumline">
				<tr>
	      				<th height="25" colspan="7" class="thHead">{L_GALLERY}</th>
    				</tr>
   				<tr>
      					<td class="catBottom" width="100%"><span class="gen">{L_VEHICLE_PICTURES}</span></td>
	     			</tr>
        			<tr>
            				<td class="row1">{switch_top_block.owned_no.gallery_vehicle.VEHICLE_IMAGES}</td>
        			</tr>
    			</table>
			<!-- END gallery_vehicle -->
			<!-- BEGIN gallery_modification -->
    			<table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumline">
				<tr>
      					<th height="25" colspan="7" class="thHead">{L_GALLERY}</th>
    				</tr>
				<tr>
      					<td class="catBottom" width="100%"><span class="gen">{L_MODIFICATION_PICTURES} <i>({L_Showing} {SHOWING_MOD_IMAGES} {L_OF} {TOTAL_MOD_IMAGES} {L_IMAGES})</i></span></td>
     				</tr>
        			<tr>
            				<td class="row1">{switch_top_block.owned_no.gallery_modification.MODIFICATION_IMAGES}</td>
        			</tr>
    			</table>
			<!-- END gallery_modification -->
			<br />
			<!-- END owned_no -->
			<!-- END switch_top_block -->

			<!-- BEGIN insurance -->
			<table width="100%" cellpadding="1" cellspacing="1" border="0" class="forumline">
				<tr>
	  				<th class="thTop" colspan="4">{L_INSURANCE_PREMIUMS}</th>
				</tr>
				<tr>
	  				<td class="catBottom" ><span class="gen">{L_COMPANY}</span></td>
	  				<td class="catBottom" ><span class="gen">{L_PREMIUM}</span></td>
	  				<td class="catBottom" ><span class="gen">{L_COVER_TYPE}</span></td>
	  				<td class="catBottom" ><span class="gen"></span></td>
				</tr>
				<!-- BEGIN premium -->
				<tr>
	  				<td class="row1" align="center"><span class="gensmall">{insurance.premium.COMPANY}</span></td>
	  				<td class="row1" align="center"><span class="gensmall">{insurance.premium.PREMIUM}</span></td>
					<td class="row1" align="center"><span class="gensmall">{insurance.premium.COVER_TYPE}</span></td>
					<td class="row1" align="right"><span class="gensmall">{insurance.premium.EDIT_LINK} {insurance.premium.DELETE_LINK}</span></td>
				</tr>
				<!-- END premium -->
			</table>
			<br />
			<!-- END insurance -->
			<!-- BEGIN quartermile -->
			<table width="100%" cellpadding="1" cellspacing="1" border="0" class="forumline">
				<tr>
	  				<th class="thTop" colspan="10">{L_QUARTER_MILE_TIMES}</th>
				</tr>
				<tr>
	  				<td class="catBottom" ></th>
	  				<td class="catBottom" ><span class="gen">{L_RT}</span></td>
					<td class="catBottom" ><span class="gen">{L_SIXTY}</span></td>
					<td class="catBottom" ><span class="gen">{L_THREE}</span></td>
					<td class="catBottom" ><span class="gen">{L_EIGTH}</span></td>
					<td class="catBottom" ><span class="gen">{L_EIGTHMPH}</span></td>
					<td class="catBottom" ><span class="gen">{L_THOU}</span></td>
					<td class="catBottom" ><span class="gen">{L_QUART}</span></td>
					<td class="catBottom" ><span class="gen">{L_QUARTMPH}</span></td>
					<td class="catBottom" ><span class="gen"></td>
				</tr>
				<!-- BEGIN run -->
				<tr>
	  				<td class="row1" align="center"><span class="gensmall">{quartermile.run.SLIP_IMAGE}</span></td>
		  			<td class="row1" align="center"><span class="gensmall">{quartermile.run.RT}</span></td>
		  			<td class="row1" align="center"><span class="gensmall">{quartermile.run.SIXTY}</span></td>
					<td class="row1" align="center"><span class="gensmall">{quartermile.run.THREE}</span></td>
					<td class="row1" align="center"><span class="gensmall">{quartermile.run.EIGHT}</span></td>
					<td class="row1" align="center"><span class="gensmall">{quartermile.run.EIGHTMPH}</span></td>
					<td class="row1" align="center"><span class="gensmall">{quartermile.run.THOU}</span></td>
					<td class="row1" align="center"><span class="gensmall">{quartermile.run.QUART}</span></td>
					<td class="row1" align="center"><span class="gensmall">{quartermile.run.QUARTMPH}</span></td>
					<td class="row1" align="right"><span class="gensmall">{quartermile.run.EDIT_LINK} {quartermile.run.DELETE_LINK}</span></td>
				</tr>
				<!-- END run -->
			</table>
			<br />
			<!-- END quartermile -->
			<!-- BEGIN rollingroad -->
			<table width="100%" cellpadding="1" cellspacing="1" border="0" class="forumline">
				<tr>
					<th class="thTop" colspan="11">{L_ROLLING_ROAD_RUNS}</th>
				</tr>
				<tr>
					<td height="25" class="catBottom" ></td>
					<td class="catBottom" ><span class="gen">{L_DYNOCENTER}</span></td>
					<td class="catBottom" ><span class="gen">{L_BHP}</span></td>
					<td class="catBottom" ><span class="gen">{L_BHP_UNIT}</span></td>
					<td class="catBottom" ><span class="gen">{L_TORQUE}</span></td>
					<td class="catBottom" ><span class="gen">{L_TORQUE_UNIT}</span></td>
					<td class="catBottom" ><span class="gen">{L_BOOST}</span></td>
					<td class="catBottom" ><span class="gen">{L_BOOST_UNIT}</span></td>
					<td class="catBottom" ><span class="gen">{L_NITROUS}</span></td>
					<td class="catBottom" ><span class="gen">{L_PEAKPOINT}</span></td>
					<td class="catBottom" ></td>
				</tr>
				<!-- BEGIN run -->
				<tr>
	  				<td class="row1" align="center"><span class="gensmall">{rollingroad.run.SLIP_IMAGE}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.DYNOCENTER}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.BHP}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.BHP_UNIT}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.TORQUE}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.TORQUE_UNIT}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.BOOST}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.BOOST_UNIT}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.NITROUS}</span></td>
					<td class="row1" align="center"><span class="gensmall">{rollingroad.run.PEAKPOINT}</span></td>
					<td class="row1" align="right"><span class="gensmall">{rollingroad.run.EDIT_LINK} {rollingroad.run.DELETE_LINK}</span></td>
				</tr>
				<!-- END run -->
			</table>
			<br />
			<!-- END rollingroad -->
			<!-- BEGIN cat_row -->
 			<table width="100%" cellpadding="1" cellspacing="1" border="0" class="forumline">
   				<tr>
      					<th height="25" colspan="8" class="thHead">{cat_row.CATEGORY_TITLE}</th>
   				</tr>
   				<tr>
      					<td class="catBottom" width="3%"><span class="gen"></span></td>
				      	<td class="catBottom" ><span class="gen">{L_MODIFICATION}</span></td>
					<td class="catBottom" ><span class="gen">{L_RATING}</span></td>
					<td class="catBottom" ><span class="gen">{L_COST}</span></td>
					<td class="catBottom" ><span class="gen">{L_INSTALL}</span></td>
					<td class="catBottom" nowrap><span class="gen">{L_CREATED}</span></td>
					<td class="catBottom" nowrap><span class="gen">{L_UPDATED}</span></td>
					<td class="catBottom" ></td>
				</tr>
				<!-- BEGIN user_row -->
   				<tr>
					<td class="row1"><span class="gen">{cat_row.user_row.IMAGE_ATTACHED}</span></td>
					<td class="row1"><span class="gen">{cat_row.user_row.MODIFICATION}</span></td>
					<td class="row1" align="center"><span class="gensmall">{cat_row.user_row.RATING}</span></td>
					<td class="row1" align="center"><span class="gensmall">{cat_row.user_row.COST}</span></td>
					<td class="row1" align="center"><span class="gensmall">{cat_row.user_row.INSTALL}</span></td>
					<td class="row1" nowrap><span class="gensmall">{cat_row.user_row.CREATED}</span></td>
					<td class="row1" nowrap><span class="gensmall">{cat_row.user_row.UPDATED}</span></td>
					<td class="row1" align="right"><span class="gensmall">{cat_row.user_row.EDIT_MOD_LINK} {cat_row.user_row.DELETE_MOD_LINK}</span></td>
				</tr>
  				<!-- END user_row -->
 			</table>
 			<br /> 
 			<!-- END cat_row -->
		</td>
