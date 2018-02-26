function goDel() 

{ 

    var recslen =  document.forms.length; 

    var checkboxes="" 

    for(i=1;i<recslen;i++) 

    { 

        if(document.forms.elements[i].checked==true) 

        checkboxes+= " " + document.forms.elements[i].name 

    } 

    

    if(checkboxes.length>0) 

    { 

        var con=confirm("Are you sure you want to delete"); 

        if(con) 

        { 

            document.forms.action="receivemessage_del_submit.php?recsno="+checkboxes 

            document.forms.submit() 

        } 

    } 

    else 

    { 

        alert("No message is selected.") 

    } 

} 



function selectall() 

{ 

//        var formname=document.getElementById(formname); 



        var recslen = document.forms.length; 

        

        if(document.forms.topcheckbox.checked==true) 

            { 

                for(i=1;i<recslen;i++) { 

                document.forms.elements[i].checked=true; 

                } 

    } 

    else 

    { 

        for(i=1;i<recslen;i++) 

        document.forms.elements[i].checked=false; 

    } 

} 
