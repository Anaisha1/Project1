<?php

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");

$errors = [];

if ($name == "") {
    $errors[] = "Please enter your name.";
}

if ($email == "") {
    $errors[] = "Please enter your email.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}

if ($subject == "") {
    $errors[] = "Please enter a subject.";
}

if ($message == "") {
    $errors[] = "Please enter a message.";
}

$pageTitle = "Contact Results";
include "includes/header.php";

if (!empty($errors)) {

    echo "<section>";
    echo "<h2>There were some problems:</h2>";
    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    echo "</ul>";

    echo "<p><a class='btn' href='contact.php'>Go Back</a></p>";

    echo "</section>";

} else {

    echo "<section>";

    echo "<h2>Thank You!</h2>";

    echo "<p>Thanks, <strong>$name</strong>.</p>";

    echo "<p>Your message has been received.</p>";

    echo "<p><strong>Email:</strong> $email</p>";

    echo "<p><strong>Subject:</strong> $subject</p>";

    echo "<p><strong>Your Message:</strong></p>";

    echo "<p>$message</p>";

    echo "<p><a class='btn' href='index.php'>Return Home</a></p>";

    echo "</section>";
}

include "includes/footer.php";
?>