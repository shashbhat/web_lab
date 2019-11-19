<?php
$mat=Array(Array(1,2),
Array(4,5),
Array(7,8));
$transpose=array();
echo "<html><head><title>matrix transpose</title></head><body>";
echo "<h1>Matrix is:<br/>";
for($i=0;$i<count($mat);$i++)
{
for($j=0;$j<count($mat[0]);$j++)
{
echo $mat[$i][$j]."";
}
echo "</br/>";
}
echo "</h1>";
for($i=0;$i<count($mat);$i++)
for($j=0;$j<count($mat[0]);$j++)
{
$transpose[$j][$i]=$mat[$i][$j];
}

echo "<h1>Transpose of Matrix is:<br/>";
for($i=0;$i<count($transpose);$i++)
{
for($j=0;$j<count($transpose[0]);$j++)
{
echo $transpose[$i][$j]." ";
}
echo "<br/>";
}
echo "</h1>";
echo "</body>                                                                                                       
</html>";
