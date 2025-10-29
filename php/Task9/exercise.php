<?php
$exercise_categories = [
    'Cardio' => [
        ['name' => 'Running', 'image' => 'images/running.png', 'description' => 'Improves endurance and strengthens your heart.'],
        ['name' => 'Cycling', 'image' => 'images/cycling.png', 'description' => 'Great for leg muscles and low-impact cardio.']
    ],
    'Strength Training' => [
        ['name' => 'Push-Ups', 'image' => 'images/pushups.png', 'description' => 'Strengthens chest, shoulders, and arms.'],
        ['name' => 'Squats', 'image' => 'images/squats.png', 'description' => 'Builds leg muscles and improves posture.']
    ],
    'Flexibility' => [
        ['name' => 'Yoga', 'image' => 'images/yoga.png', 'description' => 'Enhances flexibility, balance, and relaxation.'],
        ['name' => 'Stretching', 'image' => 'images/stretching.png', 'description' => 'Reduces muscle tension and improves range of motion.']
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navigation1.php'; ?>
    
    <h1>Exercise Categories</h1>

    <?php foreach ($exercise_categories as $category => $exercises): ?>
        <section class="food-category">
            <h2><?= $category ?></h2>
            <div class="food-items">
                <?php foreach ($exercises as $exercise): ?>
                    <div class="food-item">
                        <img src="<?= $exercise['image'] ?>" alt="<?= $exercise['name'] ?>">
                        <h3><?= $exercise['name'] ?></h3>
                        <p><?= $exercise['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</body>
</html>