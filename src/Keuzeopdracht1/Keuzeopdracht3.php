<?php
if (isset($_POST["submit"]))
    {
    if (isset($_POST["subject"]))
    {
        foreach ($_POST['subject'] as $subject)
            echo '<img src="IMG/' . $subject . '.jpg">';
    }
    else
        echo "Select a car of your choosing!";
}
?>

<html lang="en">
<body>
<form method="post">
    <select name="subject" multiple size=4>
        <option value='Ferrari'>Ferrari</option>
        <option value="Lambo">Lambo</option>
        <option value="Audi">Audi</option>
        <option value="VW">VW</option>

    </select>
    <input type="submit" name="submit" value=Submit>
</form>
</body>
</html>
