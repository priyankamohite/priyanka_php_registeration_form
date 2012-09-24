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

// some code

mysql_close($con);
echo "<br/>connection closed";
?>
















