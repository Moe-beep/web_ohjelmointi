<?php
$categories = [
    'Vegetables' => [
        ['name' => 'Carrot', 'image' => 'images/carrot.png', 'description' => 'Rich in vitamin A, good for eyes.'],
        ['name' => 'Broccoli', 'image' => 'images/broccoli.png', 'description' => 'High in fiber and vitamin C.']
    ],
    'Meat' => [
        ['name' => 'Chicken', 'image' => 'images/chicken.png', 'description' => 'Lean protein, low in fat.'],
        ['name' => 'Beef', 'image' => 'images/beef.png', 'description' => 'Rich in iron and protein.']
    ],
    'Fruits' => [
        ['name' => 'Apple', 'image' => 'images/apple.png', 'description' => 'High in fiber, great for digestion.'],
        ['name' => 'Banana', 'image' => 'images/banana.png', 'description' => 'Rich in potassium.']
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Healthy Foods</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navigation1.php'; ?>
    <h1>Healthy Foods</h1>

    <?php foreach ($categories as $category => $foods): ?>
        <section class="food-category">
            <h2><?= $category ?></h2>
            <div class="food-items">
                <?php foreach ($foods as $food): ?>
                    <div class="food-item">
                        <img src="<?= $food['image'] ?>" alt="<?= $food['name'] ?>">
                        <h3><?= $food['name'] ?></h3>
                        <p><?= $food['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</body>

</html>