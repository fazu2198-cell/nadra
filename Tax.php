<?php
$Phonemodel = "Iphone 17 pro max";
$BasePrice = 450000;
$isimported = true;
if ($isimported)
    {
        $tax = $BasePrice * 0.20;
        $Finalprice = $BasePrice + $tax;
        } 
        else
            {
                $tax = 0;
                $Finalprice = $BasePrice;
                }
echo "<h1>The final price for the $Phonemodel is Rs. $Finalprice</h1>";
        ?>