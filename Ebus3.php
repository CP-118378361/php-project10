<!DOCTYPE html>
<html>
<body background="backpic1.jpg">
     <h1><title> Purchase Receipt</title> </h1>
 <!--  //Starting the session to get the session variable from the last page-->   
 <?php
 
 session_start();  
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ",$fullNameValue.".";
echo "<hr></hr>";
echo "The total value is: ".$totalValue.",";
?>

</body>
</html>


