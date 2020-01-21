<script>
    function getChoice(str)
    {
        if (str == "") 
        {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest) 
        {
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status==200) 
            {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","GetEmployee.php?q="+str, true);
        xmlhttp.send();
    }
</script>

<!DOCTYPE html>
<html>
    <link rel = "StyleSheet" type="text/css" href="StyleSheet.css">
 <style>

        </style>
<body>

<div id="wrap">
<?php include 'Header.php';?>   
<?php include 'Menu.php' ;?>    
   <?php include 'Footer.php';?>
    <div class="undef">
    <div class="top_h"></div>
    
    <div id="content" align="left">

     <div style ="float:left">

     <form id = "myForm" action="Employee.php" method="GET">
        <fieldset >
            <select name = "employee" onchange="getChoice(this.value)" method = "post">
            <option value = ""> Select an employee: </option>
            <option value = "Mike Casselman"> Mike Casselman </option>
            <option value = "Pavel Saab"> Pavel Saab </option>
            <option value = "Vince Tam"> Vince Tam </option>
            <option value = "Souhail Abdala"> Souhail Abdala </option>
            <option value = "Nick Delorme"> Nick Delorme </option>
        </select>
    </fieldset>

</form>
     <div class="bottom" id = "txtHint">Display is here</div>
         

</br>
    </div>



</br>
</br>
</br>


   <div class="bottom_h"></div>
 </div>
    
</body>
</html>