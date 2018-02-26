<?php include('protect.php'); ?>

<? 



// Database Connection 

include '../dbconnect.php'; 



// If current page number, use it 

// if not, set one! 



if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 



// Define the number of results per page 

$max_results = 25; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  



// Perform MySQL query on only the current page number's results 



$sql = mysql_query("SELECT * FROM register where Status='Active' order by ID desc"); 



//while($row = mysql_fetch_array($sql))

//{ 

    // Build your formatted results here. 

    //echo $row['status']."<br />"; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Remove Active Members</title>

</head>

<link href="style.css" rel="stylesheet" type="text/css">

<script language="javascript">

function goDel() 

{ 

    var recslen =  document.forms[0].length; 

    var checkboxes="" 

    for(i=1;i<recslen;i++) 

    { 

        if(document.forms[0].elements[i].checked==true) 

        checkboxes+= " " + document.forms[0].elements[i].name 

    } 

    

    if(checkboxes.length>0) 

    { 

        var con=confirm("Are you sure you want to delete. \n\n Once Delete you can not retrieve again.\n\n Backup your Database first then do delete."); 

        if(con) 

        { 

            document.forms[0].action="approve_mem_to_del_submit.php?recsno="+checkboxes 

            document.forms[0].submit() 

        } 

    } 

    else 

    { 

        alert("No profile is selected.") 

    } 

} 



function selectall() 

{ 

//        var formname=document.getElementById(formname); 



        var recslen = document.forms[0].length; 

        

        if(document.forms[0].topcheckbox.checked==true) 

            { 

                for(i=1;i<recslen;i++) { 

                document.forms[0].elements[i].checked=true; 

                } 

    } 

    else 

    { 

        for(i=1;i<recslen;i++) 

        document.forms[0].elements[i].checked=false; 

    } 

} 

</script>



<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}

//-->

</script>



<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>

        <td width="80%" valign="top">

		

		<form action="" method="post" name="" id="">

		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td>&nbsp;</td>

                <td class="headertext">&nbsp;</td>

              </tr>

              <tr>

                <td width="3%"><img src="images/icon27.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">Remove Active Members </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                    <div align="left" class="smalltextred"> Below is the list of all Active Members.&nbsp; You can click on the  ID to view the register details. and you can clicking Delete link to Permanently remove the members from database. </div>

                  </div></td>

                </tr>

              </table>

              <br />

              <br /></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">

			

			  <a href="javascript:goDel()" style="padding:5px; margin:10px; float:left; background:#0066FF; color:#fff;">Delete</a>

			

			  <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

				<thead>

					 <tr>

					  <th style="width:50px; text-align:left;" ><input name="topcheckbox" type="checkbox" class="check" id="topcheckbox" onclick="selectall();" value="ON" /></th>
					  <th>Email Id</th>

					  <th width="104" class="paratext">MatriID</th>

					  <th width="125" class="paratext">Profile</th>

					  <th width="243" class="paratext">Status</th>

					</tr>

				</thead>

				<tbody>						

					<? $i = 1; 

        			  while($row=mysql_fetch_array($sql)) {     ?>

					<tr>

					  <td><input name="<? echo $row['MatriID']; ?>" type="checkbox" class="check" /></td>

					  <td><? echo $row['ConfirmEmail']; ?></td>
					  
					  <td><? echo $row['ID']; ?></td>

					  <td><a href="viewprofile.php?ID=<?php echo $row['MatriID'] ?>" target="_blank">View</a></td>

					  <td><? echo $row['Status']; ?></td>

					</tr>

					<? } ?>				

				</tbody>

			  </table>

			

			   <br /><br />

             

           

			  

             

			  

			  

			  </td>

            </tr>

          

        </table>

		</form>

		</td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

