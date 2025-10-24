<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Font links from google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Link for the Font Awsome web page found in cdnj.com which are logos for the portfolio-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <title>Register</title>
</head>

<body>
    <header>
        <!--php include can be added here -->
        <?php include 'navigation1.php'; ?>
    </header>
    <div class="Register">
        <h2>Register</h2>
        <form action="send.php" method="post">
            <p>Name: <br>
                <input type="text" name="name">
            </p>
            <p>Feedback: <br>
                <textarea name="message"></textarea>
            </p>
            <p><input type="submit" value="Send"></p>
        </form>
    </div>
</body>

</html>