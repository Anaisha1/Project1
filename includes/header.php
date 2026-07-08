<?php
if (!isset($pageTitle)) {
    $pageTitle = "FitLife";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> | FitLife</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>

    <div class="container">

        <div class="logo">
            <h1>FitLife</h1>
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="workouts.php">Workouts</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    </div>

</header>

<main>