<?php
$size=sizeof($_POST);
$records=$size/4;

for($i=1;$i<=$records;$i++)
{
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];
	
	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	
	$index3="price".$i;
    $price[$i]=$_POST[$index3];
	
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($k=1;$k<=$records;$k++)
{
	$q="update book
	set title='$title[$k]', price=$price[$k], author='$author[$k]'
	where bookid=$bookid[$k]";
	$status=mysqli_query($con,$q);
}
	mysqli_close($con);

?>
<html>
  <head>
   <title>Updation</title>
   </head>
   <body>
   <h1>Book Record Management</h1>
    <p><?php 
	    if($status)
		echo $records." records updated";
	?>
	</p>
	 Homepage<a href="Home.php">click here</a>
	</body>
</html>