<!DOCTYPE html>
<html>
<head>
    <title>Lemmikkisivu</title>
</head>

<body>
    <h1>HTML lomakeharjoitus</h1>
    <form action="/<br>submission.php">
        <label for="fname">Lemmikin Nimi:</label><br>
        <input type="text" id="lnimi" name="lnimi"><br>
        <label for="lsyntyn">Lemmikin Syntynmäaika:</label><br>
        <input type="date" id="lsyntyn" name="lsyntyn">
    </form>
    <p>Lemmikin eläinlaji:</p>
    <form action="">
        <input type="radio" id="koira" name="pet_name" value="Koira">
        <label for="koira">Koira</label><br>
        <input type="radio" id="kissa" name="pet_name" value="Kissa">
        <label for="kissa">Kissa</label><br>
        <input type="radio" id="hamsteri" name="pet_name" value="Hamsteri">
        <label for="hamsteri">Hamsteri</label><br>
        <input type="radio" id="hamsteri" name="pet_name" value="Hamsteri">
        <label for="hamsteri">Hamsteri</label><br>
        <input type="radio" id="käärme" name="pet_name" value="käärme">
        <label for="käärme">Käärme</label><br>

    <p>Lemmikin lempiasiat</p>
        <input type="checkbox" id="nukkuminen" name="task" value="Nukkuminen">
        <label for="nukkuminen">Nukkuminen</label><br>
        <input type="checkbox" id="ruoka" name="task" value="Ruoka">
        <label for="ruoka">Ruoka</label><br>
        <input type="checkbox" id="leikkiminen" name="task" value="Leikkiminen">
        <label for="leikkiminen">Leikkiminen</label><br>
        <input type="checkbox" id="juokseminen" name="task" value="Juokseminen">
        <label for="juokseminen">Juokseminen</label><br>

    <p>Lemmikin väri:</p>
        <label for="petcolor">Valitse väri:</label>
        <input type="color" id="petcolor" name="petcolor"><br>

    <p>Lemmikin varusteet:</p>
    <label for="tools">Varusteet:</label>
    <select name="tools" id="tools" size="4" multiple>
        <option value="panta">Panta</option>
        <option value="hihna">Hihna</option>
        <option value="kuljetuslaatikko">Kuljetusaatikko</option>
        <option value="lelut">Lelut</option>
    </select><br>
    
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    </form>
</body>

</html>