<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["n"];
    $b = $_POST["a"];
    $c = $_POST["d"];
    $d = $_POST["g"];
    $e = $_POST["e"];
    $f = $_POST["p"];
    $g = $_POST["s"];

    // Connect to MySQL using mysqli
    $con = mysqli_connect("localhost", "root", "", "bike_company"); // changed: no space in DB name

    // Check connection
    if (!$con) {
        die(" Connection failed: " . mysqli_connect_error());
    }

    // Prepare query
    $sql = "INSERT INTO data(n, a, d, g, e, p, s) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sisssss", $a, $b, $c, $d, $e, $f, $g);
        mysqli_stmt_execute($stmt);
        echo "<h3> Registered Successfully</h3>";
        mysqli_stmt_close($stmt);
    } else {
        echo "Error in query: " . mysqli_error($con);
    }

    // Optional: Show the form again
    include("register.php");

    // Close connection
    mysqli_close($con);
} else {
    echo " Form not submitted.";
}
?>
