<?php
$con = mysql_connect("localhost","root","borntoowin");
if (!$con)
{
    echo "Error:can not connect to database";
}
else
{
    echo "connected to the database";
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

mysql_close($con);
echo "connection closed";
?>
















