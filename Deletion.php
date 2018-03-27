<?php
 $size=sizeof($_POST);
 $j=1;
 if(!$size==0)
 {
 for($i=1;$i<=$size;$i++,$j++)
 {
	 $index="b".$j;
	 if(isset($_POST[$index]))
         $b_id[$i]=$_POST[$index];
	 else
		 $i--;
 }
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'BRM_DB');
 for($k=1;$k<=$size;$k++)
 {
 $q="delete from book where BOOKID=".$b_id[$k];
 $status=mysqli_query($con,$q);
 }
 mysqli_close($con);
 ?>
 <html>
  <head>
   <title>Deletion</title>
   </head>
   <body>
   <h1>Book Record Management</h1>
    <p><?php 
	    if($status)
		    echo $size."Record Deleted";
 
        else
            echo "record not deleted";
 }
else
     echo "please select a value";
	?>
	</p>
	 Homepage<a href="Home.php">click here</a>
	</body>
</html>