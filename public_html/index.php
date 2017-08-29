<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <script src="less-2.7.2.js" type="text/javascript"></script>
    
</head>
<body>

<?php

$connect = mysql_connect("localhost","p96278i3_mb","21072013");

$db = mysql_select_db("p96278i3_mb");



$result = mysql_query(" SELECT * FROM mytable ");

mysql_close();


while($row = mysql_fetch_array($result))
{
 echo  "<div>";  
echo $row['image']."<br>";
echo "<h2>".$row['title']."</h2>";
echo "<p class=\"text\">".$row['text']."</p>";
echo "</div>" ;

}


?>
</body>
</html>
