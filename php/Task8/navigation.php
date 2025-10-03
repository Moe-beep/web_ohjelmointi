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
    nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        gap: 10px;
    }

    nav ul li {
        display: inline;
    }

    nav ul li a {
        text-decoration: none;
        color: #007bff;
        padding: 5px 10px;
        border-radius: 5px;
    }

    nav ul li a:hover {
        background-color: #e0e0e0;
    }
</style>