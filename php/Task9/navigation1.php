<?php
$pages = [
    'Register' => 'register.php',
    'Display' => 'display.php',
];

// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <ul>
        <?php foreach ($pages as $name => $url): ?>
            <li class="<?= ($current_page == $url) ? 'active' : '' ?>">
                <a href="<?= $url ?>"><?= $name ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>