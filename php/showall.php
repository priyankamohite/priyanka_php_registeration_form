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
mysql_select_db("registeration");
$result = mysql_query("SELECT * FROM user_info");

echo "<table border='1'><tr><th>First Name</th><th>Last name</th><th>Age</th></tr>";
while($row = mysql_fetch_array($result)){
    echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['age'] . "</td></tr>";
}

echo "</table>";
echo "<br/>";
echo "connection closed";
?>
