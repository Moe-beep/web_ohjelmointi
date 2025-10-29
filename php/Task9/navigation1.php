<?php
$pages = [
    'Food' => 'food.php',
    'Register' => 'register.php',
    'Display' => 'display.php',
];

// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<nav>
    <ul>
        <?php foreach ($pages as $name => $url): ?>
            <li class="<?= ($current_page == $url) ? 'active' : '' ?>">
                <a href="<?= $url ?>"><?= $name ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>