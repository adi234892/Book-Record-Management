<?php
$con=mysqli_connect('localhost',"root");
mysqli_select_db($con,"BRM_DB");
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

?>
<html>
<head>
 <title>Delete Book Record</title>
 <style>
 Table
{
	border-style:solid;
	border-color:blue;
	width:400px;
}
tr
{
background-color:violet;	
}
 </style>
 </head>
 <body>
 <h1>Book Record Management</h1>
  <form action="deletion.php" method="post">
  <table border="solid" cellspacing="0px"  id="viewTable">
  <tr>
  <th>Bookid</th>
  <th>Title</th>
  <th>Price</th>
  <th>Author</th>
  <th>Select To Delete</th>
  </tr>
  <?php
  for($i=1;$i<=$num;$i++)
  {
	
	$row=mysqli_fetch_array($result);
	?>
	<tr>
  <td> <?php echo $row['BOOKID'];?></td>
  <td> <?php echo $row['TITLE'];?></td>
  <td> <?php echo $row['PRICE'];?></td>
  <td> <?php echo $row['AUTHOR'];?></td>
  <td><input type="checkbox" value="<?php echo $row['BOOKID']; ?>" name="b<?php echo $i; ?>"/></td>
  </tr>
  <?php
  }
  ?><tr>
  <td colspan="5" ><input type="submit" value="Delete"?></td>
  </tr>
  </table>
  </form>