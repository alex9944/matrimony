<?php
include('dbconnect.php'); 

set_time_limit(0);

$sel="select * from register where Gender='Male' and subscribe=1  ";

$qry=mysql_query($sel);
$count = mysql_affected_rows();
	while($fet=mysql_fetch_array($qry))
	{
	
		$gender=$fet['Gender'];
		
		$looking=$fet['Looking'];
		
		$complexion=$fet['Complexion'];
		
		$from_age=$fet['PE_FromAge'];
		
		$to_age=$fet['PE_ToAge'];		
		
		$mail=$fet['ConfirmEmail'];		
		
		$maritalstatus=$fet['Maritalstatus'];
		
		$name=$fet['Name'];
		
		$religion  = $fet['Religion'];
		$occupation  = $fet['Occupation'];
		
		$caste  = $fet['Caste'];
		
		$encode=base64_encode($mail);
		
		if($to_age == '')
		 {
		   $to_age  = "50";
		 }
		
		if($from_age == '')
		 {
		   $from_age  = "18";
		 }
		
		  $qr="select * from register where Gender='Female' and Looking='".$looking."' and Caste='".$caste."' and Religion='".$religion."'  order by ID desc limit 0,20";  
		
		
		//$qr="select * from register  limit 10";
		//and PE_FromAge>'".$from_age."' and PE_ToAge<'".$to_age."'   ;
		
		
		$qry_ex=mysql_query($qr);
		
		$num=mysql_num_rows($qry_ex);
		
							
		if($num>0)
		{

$content='<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div style="width:100% !important;-webkit-text-size-adjust:none;margin:0; padding:0;" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

<center>

        	<table style="height:100% !important; margin:0; padding:0; width:100% !important;background-color:#FFF6ED;" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">

            	<tr>

                	<td align="center" valign="top">

					

                        

                        <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">

                            <tr>

                                <td valign="top" class="preheaderContent">

                                

                                	

                                    <table border="0" cellpadding="10" cellspacing="0" width="100%">

                                    	<tr>

                                        	<td valign="top">

                                            
                                            </td>

                                            

											<td valign="top" width="190">

                                            	

                                            </td>

											

                                        </tr>

                                    </table>

                                                       

                                </td>

                            </tr>

                        </table>

                       

                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" background-color="#FFF6ED" style="background-color:#FAFAFA;">

                        	

                        	<tr>

                            	<td align="center" valign="top">

                                   

                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">

                                    	<tr>

                                            <td valign="top"  style="background-color:#FFFFFF;" class="bodyContent">

                                

                                                

                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">

                                                    <tr>

                                                        <td valign="top">

                                                          <div mc:edit="std_content00" style="color:#505050;font-family:Arial;font-size:14px;line-height:150%;text-align:left;">

                                                                <h2 style="color:#A50050;display:block;font-family:Arial;font-size:30px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:0px;	margin-left:0;text-align:left;background-color:green;"  > Welcome to</h2>
																<h3><font color="#A50050">'.$sitename.'!</font></h3>

                                                                


                      <h3  style=" border-bottom: 2px solid #FFE0C4;"><strong> Bring Marital Bliss in your life</strong></h3>


      
                                                          
														   <p>Your Name: '. $name.'
														     <br>
													        <span style="color:rgb(54, 54, 54);font-family:Lucida Grande,Trebuchet,Helvetica,sans-serif;font-size:12px;line-height:20px;margin-top:10px;text-align:justify">To get matches, try broadening your partner preferences</span>														   </p>
														   <p><table align="center" width="100%" style="font-family:Lucida Grande,Trebuchet,Helvetica,sans-serif;font-size:12px;line-height:18px;margin-top:20px;text-align:justify"> 
														   
														    <tr>
	    <td align="center"><b>'.$id.'</b></td>
	    <td valign="top" align="left">&nbsp;</td>
	    <td align="left" valign="top">&nbsp;</td>
	  </tr>
	  
	  ';
		
									while($fet_qu=mysql_fetch_array($qry_ex))
									{
										$education=$fet_qu['Education'];
										
										$mother=$fet_qu['Language'];
										
										$caste=$fet_qu['Caste'];
										
										$annualincome=$fet_qu['Annualincome'];
										
										$Profile=$fet_qu['Profile'];
										
										$id=$fet_qu['MatriID'];
										
										$view_id=$fet_qu['ID'];
										
										$photo=$fet_qu['Photo1'];
										
										$name=$fet_qu['Name'];
										
										$age=$fet_qu['Age'];

										$strheight=$fet_qu['Height'];
										
if($strheight =="1") { $strheight="Below 4ft"; }
else if($strheight =="2") { $strheight="4ft 6in"; }
else if($strheight =="3") { $strheight="4ft 7in"; }
else if($strheight =="4") { $strheight="4ft 8in"; }
else if($strheight =="5") { $strheight="4ft 9in"; }
else if($strheight =="6") { $strheight="4ft 10in"; }
else if($strheight =="7") { $strheight="4ft 11in"; }
else if($strheight =="8") { $strheight="5ft"; }
else if($strheight =="9") { $strheight="5ft 1in"; }
else if($strheight =="10") { $strheight="5ft 2in"; }
else if($strheight =="11") { $strheight="5ft 3in"; }
else if($strheight =="12") { $strheight="5ft 4in"; }
else if($strheight =="13") { $strheight="5ft 5in"; }
else if($strheight =="14") { $strheight="5ft 6in"; }
else if($strheight =="15") { $strheight="5ft 7in"; }
else if($strheight =="16") { $strheight="5ft 8in"; }
else if($strheight =="17") { $strheight="5ft 9in"; }
else if($strheight =="18") { $strheight="5ft 10in"; }
else if($strheight =="19") { $strheight="5ft 11in"; }
else if($strheight =="20") { $strheight="6ft"; }
else if($strheight =="21") { $strheight="6ft 1in"; }
else if($strheight =="22") { $strheight="6ft 2in"; }
else if($strheight =="23") { $strheight="6ft 3in"; }
else if($strheight =="24") { $strheight="6ft 4in"; }
else if($strheight =="25") { $strheight="6ft 5in"; }
else if($strheight =="26") { $strheight="6ft 6in"; }
else if($strheight =="27") { $strheight="6ft 7in"; }
else if($strheight =="28") { $strheight="6ft 8in"; }
else if($strheight =="29") { $strheight="6ft 9in"; }
else if($strheight =="30") { $strheight="6ft 10in"; }
else if($strheight =="31") { $strheight="6ft 11in"; }
else if($strheight =="32") { $strheight="7ft"; }
else if($strheight =="33") { $strheight="Above 7ft"; }	

									
									
									$content.='<p><table width="100%" align="center" background="#FEF2E4" bgcolor="#FEF2E4" style="font-family:Lucida Grande,Trebuchet,Helvetica,sans-serif;font-size:12px;line-height:18px;margin-top:20px;text-align:justify">	  
	  
	  
	  
	  <tr>
		<td align="center"><img src="'.$site_url.'/memphoto1/'.$photo.'" width="80" height="80" border="0"></td>
		<td valign="top" align="left">
			<table align="center" width="100%">
			
			<tr>
			<td align="left"><b>Name</b></td>
			<td align="left">:</td>
			<td align="left">'.$name.'</td>
			</tr>
			<tr>
			<td align="left"><b>Age</b></td>
			<td align="left">:</td>
			<td align="left">'.$age.'</td>
			</tr>
			<tr>
			  <td align="left"><strong>Religion</strong></td>
			  <td align="left">&nbsp;</td>
			  <td align="left">'.$religion.'</td>
			  </tr>
			<tr>
			  <td align="left"><b>Caste</b></td>
			  <td align="left">:</td>
			  <td align="left">'.$caste.'</td>
			  </tr>
			</table>
		
		</td>
		
		<td align="left" valign="top">
		<table align="center" width="100%">
			
			<tr>
			<td align="left"><b>Education</b></td>
			<td align="left">:</td>
			<td align="left">'.$education.'</td>
			</tr>
			<tr>
			<td align="left"><b>Occupation</b></td>
			<td align="left">:</td>
			<td align="left">'.$occupation.'</td>
			</tr>
			<tr>
			  <td align="left"><b>Height</b></td>
			  <td align="left">&nbsp;</td>
			  <td align="left">'.$strheight.'</td>
			  </tr>
			<tr>
			  <td align="left"><strong>Mother Tongue </strong></td>
			  <td align="left">:</td>
			  <td align="left">'.$mother.'</td>
			  </tr>
			</table>
		</td>
		</tr>
		
		<tr>
			<td colspan="3" align="left" width="50%"><b>Profile Description</b> : '.$Profile.'</td>
			</tr>
			
			<tr>
			<td colspan="3" align="right">For more details <a href="'.$site_url.'/viewfullprofile.php?ID='.$view_id.'">Click Here</a>
			 <hr style="border:0pt none;height:1px;background-color:rgb(204, 204, 204);color:rgb(204, 204, 204);margin-top:20px">
			</td>
			</tr>
			
			
			</table></p>
			
			
		';
							
							
								
									}
									
									
											
					$content.= '
                                                          </div>

														</td>

                                                    </tr>

                                                </table>

                                                                                              

                                            </td>

                                        </tr>

                                    </table>

                                   

                                </td>

                            </tr>

                        	<tr>

                            	<td align="center" valign="top">
<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                    	<tr>
                                        	<td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Standard Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="social">
                                                            <div mc:edit="std_social">
                                                                &nbsp;<a href="#">follow on Twitter</a> | <a href="#">friend on Facebook</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" width="350">
                                                            <div mc:edit="std_footer">
																<em>Copyright &copy; 2011 '.$sitename.', All rights reserved.</em>
																<br />
																
																<br />
																<strong>Our mailing address is:</strong>
																<br />
																'.$sitename.'<br />
																Mobile: '.$site_number.' <br />
                                                            </div>
                                                        </td>
                                                        <td valign="top" width="190" id="monkeyRewards">
                                                            <div mc:edit="monkeyrewards">
                                                             
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="utility">
                                                            <div mc:edit="std_utility">
                                                                &nbsp;<a href="'.$site_url.'/unsubscribe.php">unsubscribe from this list</a> | <a href="*|UPDATE_PROFILE|*">update subscription preferences</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                  </table>
                                   

                                	

                                                                                          

                              </td>

                          </tr>

                      </table>

                                   

                  </td>

              </tr>

    </table>

                        <br />

                    </td>

                </tr>

            </table>

  </center>

    </div>';			
							
			
		
		
		$subject='Daily Matrimonial Alerts from '.$sitename.'';
		
							ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
							echo $content;
							
							//mail("rajasekaran@i-netsolution.com", $subject,$content, $cabeceras);
							mail($mail, $subject,$content, $headers);
							
							//mail("ppandi85@gmail.com", $subject,$content, $cabeceras);
							//mail('nevilcrasto@rediffmail.com', $subject,$content, $cabeceras);


		$content='';
		}
	}
	


?>

