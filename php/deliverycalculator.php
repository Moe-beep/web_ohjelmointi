<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Cost Calculator</title>
</head>
<body>
    
<h1>Laske toimituskulut</h1>
    <?php

    $shippingMethod = "Pickup";

    echo "<p>Valitus toimitustapa: " . $shippingMethod . "</p><br>";
    function calculateShippigCost($shippigMethod){
        switch($shippigMethod){
            case "Pickup":
                return 0.00;
            case "Postal Package":
                return 6.90;
            case "Home Delivery":
                return 12.50;
            default:
                return -1;
        }
    }
    

    $price = calculateShippigCost($shippingMethod);
    if($price >= 0){
        echo "<b>toimituskulut: " . number_format($price, 2, ',', ' ') . " £</b><br>";
    } else {
        echo "<b>Invalid delivery method</b>";
    }
    ?>
</body>
</html>