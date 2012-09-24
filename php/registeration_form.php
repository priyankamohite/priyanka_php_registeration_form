<?php
$con = mysql_connect("localhost","root","borntoowin");
if (!$con)
{
    echo "Error:can not connect to database<br/>";
}
else
{
    echo "connected to the database<br/>";
}

$firstNname=$_POST["Fname"];
$lastName=$_POST["Lname"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$emailId=$_POST["email_id"];
$address=$_POST["address"];
$country=$_POST["country"];
$state=$_POST["state"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];

mysql_select_db("registeration");
$query=" insert into user_info(first_name,last_name,age,gender,email_id,address,country,state,city,pincode) values ('$firstNname','$lastName','$age','$gender','$emailId','$address','$country','$state','$city','$pincode')";

$result=mysql_query($query);
if($result)
{
  echo "data inserted";
}


//file upload validation
if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
    print_r($_FILES);
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
}

mysql_close($con);
echo "<br/>";
echo "connection closed";
?>
















