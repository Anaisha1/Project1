<?php
$pageTitle = "Contact";
include "includes/header.php";
?>

<link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Cinzel:wght@400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<section class="page-header">
    <h1>Contact Us</h1>
    <p>Have questions? We'd love to hear from you.</p>
</section>

<section class="contact-form">

<form action="process_contact.php" method="post">

    <label for="name">Full Name</label>
    <input
        type="text"
        id="name"
        name="name"
        required
    >

    <label for="email">Email Address</label>
    <input
        type="email"
        id="email"
        name="email"
        required
    >

    <label for="subject">Subject</label>
    <input
        type="text"
        id="subject"
        name="subject"
        required
    >

    <label for="message">Message</label>
    <textarea
        id="message"
        name="message"
        rows="6"
        required
    ></textarea>

    <button class="btn" type="submit">
        Send Message
    </button>

</form>

</section>

<?php include "includes/footer.php"; ?>