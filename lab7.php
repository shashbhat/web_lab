<html>
<head>
<meta http-equiv="refresh" content="1">
<title>Digital Clock</title>
<style type="text/css">
h1{text-align:centre}
</style>
<body>
<?php
echo "<h1>digital clock</h1>";
echo "<hr/>";
$date = new DateTime('now',new DateTimeZone('Asia/Kolkata'));
echo $date->format('d-m-Y H:i:s');
echo "<hr/>";
?>
</body>
</html>
