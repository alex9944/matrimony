							  <?php

//							  if(isset($_SESSION['payment_status']) and  $_SESSION['payment_status'] != '' )

	//						 { ?>

								 <!--<span class="icon status stat_online">-->

								  <?php

								  // if(isset($_SESSION['online_status']) and $_SESSION['online_status'] == 'online') 
									//echo 'Active: ';
								   if(((isset($searchresultfetch['online_status']) and $searchresultfetch['online_status'] == 'online')) || isset($_SESSION['payment_status']))

									 {

//									   echo '<font color="#000000" style="font-weight:normal;">Active :</font> <strong>Online Now</strong>'; 

									   ?>

<!--									   <a href="javascript:void(0)" onClick="javascript:chatWith('<?php //echo $searchresultfetch['MatriID']?>')">Chat with <?php  //echo $searchresultfetch['Name']?></a>
-->
									   <?php 
									   $chat = 1;

									 }

									 else

									   {

/*										echo '<img src="images/offline_icon.png" alt="Offline" title="Offline" >'; 
*/
//										echo '<font color="#000000" style="font-weight:normal;">Active :</font> <font class="clearall">Offline Now</font>';
$chat = 0;
									   }?> 

<!--</span>--> <?php 

		//					   } 
		$online_mem_sql = "SELECT MatriID FROM register WHERE online_status = 'online' AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$online_mem_exec = mysql_query($online_mem_sql);
		$onlinemember = "";
		while($online_mem_result = mysql_fetch_array($online_mem_exec))
		{
			if($onlinemember == "")
				$onlinemember =  $online_mem_result["MatriID"];
			else	
				$onlinemember =  $onlinemember.",".$online_mem_result["MatriID"];
		}		
//		echo $onlinemember;
		$explodeonlinemember = explode(",",$onlinemember);


	   $onlinechatmsg = '<font color="#000000" style="font-weight:normal;">Active :</font> <strong>Online Now</strong>'; 
	   $offlinechatmsg = '<font color="#000000" style="font-weight:normal;">Active :</font> <font class="clearall">Offline Now</font>';

		?>
