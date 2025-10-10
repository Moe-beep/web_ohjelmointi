<?php
// Define pages in a table, finish creating the table below
$pages = [
'Etusivu' => 'homepage.php',
'Tuotteet' => 'product.php',
'Ota yhteyttä' => 'contact.php',
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

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    nav ul {
        list-style-type: none;
        padding: 20px 0;
        display: flex;
        background-color: black;
    }

    nav ul li {
        display: inline;
    }

    nav ul li a {
        text-decoration: none;
        color: white;
        padding: 20px 10px;
    }

    nav ul li a:hover {
        background-color: #e0e0e0;
    }
</style>