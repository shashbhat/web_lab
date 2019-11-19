<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$operator=$_POST['operator'];
switch($operator)
{
case '+':$res=$op1+$op2;break;
case '-':$res=$op1-$op2;break;
case '*':$res=$op1*$op2;break;
case '/':if($op2==0)
$res=0;
else
$res=$op1/$op2;
break;
}
echo"<h1>simple calculator</h1>";
echo "<h2>".$op1.$operator.$op2."=".$res."</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simle calculator</title>
</head>
<body>
<form action="#" method="post">
<h1>Simple calculator</h1>
<p>first operand:<input type="text" name="op1"/></p>
<p>choose operator:
<input type="radio" name="operator" checked="checked" value="+"/>Add(+)
<input type="radio" name="operator" value="-"/>Substract(-)
<input type="radio" name="operator" value="*"/>Multiply(*)
<input type="radio" name="operator" value="/"/>divide(/)
</p>
<p>second operand:<input type="text" name="op2"></p>
<p><input type="submit" name="submit" value="submit">
<input type="reset" name="submit" value="Reset"></p>
</form>
</body>
</html>
