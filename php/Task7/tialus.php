<?php
$shippingMethod = $_POST["delivery"] ?? "Pickup";

function calculateShippigCost($shippigMethod)
{
    switch ($shippigMethod) {
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 200px 700px;
        }

        .page {
            background: white;
            width: 400px;
            min-height: 650px;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        input[type="number"],
        select,
        button {
            width: 100%;/* fill the container horizontally */
            padding: 10px;
            box-sizing: border-box;/* include padding in width */
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Tialus</title>
</head>

<body>
    <div class="page">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1>Tilaa tuote</h1>
            <h3>Tuote: sähköpotkulauta(349.90 €/kpl)</h3>
            <label for="amount">Määrä: </label><br>
            <input type="number" name="amount" id="amount" min="1"><br>
            <label for="delivery">Toimitustapa: </label><br>

            <select name="delivery" id="delivery">
                <option value="PickUp">Nouto</option>
                <option value="Postal Package">Postipaketti</option>
                <option value="Home Delivery">kotiinkuljetus</option>
            </select><br>
            <p><button type="Submit">Laske Hinta</button><br></p>
        </form>

        <!-- separator line -->
        <hr style="margin: 50px 0; border: 1px solid #ccc;">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $määrä = $_POST["amount"] ?? 0;
            $valisumma = $määrä * 349.90;
            $toimitus = $_POST["delivery"] ?? "Pickup";
            $kulut = calculateShippigCost($shippingMethod);
            $kokonaishinta = $valisumma + $kulut;

            echo "Määrä: " . number_format($määrä, 2, ',', ' ') . " kpl <br>";
            echo "Valisumma: " . number_format($valisumma, 2, ',', ' ') . " €<br>";
            echo "Toimitustapa: " . $toimitus . "<br>";
            echo "Toimituskulut: " . number_format($kulut, 2, ',', ' ') . " €<br>";
            echo "<h3>Yhteensä: " . number_format($kokonaishinta, 2, ',', ' ') . " €</h3> <br>";
        }
        ?>
    </div>


</body>

</html>