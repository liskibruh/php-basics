<?php

if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = "(Not Entered)";
}

echo <<< _END
    <html>
        <head>
            <title>Form Test</title>
        </head>
        <body>
            Your Name is: $name
            <form method="post" action="retreiving_from_form.php">
                What is your name?
                <input type="text" name="name">
                <input type="submit">
            </form>
        </body>
    </html>
_END;
?>