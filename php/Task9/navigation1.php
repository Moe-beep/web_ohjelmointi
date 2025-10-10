<?php
$pages = [
    'Register' => 'register.php',
    'Display' => 'display.php',
    'Contact' => 'contact.php',
];
// Get the file name of the current page
$current_page = basename($_SERVER['PHP_SELF']);
?>

<head>
    <!--Font links from google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">>

    <!--Link for the Font Awsome web page found in cdnj.com which are logos for the portfolio-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="style.css">
</head>

<nav>
    <ul>
        <!--Step through the pages with a foreach statement. Set the class="active" to the <li> element of the current page. Create href links in a loop.  -->
        <?php foreach ($pages as $name => $url): ?>
            <li class="<?php if ($current_page == $url) echo 'active'; ?>">
                <a href="<?php echo $url; ?>"><?php echo $name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

