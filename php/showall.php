<?php

$con = mysql_connect("localhost","root","borntoowin");
if (!$con)
{
    echo "Error:can not connect to database<br/>";
}
else
{
   // echo "connected to the database<br/>";
}
mysql_select_db("registeration");
$result = mysql_query("SELECT * FROM user_info");

echo "<table border='1'><tr><th>First Name</th><th>Last name</th><th>Age</th><th>Gender</th><th>Email-id</th><th>Address</th><th>Country</th><th>State</th><th>City</th><th>Image</th><th>Language1</th><th>Language2</th><th>Language3</th></tr>";
while($row = mysql_fetch_array($result)){
    echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['age'] .
        "</td><td>".$row['gender']."</td><td>".$row['email_id']."</td><td>".$row['address']."</td><td>".
        $row['country']."</td><td>".$row['state']."</td><td>".$row['city']."</td><td><img src='http://spike6.webonise.com/upload/".$row['image'].
        "'/></td><td>".$row['languages']."</td><td>".$row['language2']."</td><td>".$row['language3']."</td><td>";


}

echo "</table>";
echo "<br/>";
//echo "connection closed <br/>";
?>
<html>
<body>
<a href="http://spike6.webonise.com/html/registeration_form.html">Add Employee</a>
</body>
</html>


<!---->
<!--echo '<form name="form1" action="http://corephp.webonise.com/employeeedit.php" method="get">-->
<!--    <input type="hidden" name="id" value="'.$id.'" />-->
<!--    <input type="submit" value="edit" />-->
<!--</form>';-->