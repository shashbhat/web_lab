<html>
<head>
<title>Pattern Matching using python</title>
</head>
<body>
<?php
$res=shell_exec("python states.py");
$states=explode("\n",$res);
echo "statement is : <b>$states[4] </b> <br/> ";
echo "Word that end with xas:<b>$states[0]</b><br/>";
echo "Word that starts with k And ends  with s(Case insensitive):
<b>$states[1]</b><br/>";
echo "word that starts with M And ends with s:<b> $states[2] </b><br/>";
echo "word that ends with a:<b> $states[3] </b>";
?>
</body>
</html>
