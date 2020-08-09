<?php
$db_host="remotemysql.com";
$db_user="7vC5llP1SP";
$db_password="AUeifqHPYS";
$db_name="7vC5llP1SP";

//create conection
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(isset($_REQUEST['save'])){
    if(($_REQUEST['name']=="") || ($_REQUEST['roll']=="") || ($_REQUEST['address']=="")){
        echo "<small>Fill All Fields..</small><hr>";
    }
else{
    $name=$_REQUEST['name'];
    $roll=$_REQUEST['roll'];
    $address=$_REQUEST['address'];
    $sql="INSERT INTO student(name,roll,address) VALUES('$name','$roll','$address')";
    
    if(mysqli_query($conn,$sql)){
        echo "New Recorde Inserted Sucessfully";
    }else{
        echo "Unable to Insert Data";
    }
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Student Form</h2>

    <form method="post" >
       Name:<br>
       <input type="text" name="name">
       <br>
       Roll:<br>
       <input type="text" name="roll">
       <br>
       Address:<br>
       <input type="text" name="address">
       <br>
       <br><br>
       <input type="submit" name="save" value="submit">
       </form>
</body>
</html>