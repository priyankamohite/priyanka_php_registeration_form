<?php
$con = mysql_connect("localhost","root","borntoowin");
if (!$con)
{
    echo "Error:can not connect to database<br/>";
}
else
{
    //echo "connected to the database<br/>";
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
$Language=serialize($_POST['$Language']);

$Lang = $_POST['Language'];


    for($i=0; $i < 4; $i++)
    {
        echo($Lang[$i] . " ");
    }

mysql_select_db("registeration");

$path="/home/webonise/projects/php/app2012/registeration_form/upload/".basename($file_name);
if (move_uploaded_file($file['tmp_name'], $path))
{
    $query=" insert into user_info(first_name,last_name,age,gender,email_id,address,country,state,city,pincode,image,languages,language2,language3) values ('$firstNname','$lastName','$age','$gender','$emailId','$address','$country','$state','$city','$pincode','$file_name','$Lang[0]','$Lang[1]','$Lang[2]')";

    $result=mysql_query($query);
    if($result)
    {
        echo "Your information is added succsesfully.....<br/><br/>";

    }
//    echo "inserted succsesfully";
}else
{
 echo "file error";
}




mysql_close($con);
echo "<br/>";
//echo "connection closed";
?>

<a href="http://spike6.webonise.com/php/showall.php">Show all Employees</a>














