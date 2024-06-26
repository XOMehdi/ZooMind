<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/about.css" />
    <!-- <script src="../js/about.js" defer></script> -->
    <title>ZooMind - About</title>
    <?php include_once('../include/sidebar.php'); ?>

    <header>
    </header>
    <section class="about">
        <div class="main">
            <img id="site-logo" src="../img/site_logo.png">
            <div class="about-text">
                <h1>About</h1>
                <h5>ZooMind <span id="text-2">Founders</span> </h5>
                <h5>Mohammad Mehdi <span>&</span> Abdullah Khan</h5>
                <p>ZooMind is an interactive and educational web application that allows users to test their
                    knowledge about animals. The game presents a series of animals-related multiple choice
                    questions, ranging from animal breeds to interesting animal facts. Users can select
                    answers, receive feedback on their performance, and view their final score at the end of
                    the quiz.
                    The project aims to entertain users while educating them about various aspects of
                    animals.
                </p>
                <button type="button" id="btn">Contact Us</button>
            </div>
        </div>
    </section>
    </body>

</html>