<html>
<head>
<title>Selection Sort on student record</title>
<style type="text/css">
h1{text-align:center}
</style>
</head>
<body>
<h1>Selection Sort sample student data</h1>
<form action =" " method="post">
<h1>Sort By:
<select name="field">
<option value=""disabled selected> choose Field</option>
<option value="name">Name</option>
<option value="usn">USN</option>
<option value="year">Years</option>
<option value="marks">Marks</option>
<option value="coll">College</option>
</select>
</h1>
<h1>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</h1>
</form>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "student";

$sql = mysqli_connect($server,$user,$password,$db);

function selection_sort($data,$keys)
{
for($i=0;$i<count($data)-1;$i++)
{
$min=$i;
for($j=$i+1;$j<count($data);$j++)
{
if($data[$j]<$data[$min])
{$min=$j;
}
}
$data=swap_position($data,$i,$min);
$keys=swap_position($keys,$i,$min);
}
return $keys;
}

function swap_position($data1,$left,$right)
{
$temp=$data1[$right];
$data1[$right]=$data1[$left];
$data1[$left]=$temp;
return $data1;
}

$str="select * from studentdetails";
$res=mysqli_query($sql,$str);
$field="none";
$myarr=[];
$original=[];
$i=1;
while($arr=mysqli_fetch_assoc($res))
{
$myarr[]=$arr;
}
if(isset($_POST['submit']) && isset($_POST['field']))
{
$field=$_POST['field'];
$original=array_column($myarr,$field,'id');
$originalKey=array_keys($original);
$originalVal=array_values($original);
$sortedkeys=selection_sort($originalVal,$originalKey);
$myarr=[];
foreach($sortedkeys as $key)
{
$str="select * from studentdetails WHERE id='$key'";
$res=mysqli_query($sql,$str);
$myarr[]=mysqli_fetch_assoc($res);
}
}
?>
<table border="1" width="80%"align="center">
<tr>
<th colspan="6">
Student Details[Sorted by:<?php echo $field;?>]</th>
</tr>
<tr>
<th>No</th>
<th>Name</th>
<th>USN</th>
<th>Year</th>
<th>Marks</th>
<th>College</th>
</tr>
<?php foreach($myarr as $arr):?>
<tr> 
<td><?php echo $i++;?></td>
<td><?php echo $arr['name'];?></td>
<td><?php echo $arr['usn'];?></td>
<td><?php echo $arr['year'];?></td>
<td><?php echo $arr['marks'];?></td>
<td><?php echo $arr['college'];?></td>
<tr>
</tr>
<?php endforeach;?>
</table>
</body>
</html>
