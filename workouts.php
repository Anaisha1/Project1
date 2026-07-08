<?php
$pageTitle = "Workouts";
include "includes/header.php";
?>

<link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Cinzel:wght@400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<section class="page-header">
    <h1>Workout Library</h1>
    <p>Choose a workout that matches your fitness goals.</p>
</section>

<section class="card-container">

    <article class="card">
        <img src="images/cardio.jpg" alt="Cardio Workout">
        <h3>Cardio</h3>
        <p>
            Cardio exercises help improve heart health, increase endurance,
            and burn calories. Try walking, jogging, cycling, or jump rope.
        </p>
    </article>

    <article class="card">
        <img src="images/strength.jpg" alt="Strength Workout">
        <h3>Strength Training</h3>
        <p>
            Build muscle and improve overall strength with squats,
            push-ups, lunges, dumbbells, and resistance exercises.
        </p>
    </article>

    <article class="card">
        <img src="images/stretching.jpg" alt="Stretching">
        <h3>Flexibility</h3>
        <p>
            Stretching improves flexibility, posture, and recovery while
            reducing muscle soreness after workouts.
        </p>
    </article>

    <article class="card">
        <img src="images/hiit.jpg" alt="HIIT Workout">
        <h3>HIIT</h3>
        <p>
            High-Intensity Interval Training combines short bursts of
            intense exercise with brief recovery periods.
        </p>
    </article>

    <article class="card">
        <img src="images/yoga.jpg" alt="Yoga">
        <h3>Yoga</h3>
        <p>
            Yoga helps improve flexibility, balance, breathing, and
            relaxation while reducing stress.
        </p>
    </article>

    <article class="card">
        <img src="images/core.jpg" alt="Core Workout">
        <h3>Core Training</h3>
        <p>
            Strengthen your abdominal and lower back muscles with planks,
            crunches, and stability exercises.
        </p>
    </article>

</section>

<?php include "includes/footer.php"; ?>