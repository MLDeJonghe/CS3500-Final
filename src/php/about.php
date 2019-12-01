<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <title>Bumbu Indonesian Cuisine</title>
</head>

<body>
    <?php
    include "nav.inc.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="display-4">About The Developers</h1>
                    <hr class="bg-primary my-4">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="../images/pic.jpg" alt="Avatar" style="width:300px;height:300px;" class="rounded-circle border-primary">
                        <h1>Darryl</h1>
                        <p>Junior in Western Michigan University</p>
                        <a href="https://github.com/Gandlfer"><img src="..\images\GitHub-Mark-120px-plus.png" class="github" width=25px height=25px></a>
                        <div data-aos="fade-right">
                            Darryl is a 20 year old Junior in Western Michigan University, currently pursuing his Bachelor in Computer Science. He was born in Malacca, Malaysia. At the age of 17, he started programming in INTI College Penang. He was involved in a Student Employment
                            Project with Plexus for their Human Resource Team.
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../images/Me.jpg" alt="Avatar" style="width:300px;height:300px;" class="rounded-circle border-primary">
                        <h1>Mitch</h1>
                        <p>Senior in Western Michigan University</p>
                        <a href="https://github.com/Gandlfer"><img src="..\images\GitHub-Mark-120px-plus.png" class="github" width=25px height=25px></a>
                        <div data-aos="fade-left">
                            Mitch is a 23 year old computer science student attending Western Michigan University.
                            His interests include software and web develeopment, music production, and gaming. He is currently seeking an internship for the summer of 2020.
                        </div>
                    </div>
                </div>
                <hr class="bg-primary my-4">
                <div class="row">
                    <div class="col" data-aos="fade-up">
                        <div  class="p-5 shadow-sm rounded">
                            <h2>Project Team Number: <strong>5</strong></h2>
                            <h2>Project Description:</h2>
                            <p>For our project we've taken on the task of designing a web page for a fictitious restaurant called Bumbu. This idea originated from a graphic design project Mitch's girlfriend had been working on where the task was to create an identity for
                                an Indonesian restaurant. Our team took this to the next step and decided to conceive a mock webpage for this restaurant. In this project we have laid out a full menu and even an order page. The order page currently has no functionality,
                                but it could be implemented in the future. We decided to avoid using Bootstrap and styled everything by hand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer.inc.php";
    ?>
    <script>
        AOS.init();
    </script>
</body>