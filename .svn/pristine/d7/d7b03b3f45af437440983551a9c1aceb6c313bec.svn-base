function selectallprofile() 
{
//        var formname=document.getElementById(formname); 
        var recslen = document.searchrsforms.length; 
        if(document.searchrsforms.selectallcheckbox.checked==true) 
            { 
                for(i=1;i<recslen;i++) { 
                document.searchrsforms.elements[i].checked=true; 
                } 
    } 
    else 
    { 
        for(i=1;i<recslen;i++) 
        document.searchrsforms.elements[i].checked=false; 
    } 
} 
function clickforward() 
{ 
    var recslen =  document.searchrsforms.length; 
    var checkboxes="" 
    for(i=1;i<recslen;i++) 
    { 
        if(document.searchrsforms.elements[i].checked==true) 
        checkboxes+= " " + document.searchrsforms.elements[i].name 
    } 
    if(checkboxes.length>0) 
    { 
        document.searchrsforms.action="forward_message_submit.php?recsno="+checkboxes 
    	document.searchrsforms.submit() 
    } 
    else 
    { 
        alert("No profile is selected.") 
    } 
} 