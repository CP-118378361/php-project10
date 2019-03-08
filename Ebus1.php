<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
        <body background="backpic1.jpg">
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
                <img src="logo.png" style="float:left" width="300" height="200">
                <h1 style="text-align: center; color:teal"><b><i>Select a Consulting Service.</i></b></h1>    
        <hr/>
        <right>
            <table cellspacing="10">
                
                <tr>
                    <td><h4>Blockchain @$1000.</h4></td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td><h4>Autonomous Things @$2000.</h4></td>
                    <td><input type="radio" id="AutThings" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td><h4>Immersive Experience @$3000.</h4></td>
                    <td><input type="radio" id="ImmExp" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </right>
        <br/>
         <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b><h4>Amount</h4></b></td>
            </tr>
                <tr>
                    <td><h4> Total</h4></td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td><h4>Discount @ 30%</h4></td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td><h4>+ VAT @ 40%</h4></td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td><h4>Total</h4></td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
            <input style=background-color:lightyellow; type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input style=background-color:lightyellow; type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input style=background-color:lightyellow; type="submit" name="btnProceed" id="btnProceed" onclick="" value="Add to Shopping Cart"/>
        </center>
            </form>
        </div>
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var AutThings = parseFloat(document.getElementById('AutThings').value);
                    var ImmExp = parseFloat(document.getElementById('ImmExp').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                        
                    }
                   else if (document.getElementById('AutThings').checked) {
                        document.intCalc.txtSubTot.value = AutThings;
                        subAmount = AutThings;
                        calculation(subAmount);
                        
                    }
                    else if (document.getElementById('ImmExp').checked) {
                        document.intCalc.txtSubTot.value = ImmExp;
                        subAmount = ImmExp;
                        calculation(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .30);
                    var vatCalc= parseFloat(subTotal * .40);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html>
