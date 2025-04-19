
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["username"]);
    echo "Hello, " . $name . "! Your data has been received.";
}
?>
