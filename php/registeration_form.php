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
$file=$_FILES['file'];
$file_name=$file['name'];

mysql_select_db("registeration");

$path="/uploads/".basename($file_name);
if (move_uploaded_file($file['tmp_name'], $path))
{
    //echo "inserted succsesfully";
}
else
{
 //echo "file error";
}


$query=" insert into user_info(first_name,last_name,age,gender,email_id,address,country,state,city,pincode,image) values ('$firstNname','$lastName','$age','$gender','$emailId','$address','$country','$state','$city','$pincode','$path')";

$result=mysql_query($query);
if($result)
{
  echo "data inserted";
}


mysql_close($con);
echo "<br/>";
echo "connection closed";
?>
















