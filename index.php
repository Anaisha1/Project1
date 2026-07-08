<?php
$pageTitle = "Home";
include "includes/header.php";
?>
<link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Cinzel:wght@400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<section class="hero">
    <img src="images/hero.jpg" alt="Fitness Hero">

    <div class="hero-overlay">
        <h1>Welcome to FitLife</h1>
        <p>Your journey toward a healthier lifestyle starts here.</p>

        <a href="workouts.php" class="hero-btn">
            Explore Workouts
        </a>
    </div>
</section>

<section class="intro">
    <h2>About FitLife</h2>

    <p>
        FitLife is designed to help beginners and fitness enthusiasts
        find simple workouts, healthy habits, and motivation to stay active.
        Whether your goal is building strength, improving endurance,
        or living a healthier lifestyle, this website provides helpful
        information to get started.
    </p>
</section>

<section class="featured">
    <h2>Featured Workouts</h2>

    <div class="card-container">

        <article class="card">
            <img src="images/cardio.jpg" alt="Cardio Workout">
            <h3>Cardio</h3>
            <p>
                Improve your endurance with beginner-friendly cardio exercises
                that help strengthen your heart and burn calories.
            </p>
        </article>

        <article class="card">
            <img src="images/strength.jpg" alt="Strength Training">
            <h3>Strength</h3>
            <p>
                Build muscle and increase overall body strength using simple
                bodyweight and resistance exercises.
            </p>
        </article>

        <article class="card">
            <img src="images/stretching.jpg" alt="Stretching">
            <h3>Flexibility</h3>
            <p>
                Stretching exercises improve flexibility, reduce stiffness,
                and help prevent injuries.
            </p>
        </article>

    </div>
</section>

<section class="tips">
    <h2>Healthy Living Tips</h2>

    <ul>
        <li>Exercise at least 30 minutes each day.</li>
        <li>Drink plenty of water.</li>
        <li>Get enough sleep every night.</li>
        <li>Eat balanced meals with fruits and vegetables.</li>
    </ul>
</section>

<?php include "includes/footer.php"; ?>
