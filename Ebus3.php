<!DOCTYPE html>
<html>
<body background="backpic1.jpg">
    <img src="logo.png" style="float:left" width="300" height="200">
 <!--  //Starting the session to get the session variable from the last page-->
 <h1><title> Purchase Receipt</title> </h1>
 <?php
 
 session_Start();  
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ",$fullNameValue.".";
echo "<br></br>";
echo "The total value is: ".$totalValue.".";
?>

</body>
</html>


