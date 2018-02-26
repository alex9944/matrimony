							  <?php

							  if(isset($_SESSION['payment_status']) and  $_SESSION['payment_status'] != '' )

							 { ?>

								 <span class="icon status stat_online">

								  <?php

								  // if(isset($_SESSION['online_status']) and $_SESSION['online_status'] == 'online') 
									echo 'Active: ';
								   if(isset($row['online_status']) and $row['online_status'] == 'online')

									 {

									   echo '<strong>Online Now</strong>'; 

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
										echo '<font class="clearall">Offline</font>';
$chat = 0;
									   }?> 

</span> <?php 

							   } ?>
