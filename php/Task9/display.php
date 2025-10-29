<?php
$name = $_POST['name'] ?? '';
$city = $_POST['city'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Information</title>

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
<body>

    <?php include 'navigation1.php'; ?>

    <div class="Display">
        <h2>Registration Details</h2>
        
        <?php if (!empty($name)): ?>
            <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
            <p><strong>City:</strong> <?= htmlspecialchars($city) ?></p>
        <?php else: ?>
            <p>No data received.</p>
        <?php endif; ?>

        <h3>Report a Problem</h3>
        <h4>Message will be sent to moe.naing@vuoksi.fi if you hit submit</h4>

        <form action="send.php" method="post">
            <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
            <input type="hidden" name="city" value="<?= htmlspecialchars($city) ?>">

            <label>Problem:</label><br>
            <input type="text" name="problem" required><br>

            <label>Description:</label><br>
            <textarea name="description" required></textarea><br>

            <button type="submit">Submit</button><br>
        </form>
    </div>

</body>
</html>