<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <title>Price Calculator</title>
</head>

<body>
    <h1><strong>Tuotteen hinta tiedot </strong></h1>
    <?php
    // 1. Defining variables
    $product_name = "Eletric Scotter";
    $price = 349.90 ;
    $amount = 2;
    $discount_percentage = 15;
    
    // 2. Calculations

    $totalprice = $price * $amount;
    $discountedprice = $price * $discount_percentage/100 ;

    $finalprice = $totalprice - $discountedprice;

    // 3. Printing data to the browser
    echo "Tuote: " . $product_name . "<br>";
    echo "Kappalehinta: ".number_format($price, 2, ',', ' ')  . " £<br>";
    echo "Määrä: " .$amount  . " kpl<br>";
    echo "-----------------------------<br>";
    echo "Välisumma: " . number_format($totalprice, 2, ',', ' ') ." £<br>";
    echo "Allennus(15%): " . number_format($discountedprice, 2, ',', ' ') . " £<br>";
    echo "-----------------------------<br>";
    echo "<strong>Lopullinen hinta: </strong>".number_format($finalprice, 2, ',', ' ')  . " £<br>";

    // number_format() formats a number. For example: number_format(number, number_of_decimals, decimal separator, thousand separator)     
    ?>
</body>

</html>