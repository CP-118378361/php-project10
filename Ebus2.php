<?php
session_start();
$fullNameValue = "";
$totalValue2 ="";
/*
 * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;
        
/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title> EBusiness 2</title>
    </head>
    <body background="backpic1.jpg">
        <div class="form">
            <form name ="Details" method="post" action="Ebus3.php">
                <img src="logo.png" style="float:left" width="300" height="200">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>        
                        </tr>
                        <tr>
                            <td><h3>Name</h3></td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td> 
                        </tr>
                        <tr>
                            <td><h3>Phone number</h3></td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>
                        <tr>
                            <td><h3>Pin</h3></td>
                            <td><input type="text"  max="4" id="txtPassword" name="txtPassword" value=""/></td> 
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
                <center>
                    
                    <input type="submit" name="btnContinue" onclick="" value="Continue"/>
                </center>
        </div>
</form>
    </b</body>
        </html>
</html>
    


