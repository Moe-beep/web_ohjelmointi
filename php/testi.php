<!DOCTYPE html>
<html>
  <head>
    <title>First PHP page</title>
  </head>
  <body>
    <p>There are <?php echo 24 * 60 * 60; ?> seconds in a day.</p>
    <p>Today is <?php echo date("jnY"); ?>.</p>
    <p>The server is running PHP version <?php echo PHP_VERSION; ?>.</p>
    <?php
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>" . $i;
    }
    echo "</ul>";

    $greeting = "<p> Hello People!! <p>";
    $times = 5;

    while ($times > 0) {
        echo $greeting . "<br>";
        $times--;
    }
    ?>
  </body>
</html>